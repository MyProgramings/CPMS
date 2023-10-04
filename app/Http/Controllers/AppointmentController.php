<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAppointmentsRequest;
use App\Models\Appointment;
use App\Models\Pat_giving;
use App\Models\Patient;
use App\Models\Psy_as;
use App\Models\R_checkup;
use App\Models\R_def_med;
use App\Models\Soc_as;
use App\Models\User;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        return view('appointment.index', [
            'appointments' => Appointment::query()
                ->when(request('search'), function ($query) {
                    $query->search(request('search'));
                })->latest()->paginate(PAGINATION_COUNT),
        ]);
    }
    public function create()
    {
        $data = [
            'patients' => Patient::all(),
            'users' => User::where('role_id', 4)->get(),
        ];
        return view('appointment.create')->with($data);
    }
    public function store(StoreAppointmentsRequest $request)
    {
        $appointment = Appointment::create([
            'user_id'       => $request->user_id,
            'reciption' => $request->reciption,
            'patient_id'   => $request->patient_id,
            'nots'       => $request->nots,
        ]);
        $appointments_id = Appointment::latest()->first('id');
        if ($request->Add_pat_givings == 1) {
            Pat_giving::create([
                // 'r_def_med_id'        => $request->inventoris_id,
                'appointment_id' => $appointments_id->id,
                'patient_id'        => $request->patient_id,
            ]);
        }
        toast('Success created', 'success');
        return redirect(Route('appointments.index'));
    }
    public function show(Appointment $appointment)
    {
        return view('appointment.show', compact('appointment'));
    }

    public function edit($id)
    {
        $data = [
            'patients' => Patient::all(),
            'users' => User::where('role_id', 4)->get(),
            'r_checkups' => R_checkup::where('appointment_id', $id)->get(),
            'r_def_meds' => R_def_med::where('appointment_id', $id)->get(),
            'psy_ass' => Psy_as::where('appointment_id', $id)->get(),
            'soc_ass' => Soc_as::where('appointment_id', $id)->get(),
            'pat_givings' => Pat_giving::where('appointment_id', $id)->get(),
        ];
        $appointments = Appointment::findorFail($id);
        return view('appointment.edit', compact('appointments'))->with($data);
    }

    public function update(StoreAppointmentsRequest $request, $id)
    {
        $appointment = Appointment::findorFail($id);
        $appointment->update([
            'user_id'       => $request->user_id,
            'reciption' => $request->reciption,
            'patient_id'   => $request->patient_id,
            'nots'       => $request->nots,
            'close_appointment'   => $request->close_appointment,
        ]);
        toast('Success updated', 'success');
        return redirect(Route('appointments.index'));
    }

    public function destroy($id)
    {
        Appointment::destroy($id);
        toast('Success deleted', 'success');
        return redirect(Route('appointments.index'));
    }

    public function autocompleteSearch(Request $request)
    {
        $query = $request->get('query');
        $filterResult = Appointment::where('date', 'LIKE', '%' . $query . '%')->get();
        return response()->json($filterResult);
    }
}
