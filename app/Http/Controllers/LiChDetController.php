<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLi_ch_detsRequest;
use App\Models\Li_ch_det;
use App\Models\List_checkup;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LiChDetController extends Controller
{
    //    public function __construct()
    //    {
    //        $this->authorizeResource(Li_ch_det::class, 'Li_ch_det');
    //    }
    public function index()
    {
        return view('liChDet.index', [
            'li_ch_dets' => Li_ch_det::query()
                ->when(request('search'), function ($query) {
                    $query->search(request('search'));
                })->latest()->paginate(PAGINATION_COUNT),
        ]);
    }

    public function create()
    {
        $list_checkups = List_checkup::all();
        return view('liChDet.create', compact('list_checkups'));
    }

    public function store(StoreLi_ch_detsRequest $request)
    {
        Li_ch_det::create([
            'name'            => $request->name,
            'list_checkup_id' => $request->list_checkup_id,
        ]);
        toast('Success created', 'success');
        return redirect(Route('li_ch_dets.index'));
    }

    public function show(Li_ch_det $li_ch_det)
    {
        return view('liChDet.show', compact('li_ch_det'));
    }

    public function edit($id)
    {
        $li_ch_dets = Li_ch_det::findorFail($id);
        $list_checkups = List_checkup::all();
        return view('liChDet.edit', compact('li_ch_dets', 'list_checkups'));
    }

    public function update(StoreLi_ch_detsRequest $request, $id)
    {
        $li_ch_dets = Li_ch_det::findorFail($id);
        $li_ch_dets->update([
            'name'            => $request->name,
            'list_checkup_id' => $request->list_checkup_id,
        ]);
        toast('Success updated', 'success');
        return redirect(Route('li_ch_dets.index'));
    }

    public function destroy($id)
    {
        Li_ch_det::destroy($id);
        toast('Success deleted', 'success');
        return redirect(Route('li_ch_dets.index'));
    }
    public function autocompleteSearch(Request $request)
    {
        $query = $request->get('query');
        $filterResult = Li_ch_det::where('name', 'LIKE', '%' . $query . '%')->get();
        return response()->json($filterResult);
    }
}
