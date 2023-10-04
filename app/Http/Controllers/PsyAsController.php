<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePsy_asRequest;
use App\Models\Appointment;
use App\Models\Patient;
use App\Models\Psy_as;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PsyAsController extends Controller
{
    //    public function __construct()
    //    {
    //        $this->authorizeResource(Psy_as::class, 'psy_as');
    //    }
        public function index()
        {
            return view('psyAs.index',[
                'psy_ass' => Psy_as::query()
                    ->when(request('search'), function ($query) {
                        $query->search(request('search'));
                    })->latest()->paginate(PAGINATION_COUNT),
            ]);
        }

        public function create()
        {
            $data = [
                'patients' => Patient::all(),
            ];
            return view('psyAs.create')->with($data);
        }
        public function create_W_App($id)
        {
            $appointments = Appointment::where('id', $id)->get();
            foreach ($appointments as $appointment) {
                $appointment_s = $appointment;
            }
            Psy_as::create([
                'appointment_id' => $appointment_s->id,
                'patient_id' => $appointment_s->patient_id,
                'user_id'       => $appointment_s->user_id,
            ]);
            toast('Success created', 'success');
            return redirect()->back();
        }

        public function store(StorePsy_asRequest $request)
        {
            Psy_as::create([
                'dorm'=> $request->dorm,
                'delicacies'=> $request->delicacies,
                'memory'=> $request->memory,
                'edgy_and_adenological'=> $request->edgy_and_adenological,
                'ailment_precognition'=> $request->ailment_precognition,
                'direction_social'=> $request->direction_social,
                'thinking_in_Disease'=> $request->thinking_in_Disease,
                'medicament_traces'=> $request->medicament_traces,
                'psycho_traces'=> $request->psycho_traces,
                'proposals_and_recommendations'=> $request->proposals_and_recommendations,
                'notes_psy'=> $request->notes_psy,
                'ps_as'=> $request->ps_as,
                'patient_id'=> $request->patient_id,
                'appointment_id'=> $request->appointment_id,
            ]);
            toast('Success created','success');
            return redirect(Route('psy_ass.index'));
        }

        public function show(Psy_as $psy_ass)
        {
            return view('psyAs.show', compact('psy_ass'));
        }

        public function edit($id)
        {
            $data = [
                'appointments' => Appointment::where('id', $id)->get(),
            ];
            $psy_ass = Psy_as::findorFail($id);
            return view('psyAs.edit', compact('psy_ass'))->with($data);
        }

        public function update(StorePsy_asRequest $request, $id)
        {
            $psy_as = Psy_as::findorFail($id);
            $psy_as->update([
                'dorm'=> $request->dorm,
                'delicacies'=> $request->delicacies,
                'memory'=> $request->memory,
                'edgy_and_adenological'=> $request->edgy_and_adenological,
                'ailment_precognition'=> $request->ailment_precognition,
                'direction_social'=> $request->direction_social,
                'thinking_in_Disease'=> $request->thinking_in_Disease,
                'medicament_traces'=> $request->medicament_traces,
                'psycho_traces'=> $request->psycho_traces,
                'proposals_and_recommendations'=> $request->proposals_and_recommendations,
                'notes_psy'=> $request->notes_psy,
                'ps_as'=> $request->ps_as,
                'patient_id'=> $request->patient_id,
                'appointment_id'=> $request->appointment_id,
            ]);
            toast('Success updated','success');
            return redirect(Route('psy_ass.index'));
        }

        public function destroy($id)
        {
            Psy_as::destroy($id);
            toast('Success deleted','success');
            return redirect(Route('psy_ass.index'));
        }
        public function autocompleteSearch(Request $request)
        {
            $query = $request->get('query');
            $filterResult = Psy_as::where('name', 'LIKE', '%' . $query . '%')->get();
            return response()->json($filterResult);
        }
    }
