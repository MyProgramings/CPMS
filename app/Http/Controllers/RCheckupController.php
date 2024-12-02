<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreR_checkupsRequest;
use App\Http\Requests\UpdateR_checkupsRequest;
use App\Models\Appointment;
use App\Models\Li_ch_det;
use App\Models\List_checkup;
use App\Models\Patient;
use App\Models\R_checkup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class RCheckupController extends Controller
{
    public function index(Request $request)
    {
        if($request->appointment_ids){
            $r_checkups = R_checkup::join('patients', 'patients.id', '=', 'r_checkups.patient_id')
                ->select('r_checkups.*', 'patients.name')
                ->where('patients.name', 'like', '%' . $request->search . '%')
                ->where('description_res', '!=', null)
                ->where('appointment_id', '=', $request->appointment_ids)
                ->latest()->paginate(PAGINATION_COUNT);
            return view('rCheckup.index', compact('r_checkups'));
        }
        if ($request->patient) {
            $r_checkups = R_checkup::join('patients', 'patients.id', '=', 'r_checkups.patient_id')
                ->select('r_checkups.*', 'patients.name')
                ->where('patients.id', '=', $request->patient)
                ->where('description_res', '=', null)
                ->latest()->paginate(PAGINATION_COUNT);
            return view('rCheckup.index', compact('r_checkups'));
        }
        if ($request->search == '' && $request->filter) {
            if ($request->filter == 'ready') {
                $r_checkups = R_checkup::where('description_res', '!=', null)->latest()->paginate(PAGINATION_COUNT);
                return view('rCheckup.index', compact('r_checkups'));
            } elseif ($request->filter == 'requird') {
                $r_checkups = R_checkup::where('description_res', '=', null)->latest()->paginate(PAGINATION_COUNT);
                return view('rCheckup.index', compact('r_checkups'));
            } else {
                return view('rCheckup.index', [
                    'r_checkups' => R_checkup::query()
                        ->when(request('search'), function ($query) {
                            $query->search(request('search'));
                        })->latest()->paginate(PAGINATION_COUNT),
                ]);
            }
        } elseif ($request->search && $request->filter) {
            if ($request->filter == 'ready') {
                $r_checkups = R_checkup::join('patients', 'patients.id', '=', 'r_checkups.patient_id')
                    ->select('r_checkups.*', 'patients.name')
                    ->where('patients.name', 'like', '%' . $request->search . '%')
                    ->where('description_res', '!=', null)
                    ->latest()->paginate(PAGINATION_COUNT);
                return view('rCheckup.index', compact('r_checkups'));
            } elseif ($request->filter == 'requird') {
                $r_checkups = R_checkup::join('patients', 'patients.id', '=', 'r_checkups.patient_id')
                    ->select('r_checkups.*', 'patients.name')
                    ->where('patients.name', 'like', '%' . $request->search . '%')
                    ->where('description_res', '=', null)
                    ->latest()->paginate(PAGINATION_COUNT);
                return view('rCheckup.index', compact('r_checkups'));
            } else {
                $r_checkups = R_checkup::join('patients', 'patients.id', '=', 'r_checkups.patient_id')
                    ->select('r_checkups.*', 'patients.name')
                    ->where('patients.name', 'like', '%' . $request->search . '%')
                    ->latest()->paginate(PAGINATION_COUNT);
                return view('rCheckup.index', compact('r_checkups'));
            }
        } else {
            $r_checkups = R_checkup::join('patients', 'patients.id', '=', 'r_checkups.patient_id')
                ->select('r_checkups.*', 'patients.name')
                ->where('patients.name', 'like', '%' . $request->search . '%')
                ->latest()->paginate(PAGINATION_COUNT);
            return view('rCheckup.index', compact('r_checkups'));
        }
    }
    public function create()
    {
        $data = [
            'list_checkups' => List_checkup::all(),
            'li_ch_dets' => Li_ch_det::all(),
            'patients' => Patient::all(),
            'appointments' => Appointment::all(),
        ];
        return view('rCheckup.create')->with($data);
    }
    public function create_W_App($id)
    {
        $data = [
            'list_checkups' => List_checkup::all(),
            'li_ch_dets' => Li_ch_det::all(),
            'appointments' => Appointment::where('id', $id)->get(),
        ];
        return view('rCheckup.create')->with($data);
    }

    public function store(StoreR_checkupsRequest $request)
    {
        R_checkup::create([
            'list_checkup_id' => $request->list_checkup_id,
            'li_ch_det_id' => $request->li_ch_det_id,
            'description_res' => $request->description_res,
            'description_check' => $request->description_check,
            'user_id'       => $request->user_id,
            'appointment_id' => $request->appointment_id,
            'patient_id' => $request->patient_id,
            // 'laboratorie' => $request->laboratorie,
        ]);
        toast('Success created','success');
        return redirect()->back();
    }

    public function show(R_checkup $r_checkup)
    {
        return view('rCheckup.show', compact('r_checkup'));
    }

    public function edit($id)
    {
        $data = [
            'list_checkups' => List_checkup::all(),
            'li_ch_dets' => Li_ch_det::all(),
            'appointments' => Appointment::where('id', $id)->get(),
        ];
        $r_checkups = R_checkup::findorFail($id);
        return view('rCheckup.edit', compact('r_checkups'))->with($data);
    }

    public function update(UpdateR_checkupsRequest $request, $id)
    {
        $r_checkup = R_checkup::findorFail($id);
        if($r_checkup->laboratorie){
            $request->laboratorie = $r_checkup->laboratorie;
        }
        $r_checkup->update([
            // 'list_checkup_id'=> $request->list_checkup_id,
            // 'li_ch_det_id'=> $request->li_ch_det_id,
            'description_res' => $request->description_res,
            'description_check' => $request->description_check,
            // 'user_id'       => $request->user_id,
            // 'appointment_id'=> $request->appointment_id,
            'patient_id' => $request->patient_id,
            'laboratorie' => $request->laboratorie,
        ]);
        toast('Success updated','success');
        $patient = $request->patient_id;
        return redirect(Route('r_checkups.index', compact('patient')));
    }

    public function destroy($id)
    {
        R_checkup::destroy($id);
        toast('Success deleted','success');
        return redirect(Route('r_checkups.index'));
    }
    public  function search()
    {
        return view('rCheckup.autocomplete');
    }
    public function autocompleteSearch(Request $request)
    {
        $query = $request->get('query');
        $filterResult = R_checkup::where('name', 'LIKE', '%' . $query . '%')->get();
        return response()->json($filterResult);
    }
    
    public function getli_ch_dets($id)
    {
        $li_ch_dets = DB::table("li_ch_dets")->where("list_checkup_id", $id)->pluck("name", "id");
        return json_encode($li_ch_dets);
    }
}
