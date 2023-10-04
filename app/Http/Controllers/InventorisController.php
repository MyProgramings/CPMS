<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInventoriesRequest;
use App\Models\Inventoris;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class InventorisController extends Controller
{
    public function index(Request $request)
    {
        // في حالة عدم تحديد تاريخ والأنتهاء
        if ($request->type && $request->finsh == '' && $request->start_at == '' && $request->end_at == '') {

            $inventorys = Inventoris::select('*')->where('medicine_type', '=', $request->type)->latest()->paginate(PAGINATION_COUNT);
            $type = $request->type;
            return view('inventory.index', compact('type', 'inventorys'));
        }

        // في حالة عدم تحديد التاريخ والنوع
        else if ($request->type == '' && $request->finsh && $request->start_at == '' && $request->end_at == '') {
            if ($request->finsh == 'finsh') {
                $inventorys = Inventoris::whereDate('complete_date', '<=', today())->latest()->paginate(PAGINATION_COUNT);
                return view('inventory.index', compact('inventorys'));
            } else if ($request->finsh == 'not_finsh') {
                $inventorys = Inventoris::whereDate('complete_date', '>', now()->subDays(-30))->latest()->paginate(PAGINATION_COUNT);
                return view('inventory.index', compact('inventorys'));
            } else {
                $inventorys = Inventoris::whereDate('complete_date', '>', today())->whereDate('complete_date', '<', now()->subDays(-30))->latest()->paginate(PAGINATION_COUNT);
                return view('inventory.index', compact('inventorys'));
            }
        }

        // في حالة عدم تحديد النوع والأنتهاء
        else if ($request->type == '' && $request->finsh == '' && $request->start_at && $request->end_at) {
            $start_at = date($request->start_at);
            $end_at = date($request->end_at);
            $type = $request->type;
            $inventorys = Inventoris::whereBetween('created_at', [$start_at, $end_at])->latest()->paginate(PAGINATION_COUNT);
            return view('inventory.index', compact('type', 'start_at', 'end_at', 'inventorys'));
        }

        // في حالة عدم تحديد الأنتهاء
        else if ($request->type && $request->finsh == '' && $request->start_at && $request->end_at) {

            $start_at = date($request->start_at);
            $end_at = date($request->end_at);
            $type = $request->type;
            $inventorys = Inventoris::whereBetween('created_at', [$start_at, $end_at])->where('medicine_type', '=', $request->type)->latest()->paginate(PAGINATION_COUNT);
            return view('inventory.index', compact('type', 'start_at', 'end_at', 'inventorys'));
        }

        // في حالة عدم تحديد النوع
        else if ($request->type == '' && $request->finsh && $request->start_at && $request->end_at) {

            $start_at = date($request->start_at);
            $end_at = date($request->end_at);
            if ($request->finsh == 'finsh') {
                $inventorys = Inventoris::whereDate('complete_date', '<=', today())->whereBetween('created_at', [$start_at, $end_at])->latest()->paginate(PAGINATION_COUNT);
                return view('inventory.index', compact('inventorys', 'start_at', 'end_at'));
            } else if ($request->finsh == 'not_finsh') {
                $inventorys = Inventoris::whereDate('complete_date', '>', today())->whereBetween('created_at', [$start_at, $end_at])->latest()->paginate(PAGINATION_COUNT);
                return view('inventory.index', compact('inventorys', 'start_at', 'end_at'));
            } else {
                $inventorys = Inventoris::whereDate('complete_date', '>', today())->whereDate('complete_date', '<', now()->subDays(-30))->whereBetween('created_at', [$start_at, $end_at])->latest()->paginate(PAGINATION_COUNT);
                return view('inventory.index', compact('inventorys', 'start_at', 'end_at'));
            }
        } else if ($request->type && $request->finsh && $request->start_at == '' && $request->end_at == '') {
            $type = $request->type;
            $finsh = $request->finsh;
            if ($request->finsh == 'finsh') {
                $inventorys = Inventoris::whereDate('complete_date', '<=', today())->where('medicine_type', '=', $request->type)->latest()->paginate(PAGINATION_COUNT);
                return view('inventory.index', compact('inventorys', 'type', 'finsh'));
            } else if ($request->finsh == 'not_finsh') {
                $inventorys = Inventoris::whereDate('complete_date', '>', today())->where('medicine_type', '=', $request->type)->latest()->paginate(PAGINATION_COUNT);
                return view('inventory.index', compact('inventorys', 'type', 'finsh'));
            } else {
                $inventorys = Inventoris::whereDate('complete_date', '>', today())->whereDate('complete_date', '<', now()->subDays(-30))->where('medicine_type', '=', $request->type)->latest()->paginate(PAGINATION_COUNT);
                return view('inventory.index', compact('inventorys', 'type', 'finsh'));
            }
        } else if ($request->type && $request->finsh && $request->start_at && $request->end_at) {
            $start_at = date($request->start_at);
            $end_at = date($request->end_at);
            $type = $request->type;
            $finsh = $request->finsh;
            if ($request->finsh == 'finsh') {
                $inventorys = Inventoris::whereDate('complete_date', '<=', today())->where('medicine_type', '=', $request->type)->whereBetween('created_at', [$start_at, $end_at])->latest()->paginate(PAGINATION_COUNT);
                return view('inventory.index', compact('inventorys', 'type', 'finsh', 'start_at', 'end_at'));
            } else if ($request->finsh == 'not_finsh') {
                $inventorys = Inventoris::whereDate('complete_date', '>', today())->where('medicine_type', '=', $request->type)->whereBetween('created_at', [$start_at, $end_at])->latest()->paginate(PAGINATION_COUNT);
                return view('inventory.index', compact('inventorys', 'type', 'finsh', 'start_at', 'end_at'));
            } else {
                $inventorys = Inventoris::whereDate('complete_date', '>', today())->whereDate('complete_date', '<', now()->subDays(-30))->where('medicine_type', '=', $request->type)->whereBetween('created_at', [$start_at, $end_at])->latest()->paginate(PAGINATION_COUNT);
                return view('inventory.index', compact('inventorys', 'type', 'finsh', 'start_at', 'end_at'));
            }
        } else {
            return view('inventory.index', [
                'inventorys' => Inventoris::query()
                    ->when(request('search'), function ($query) {
                        $query->search(request('search'));
                    })->latest()->paginate(PAGINATION_COUNT)
            ]);
        }
    }
    public function create()
    {
        return view('inventory.create');
    }

    public function store(StoreInventoriesRequest $request)
    {
        Inventoris::create([
            'name'            => $request->name,
            'quantity'        => $request->quantity,
            'power'           => $request->power,
            'medicines_shape' => $request->medicines_shape,
            'medicine_type'   => $request->medicine_type,
            'complete_date'   => $request->complete_date,
            'notes_inv'       => $request->notes_inv,
            'price'           => $request->price,
            'store_keeper' => $request->store_keeper,
        ]);
        toast('Success created', 'success');
        return redirect(Route('inventories.index'));
    }

    public function show(Inventoris $inventory)
    {
        return view('inventory.show', compact('inventory'));
    }

    public function edit($id)
    {
        $inventorys = Inventoris::findorFail($id);
        return view('inventory.edit', compact('inventorys'));
    }

    public function update(StoreInventoriesRequest $request, $id)
    {

        $inventorys = Inventoris::findorFail($id);
        $inventorys->update([
            'name'            => $request->name,
            'quantity'        => $request->quantity,
            'power'           => $request->power,
            'medicines_shape' => $request->medicines_shape,
            'medicine_type'   => $request->medicine_type,
            'complete_date'   => $request->complete_date,
            'notes_inv'       => $request->notes_inv,
            'price'           => $request->price,
            'store_keeper' => $request->store_keeper,
        ]);
        toast('Success updated', 'success');
        return redirect(Route('inventories.index'));
    }

    public function destroy($id)
    {
        Inventoris::destroy($id);
        toast('Success deleted', 'success');
        return redirect(Route('inventories.index'));
    }
    public function autocompleteSearch(Request $request)
    {
        $query = $request->get('query');
        $filterResult = Inventoris::where('name', 'LIKE', '%' . $query . '%')->get();
        return response()->json($filterResult);
    }
}
