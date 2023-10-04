<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreList_checkupsRequest;
use App\Models\List_checkup;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ListCheckupController extends Controller
{
    //    public function __construct()
    //    {
    //        $this->authorizeResource(List_checkup::class, 'list_checkup');
    //    }
    public function index()
    {
        $list_checkups = List_checkup::latest()->paginate(PAGINATION_COUNT);
        return view('listCheckup.index', compact('list_checkups'));
    }

    public function create()
    {
        return view('listCheckup.create');
    }

    public function store(StoreList_checkupsRequest $request)
    {
        $list_checkups = List_checkup::create([
            'name' => $request->name,
        ]);
        toast('Success created', 'success');
        return redirect(Route('list_checkups.index'));
    }

    public function show(List_checkup $list_checkup)
    {
        return view('listCheckup.show', compact('list_checkup'));
    }

    public function edit($id)
    {
        $list_checkups = List_checkup::findorFail($id);
        return view('listCheckup.edit', compact('list_checkups'));
    }

    public function update(StoreList_checkupsRequest $request, $id)
    {
        $list_checkups = List_checkup::findorFail($id);
        $list_checkups->update([
            'name' => $request->name,
        ]);
        toast('Success updated', 'success');
        return redirect(Route('list_checkups.index'));
    }

    public function destroy($id)
    {
        List_checkup::destroy($id);
        toast('Success deleted', 'success');
        return redirect(Route('list_checkups.index'));
    }
    public function autocompleteSearch(Request $request)
    {
        $query = $request->get('query');
        $filterResult = List_checkup::where('name', 'LIKE', '%' . $query . '%')->get();
        return response()->json($filterResult);
    }
}
