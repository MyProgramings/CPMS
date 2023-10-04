<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreR_def_medsRequest;
use App\Http\Requests\UpdateR_def_medsRequest;
use App\Models\Appointment;
use App\Models\Inventoris;
use App\Models\Pat_giving;
use App\Models\Patient;
use App\Models\R_def_med;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class RDefMedController extends Controller
{
    public function index(Request $request)
    {
        if ($request->search == '' && $request->filter) {
            if ($request->filter == 'ready') {
                $r_def_meds = R_def_med::where('confirm_med', '=', null)->latest()->paginate(PAGINATION_COUNT);
                return view('rDefMed.index', compact('r_def_meds'));
            } elseif ($request->filter == 'requird') {
                $r_def_meds = R_def_med::where('confirm_med', '!=', null)->latest()->paginate(PAGINATION_COUNT);
                return view('rDefMed.index', compact('r_def_meds'));
            } else {
                return view('rDefMed.index', [
                    'r_def_meds' => R_def_med::query()
                        ->when(request('search'), function ($query) {
                            $query->search(request('search'));
                        })->latest()->paginate(PAGINATION_COUNT),
                ]);
            }
        } elseif ($request->search && $request->filter) {
            if ($request->filter == 'ready') {
                $r_def_meds = R_def_med::join('patients', 'patients.id', '=', 'r_def_meds.patient_id')
                    ->select('r_def_meds.*', 'patients.name')
                    ->where('patients.name', 'like', '%' . $request->search . '%')
                    ->where('confirm_med', '=', null)
                    ->latest()->paginate(PAGINATION_COUNT);
                return view('rDefMed.index', compact('r_def_meds'));
            } elseif ($request->filter == 'requird') {
                $r_def_meds = R_def_med::join('patients', 'patients.id', '=', 'r_def_meds.patient_id')
                    ->select('r_def_meds.*', 'patients.name')
                    ->where('patients.name', 'like', '%' . $request->search . '%')
                    ->where('confirm_med', '!=', null)
                    ->latest()->paginate(PAGINATION_COUNT);
                return view('rDefMed.index', compact('r_def_meds'));
            } else {
                $r_def_meds = R_def_med::join('patients', 'patients.id', '=', 'r_def_meds.patient_id')
                    ->select('r_def_meds.*', 'patients.name')
                    ->where('patients.name', 'like', '%' . $request->search . '%')
                    ->latest()->paginate(PAGINATION_COUNT);
                return view('rDefMed.index', compact('r_def_meds'));
            }
        } else {
            $r_def_meds = R_def_med::join('patients', 'patients.id', '=', 'r_def_meds.patient_id')
                ->select('r_def_meds.*', 'patients.name')
                ->where('patients.name', 'like', '%' . $request->search . '%')
                ->latest()->paginate(PAGINATION_COUNT);
            return view('rDefMed.index', compact('r_def_meds'));
        }
    }

    public function create()
    {
        $data = [
            'appointments' => Appointment::all(),
            'patients' => Patient::all(),
            'inventorys' => Inventoris::all(),
        ];
        return view('rDefMed.create')->with($data);
    }
    public function create_W_App($id)
    {
        $data = [
            'inventorys' => Inventoris::all(),
            'patients' => Patient::all(),
            'appointments' => Appointment::where('id', $id)->get(),
        ];
        return view('rDefMed.create')->with($data);
    }

    public function store(StoreR_def_medsRequest $request)
    {
        R_def_med::create([
            'user_id'       => $request->user_id,
            'appointment_id' => $request->appointment_id,
            'patient_id' => $request->patient_id,
            'pharmacist' => $request->pharmacist,
            'preparer' => $request->preparer,
            'inventoris_id' => $request->inventoris_id,
            'quantity' => $request->quantity,
            'quantity_total' => $request->quantity_total,
            'medicine_type' => $request->medicine_type,
            'power' => $request->power,
            'each_day' => $request->each_day,
            'duration' => $request->duration,
            'confirm_med' => $request->confirm_med,
            'confirm' => $request->confirm,
            'description_medic' => $request->description_medic,
        ]);
        toast('Success created', 'success');
        return redirect()->back();
    }

    public function show(R_def_med $r_def_med)
    {
        return view('rDefMed.show', compact('r_def_med'));
    }

    public function edit($id)
    {
        $data = [
            'appointments' => Appointment::where('id', $id)->get(),
        ];
        $r_def_meds = R_def_med::findorFail($id);
        return view('rDefMed.edit', compact('r_def_meds'))->with($data);
    }
    public function mediacnt_Edit_Prep($id)
    {
        $data = [
            'appointments' => Appointment::all(),
            'appointments' => Appointment::all(),
            'patients' => Patient::all(),
            'inventorys' => Inventoris::all(),
        ];
        $r_def_meds = R_def_med::findorFail($id);
        return view('rDefMed.edit_prep', compact('r_def_meds'))->with($data);
    }

    public function update(UpdateR_def_medsRequest $request, $id)
    {
        $r_def_med = R_def_med::findorFail($id);
        if ($r_def_med->confirm_med) {
            $request->confirm_med = $r_def_med->confirm_med;
        }
        if ($r_def_med->confirm) {
            $request->confirm = $r_def_med->confirm;
        }
        if ($r_def_med->pharmacist) {
            $request->pharmacist = $r_def_med->pharmacist;
        }
        if ($r_def_med->preparer) {
            $request->preparer = $r_def_med->preparer;
        }
        $r_def_med->update([
            // 'user_id'       => $request->user_id,
            // 'appointment_id'=> $request->appointment_id,
            // 'patient_id'=> $request->patient_id,
            'pharmacist' => $request->pharmacist,
            'preparer' => $request->preparer,
            // 'inventoris_id'=> $request->inventoris_id,
            // 'quantity'=> $request->quantity,
            // 'quantity_total'=> $request->quantity_total,
            // 'medicine_type'=> $request->medicine_type,
            // 'power'=> $request->power,
            // 'each_day'=> $request->each_day,
            // 'duration'=> $request->duration,
            'confirm_med' => $request->confirm_med,
            'confirm' => $request->confirm,
            // 'description_medic'=> $request->description_medic,
        ]);
        $r_def_meds = R_def_med::where('id', $id)->get();
        foreach ($r_def_meds as $r_def_med) {
            $r_def_med_s = $r_def_med;
        }
        if ($request->medicine_type == 'chemist' && $request->confirm) {
            Pat_giving::create([
                'appointment_id' => $r_def_med_s->appointment_id,
                'patient_id'        => $r_def_med_s->patient_id,
                'r_def_med_id'        => $r_def_med_s->id,
            ]);
        }
        toast('Success updated', 'success');
        return redirect(Route('r_def_meds.index'));
    }

    public function destroy($id)
    {
        R_def_med::destroy($id);
        toast('Success deleted', 'success');
        return redirect(Route('r_def_meds.index'));
    }
    public  function search()
    {
        return view('rDefMed.autocomplete');
    }
    public function autocompleteSearch(Request $request)
    {
        $query = $request->get('query');
        $filterResult = R_def_med::where('name', 'LIKE', '%' . $query . '%')->get();
        return response()->json($filterResult);
    }
    public function getMedicine($id)
    {
        $medicines = DB::table("inventoris")->select("id", DB::raw("CONCAT(name, '&nbsp;&nbsp;(', medicines_shape, '-', power, ')') as full_name"))->where("medicine_type", $id)->pluck('full_name', 'id');
        return json_encode($medicines);
    }
}
