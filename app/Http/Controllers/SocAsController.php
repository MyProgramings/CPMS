<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSoc_asRequest;
use App\Models\Appointment;
use App\Models\Patient;
use App\Models\Soc_as;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SocAsController extends Controller
{
    //    public function __construct()
    //    {
    //        $this->authorizeResource(Soc_as::class, 'soc_as');
    //    }
        public function index()
        {
            return view('socAs.index',[
                'soc_ass' => Soc_as::query()
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
            return view('socAs.create')->with($data);
        }
        public function create_W_App($id)
        {
            $appointments = Appointment::where('id', $id)->get();
            foreach ($appointments as $appointment) {
                $appointment_s = $appointment;
            }
            Soc_as::create([
                'appointment_id' => $appointment_s->id,
                'patient_id' => $appointment_s->patient_id,
                'user_id'       => $appointment_s->user_id,
            ]);
            toast('Success created', 'success');
            return redirect()->back();
        }

        public function store(StoreSoc_asRequest $request)
        {
            Soc_as::create([
                'so_as'=> $request->so_as,
                'patient_id'=> $request->patient_id,
                'appointment_id'=> $request->appointment_id,

                'monthly_incomes'=> $request->monthly_incomes,
                'incomes_source'=> $request->incomes_source,
                'living_kind'=> $request->living_kind,
                'rent'=> $request->rent,
                'master_name'=> $request->master_name,
                'master_phone'=> $request->master_phone,

                'pre_infestation'=> $request->pre_infestation,
                'post_infestation'=> $request->post_infestation,

                'infestation_date'=> $request->infestation_date,
                'traveling'=> $request->traveling,
                'other_infestation_from_family'=> $request->other_infestation_from_family,
                'disease_kind'=> $request->disease_kind,
                'problem_rating'=> $request->problem_rating,
                'Doctor_view_of_patient'=> $request->Doctor_view_of_patient,
                'sociologist_appreciations'=> $request->sociologist_appreciations
            ]);
            toast('Success created','success');
            return redirect(Route('soc_ass.index'));
        }

        public function show(Soc_as $soc_ass)
        {
            return view('socAs.show', compact('soc_ass'));
        }

        public function edit($id)
        {
            $data = [
                'patients' => Patient::all(),
                'appointments' => Appointment::all(),
            ];
            $soc_ass = Soc_as::findorFail($id);
            return view('socAs.edit', compact('soc_ass'))->with($data);
        }

        public function update(StoreSoc_asRequest $request, $id)
        {
            $soc_as = Soc_as::findorFail($id);
            $soc_as->update([
                'so_as'=> $request->so_as,
                'patient_id'=> $request->patient_id,
                'appointment_id'=> $request->appointment_id,

                'monthly_incomes'=> $request->monthly_incomes,
                'incomes_source'=> $request->incomes_source,
                'living_kind'=> $request->living_kind,
                'rent'=> $request->rent,
                'master_name'=> $request->master_name,
                'master_phone'=> $request->master_phone,

                'pre_infestation'=> $request->pre_infestation,
                'post_infestation'=> $request->post_infestation,

                'infestation_date'=> $request->infestation_date,
                'traveling'=> $request->traveling,
                'other_infestation_from_family'=> $request->other_infestation_from_family,
                'disease_kind'=> $request->disease_kind,
                'problem_rating'=> $request->problem_rating,
                'Doctor_view_of_patient'=> $request->Doctor_view_of_patient,
                'sociologist_appreciations'=> $request->sociologist_appreciations
            ]);
            toast('Success updated','success');
            return redirect(Route('soc_ass.index'));
        }

        public function destroy($id)
        {
            Soc_as::destroy($id);
            toast('Success deleted','success');
            return redirect(Route('soc_ass.index'));
        }
        public function autocompleteSearch(Request $request)
        {
            $query = $request->get('query');
            $filterResult = Soc_as::where('name', 'LIKE', '%' . $query . '%')->get();
            return response()->json($filterResult);
        }
    }
