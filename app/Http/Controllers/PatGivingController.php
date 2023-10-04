<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePat_givingsRequest;
use App\Models\Appointment;
use App\Models\Pat_giving;
use App\Models\Patient;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PatGivingController extends Controller
{
    //    public function __construct()
    //    {
    //        $this->authorizeResource(Pat_giving::class, 'pat_giving');
    //    }
    public function index(Request $request)
    {
        if ($request->search) {
            $pat_givings = Pat_giving::join('patients', 'patients.id', '=', 'pat_givings.patient_id')
                ->select('pat_givings.*', 'patients.name')
                ->where('patients.name', 'like', '%' . $request->search . '%')
                ->latest()->paginate(PAGINATION_COUNT);
            return view('patGiving.index', compact('pat_givings'));
        } else {
            return view('patGiving.index', [
                'pat_givings' => Pat_giving::query()
                    ->when(request('search'), function ($query) {
                        $query->search(request('search'));
                    })->latest()->paginate(PAGINATION_COUNT),
            ]);
        }
    }

    public function create()
    {
        $data = [
            'patients' => Patient::all(),
        ];
        return view('patGiving.create')->with($data);
    }

    public function store(StorePat_givingsRequest $request)
    {
        Pat_giving::create([
            'giver'                          => $request->giver,
            'patient_id'                        => $request->patient_id,
            'name'                              => $request->name,

            'bp'                                => $request->bp,
            't'                                 => $request->t,
            'p'                                 => $request->p,
            'r'                                 => $request->r,
            'pain'                              => $request->pain,
            'wt'                                => $request->wt,
            'ht'                                => $request->ht,
            'bsa'                               => $request->bsa,
            'VAD'                               => $request->VAD,
            'ES'                                => $request->ES,
            'cycle'                             => $request->cycle,
            'day'                               => $request->day,

            'referred_doctor'                   => $request->referred_doctor,
            'check_in'                          => $request->check_in,
            'registry_sheet'                    => $request->registry_sheet,
            'pathology_report'                  => $request->pathology_report,
            'radiology_report'                  => $request->radiology_report,
            'previous_ctx'                      => $request->previous_ctx,

            'CTX_pre_date'                      => $request->CTX_pre_date,
            'ctx_previous_cycle_date'           => $request->ctx_previous_cycle_date,
            'pre_ctx_lab_test'                  => $request->pre_ctx_lab_test,
            'health_cente_visit'                => $request->health_cente_visit,
            'Inc_of_fever_bet_cyc'              => $request->Inc_of_fever_bet_cyc,
            'If_yes_value'                      => $request->If_yes_value,
            'Does_pthave_thermometer'           => $request->Does_pthave_thermometer,
            'new_complain'                      => $request->new_complain,
            'appointment_of_the_two_cycle'      => $request->appointment_of_the_two_cycle,

            'nursing_notes'                     => $request->nursing_notes,
            'doctor_note'                       => $request->doctor_note,
        ]);
        toast('Success created', 'success');
        return redirect(Route('pat_givings.index'));
    }
    public function show(Pat_giving $pat_giving)
    {
        return view('patGiving.show', compact('pat_giving'));
    }

    public function edit($id)
    {
        $data = [
            'patients' => Patient::all(),
            'appointments' => Appointment::where('id', $id)->get(),
        ];
        $pat_givings = Pat_giving::findorFail($id);
        return view('patGiving.edit', compact('pat_givings'))->with($data);
    }

    public function update(StorePat_givingsRequest $request, $id)
    {
        $pat_giving = Pat_giving::findorFail($id);
        $pat_giving->update([
            'giver'                          => $request->giver,
            'patient_id'                        => $request->patient_id,
            'name'                              => $request->name,

            'bp'                                => $request->bp,
            't'                                 => $request->t,
            'p'                                 => $request->p,
            'r'                                 => $request->r,
            'pain'                              => $request->pain,
            'wt'                                => $request->wt,
            'ht'                                => $request->ht,
            'bsa'                               => $request->bsa,
            'VAD'                               => $request->VAD,
            'ES'                                => $request->ES,
            'cycle'                             => $request->cycle,
            'day'                               => $request->day,

            'referred_doctor'                   => $request->referred_doctor,
            'check_in'                          => $request->check_in,
            'registry_sheet'                    => $request->registry_sheet,
            'pathology_report'                  => $request->pathology_report,
            'radiology_report'                  => $request->radiology_report,
            'previous_ctx'                      => $request->previous_ctx,

            'CTX_pre_date'                      => $request->CTX_pre_date,
            'ctx_previous_cycle_date'           => $request->ctx_previous_cycle_date,
            'pre_ctx_lab_test'                  => $request->pre_ctx_lab_test,
            'health_cente_visit'                => $request->health_cente_visit,
            'Inc_of_fever_bet_cyc'              => $request->Inc_of_fever_bet_cyc,
            'If_yes_value'                      => $request->If_yes_value,
            'Does_pthave_thermometer'           => $request->Does_pthave_thermometer,
            'new_complain'                      => $request->new_complain,
            'appointment_of_the_two_cycle'      => $request->appointment_of_the_two_cycle,

            'nursing_notes'                     => $request->nursing_notes,
            'doctor_note'                       => $request->doctor_note,
        ]);
        toast('Success updated', 'success');
        return redirect(Route('pat_givings.index'));
    }

    public function destroy($id)
    {
        Pat_giving::destroy($id);
        toast('Success deleted', 'success');
        return redirect(Route('pat_givings.index'));
    }
    public function autocompleteSearch(Request $request)
    {
        $query = $request->get('query');
        $filterResult = Pat_giving::where('name', 'LIKE', '%' . $query . '%')->get();
        return response()->json($filterResult);
    }
}
