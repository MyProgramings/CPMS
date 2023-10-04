<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUsersRequest;
use App\Http\Requests\UpdateUsersRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    //    public function __construct()
    //    {
    //        $this->authorizeResource(User::class, 'users');
    //    }
        public function index()
        {
            return view('users.index',[
                'users' => User::query()
                ->when(request('search'), function ($query) {
                    $query->search(request('search'));
                })->latest()->paginate(PAGINATION_COUNT),
            ]);
        }

        public function create()
        {
            $roles = Role::all();
            return view('users.create', compact('roles'));
        }

        public function store(StoreUsersRequest $request)
        {
            $user = User::create([
                'name'            => $request->name,
                'username'         => $request->username,
                'email'       => $request->email,
                'password'       => Hash::make($request->password),
                'role_id'    => $request->role_id,
                'last_seen' => $request->last_seen,
            ]);
            toast('Success created','success');
            return redirect(Route('users.index'));
        }
        public function show(User $user)
        {
            return view('users.show', compact('user'));
        }

        public function edit($id)
        {
            $roles = Role::all();
            $users = User::findorFail($id);
            return view('users.edit', compact('users', 'roles'));
        }

        public function update(UpdateUsersRequest $request, $id)
        {
            $users = User::findorFail($id);
            $users->update([
                'name'            => $request->name,
                'username'         => $request->username,
                'email'       => $request->email,
                'password'       => Hash::make($request->password),
                'role_id'    => $request->role_id,
                'last_seen' => $request->last_seen,
            ]);
            toast('Success updated','success');
            return redirect()->route('users.index');
        }

        public function destroy($id)
        {
            User::destroy($id);
            toast('Success deleted','success');
            return redirect()->route('users.index');
        }
        public function autocompleteSearch(Request $request)
        {
            $query = $request->get('query');
            $filterResult = User::where('name', 'LIKE', '%' . $query . '%')->get();
            return response()->json($filterResult);
        }
        public  function reports(){
           return 'hello user';
        }
    }
