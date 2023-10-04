<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePatientRequest;
use App\Models\Appointment;
use App\Models\Pat_giving;
use App\Models\Patient;
use App\Models\Psy_as;
use App\Models\R_checkup;
use App\Models\R_def_med;
use App\Models\Soc_as;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PatientController extends Controller
{
    //    public function __construct()
    //    {
    //        $this->authorizeResource(Patient::class, 'patient');
    //    }
    public function index(Request $request)
    {
        // في حالة عدم تحديد البحث والجنس
        if ($request->filter && $request->gender == '' && $request->search == '') {
            $patients = Patient::select('*')->where('status', '=', $request->filter)->latest()->paginate(PAGINATION_COUNT);
            $filter = $request->filter;
            return view('patient.index', compact('filter', 'patients'));
        }
        // في حالة عدم تحديد البحث والفلتر
        else if ($request->filter == '' && $request->gender && $request->search == '') {
            $patients = Patient::select('*')->where('gender', '=', $request->gender)->latest()->paginate(PAGINATION_COUNT);
            $gender = $request->gender;
            return view('patient.index', compact('gender', 'patients'));
        }
        // في حالة عدم تحديد الجنس والفلتر
        else if ($request->filter == '' && $request->gender == '' && $request->search) {
            return view('patient.index', [
                'patients' => Patient::query()
                    ->when(request('search'), function ($query) {
                        $query->search(request('search'));
                    })->latest()->paginate(PAGINATION_COUNT),
            ]);
        }
        // في حالة عدم تحديد الجنس
        else if ($request->filter && $request->gender == '' && $request->search) {
            $patients = Patient::select('*')->where('status', '=', $request->filter)->where('patients.name', 'like', '%' . $request->search . '%')->latest()->paginate(PAGINATION_COUNT);
            $filter = $request->filter;
            $search = $request->search;
            return view('patient.index', compact('filter', 'search', 'patients'));
        }
        // في حالة عدم تحديد الفلتر
        else if ($request->filter == '' && $request->gender && $request->search) {
            $patients = Patient::select('*')->where('gender', '=', $request->gender)->where('patients.name', 'like', '%' . $request->search . '%')->latest()->paginate(PAGINATION_COUNT);
            $gender = $request->gender;
            $search = $request->search;
            return view('patient.index', compact('gender', 'search', 'patients'));
        }
        // في حالة عدم تحديد البحث
        else if ($request->filter && $request->gender && $request->search == '') {
            $patients = Patient::select('*')->where('gender', '=', $request->gender)->where('status', '=', $request->filter)->latest()->paginate(PAGINATION_COUNT);
            $filter = $request->filter;
            $gender = $request->gender;
            return view('patient.index', compact('filter', 'gender', 'patients'));
        }
        // في حالة تحديد الكل
        else if ($request->filter && $request->gender && $request->search) {
            $patients = Patient::select('*')->where('patients.name', 'like', '%' . $request->search . '%')->where('gender', '=', $request->gender)->where('status', '=', $request->filter)->latest()->paginate(PAGINATION_COUNT);
            $filter = $request->filter;
            $gender = $request->gender;
            $search = $request->search;
            return view('patient.index', compact('filter', 'gender', 'search', 'patients'));
        }
        // في حالة عدم تحديد الكل
        else {
            return view('patient.index', [
                'patients' => Patient::query()
                    ->when(request('search'), function ($query) {
                        $query->search(request('search'));
                    })->latest()->paginate(PAGINATION_COUNT),
            ]);
        }
    }

    public function create()
    {
        return view('patient.create');
    }

    public function store(StorePatientRequest $request)
    {
        $age = 0;
        if($request->Birthday < date("Y-m-d")){
            $yearofBirth = date("Y", strtotime($request->Birthday));
            $yearoftoday = date("Y");
            $age = $yearoftoday - $yearofBirth;
        }
        Patient::create([
            'name'                 => $request->name,
            'age'                  => $age,
            'place_of_birth'       => $request->place_of_birth,
            'Birthday'             => $request->Birthday,
            'gender'               => $request->gender,
            'social_status'        => $request->social_status,
            'profession'           => $request->profession,
            'nationality'          => $request->nationality,
            'card_number'          => $request->card_number,
            'permanent_address'    => $request->permanent_address,
            'temporary_address'    => $request->temporary_address,
            'near_mosque'          => $request->near_mosque,
            'phone_number'         => $request->phone_number,
            // 'file_number'          => $request->file_number,
            'file_colors'          => $request->file_colors,
            'today_date'           => $request->today_date,
            'incident_date'        => $request->incident_date,
            'previous_treatment'   => $request->previous_treatment,
            'chemotherapy'         => $request->chemotherapy,
            'radiotherapy'         => $request->radiotherapy,
            'surgery'              => $request->surgery,
            'site_of_tumor'        => $request->site_of_tumor,
            'type_of_tumor'        => $request->type_of_tumor,
            'status'               => $request->status,
            'doctors_name'         => $request->doctors_name,
            'speciality'           => $request->speciality,
            'reported_by'          => $request->reported_by,
            'is_smokeout'             => $request->is_smokeout,
            'is_khat'                 => $request->is_khat,
            'is_chwingtobaco'         => $request->is_chwingtobaco,
            'date_of_last_contact' => $request->date_of_last_contact,
            'cause_of_death'       => $request->cause_of_death,
            'notes_re'             => $request->notes_re
        ]);
        toast('Success created', 'success');
        return redirect(Route('patients.index'));
    }

    public function show(Patient $patient)
    {
        return view('patient.show', compact('patient'));
    }

    public function edit($id)
    {
        $patients = Patient::findorFail($id);
        return view('patient.edit', compact('patients'));
    }

    public function update(StorePatientRequest $request, $id)
    {
        $age = 0;
        if($request->Birthday < date("Y-m-d")){
            $yearofBirth = date("Y", strtotime($request->Birthday));
            $yearoftoday = date("Y");
            $age = $yearoftoday - $yearofBirth;
        }
        $patients = Patient::findorFail($id);
        $patients->update([
            'name'                 => $request->name,
            'age'                  => $age,
            'place_of_birth'       => $request->place_of_birth,
            'Birthday'             => $request->Birthday,
            'gender'               => $request->gender,
            'social_status'        => $request->social_status,
            'profession'           => $request->profession,
            'nationality'          => $request->nationality,
            'card_number'          => $request->card_number,
            'permanent_address'    => $request->permanent_address,
            'temporary_address'    => $request->temporary_address,
            'near_mosque'          => $request->near_mosque,
            'phone_number'         => $request->phone_number,
            // 'file_number'          => $request->file_number,
            'file_colors'          => $request->file_colors,
            'today_date'           => $request->today_date,
            'incident_date'        => $request->incident_date,
            'previous_treatment'   => $request->previous_treatment,
            'chemotherapy'         => $request->chemotherapy,
            'radiotherapy'         => $request->radiotherapy,
            'surgery'              => $request->surgery,
            'site_of_tumor'        => $request->site_of_tumor,
            'type_of_tumor'        => $request->type_of_tumor,
            'status'               => $request->status,
            'doctors_name'         => $request->doctors_name,
            'speciality'           => $request->speciality,
            'reported_by'          => $request->reported_by,
            'is_smokeout'             => $request->is_smokeout,
            'is_khat'                 => $request->is_khat,
            'is_chwingtobaco'         => $request->is_chwingtobaco,
            'date_of_last_contact' => $request->date_of_last_contact,
            'cause_of_death'       => $request->cause_of_death,
            'notes_re'             => $request->notes_re
        ]);
        toast('Success updated', 'success');
        return redirect(Route('patients.index'));
    }

    public function destroy($id)
    {
        Patient::destroy($id);
        toast('Success deleted', 'success');
        return redirect(Route('patients.index'));
    }
    public function reports(Patient $patient)
    {
        $data = [
            'appointments' => Appointment::where('patient_id', $patient->id)->get(),
            'r_checkups' => R_checkup::where('patient_id', $patient->id)->get(),
            'r_def_meds' => R_def_med::where('patient_id', $patient->id)->get(),
            'soc_ass' => Soc_as::where('patient_id', $patient->id)->get(),
            'psy_ass' => Psy_as::where('patient_id', $patient->id)->get(),
            'pat_givings' => Pat_giving::where('patient_id', $patient->id)->get(),
        ];
        return view('patient.reports', compact('patient'))->with($data);
    }
    public function autocompleteSearch(Request $request)
    {
        $query = $request->get('query');
        $filterResult = Patient::where('name', 'LIKE', '%' . $query . '%')->get();
        return response()->json($filterResult);
    }
}
