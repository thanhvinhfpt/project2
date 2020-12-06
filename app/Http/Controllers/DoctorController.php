<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clinic;
use App\Models\Doctor;
use App\Models\User;
class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $clinic_id = $request->clinicSearch;
       $name = $request->nameSearch;
       if($clinic_id == null && $name == null){
            $lsDoctor =  Doctor::paginate(10);
       }else if($clinic_id != null && $name == null){
            $lsDoctor = Doctor::where('clinic_id', '=', $clinic_id)->paginate(10);
       }else if($clinic_id != null && $name != null){
        $lsDoctor = Doctor::where('clinic_id', '=', $clinic_id)->where('name', 'like', '%'. $name.'%')->paginate(10);
       }else{
            $lsDoctor = Doctor::where('name', 'like', '%'. $name.'%')->paginate(10);
       }
       $lsClinic = Clinic::all();
       return view('doctors.doctor')->with(['lsClinic'=>$lsClinic, 'lsDoctor'=> $lsDoctor,'clinic_id'=>$clinic_id, 'name'=>$name]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $doctor = new Doctor();
        $doctor->code = $request->codeInsert;
        $doctor->name = $request->nameInsert;
        $doctor->phone = $request->phoneInsert;
        $doctor->clinic_id = $request->clinicInsert;
        $path = " ";
        if($request->avata != null){
            $name = $request->avata->getClientOriginalExtension();
            $name = time().".".$name;
            $request->avata->move(public_path('upload'), $name);
            $path = "upload/".$name;
        }
        $doctor->image = $path;
        $doctor->save();
        $clinic = Clinic::find($request->clinicInsert);
        $total = Clinic::where('id', '=', $request->clinicInsert)->value('totalDoctor');

        $clinic->totalDoctor = $total + 1 ;
        $clinic->save();
        return redirect("doctors");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $doctor = Doctor::findOrFail($request->doctor_id_edit);
        $doctor->code = $request->codeEdit;
        $doctor->name = $request->nameEdit;
        $doctor->phone = $request->phoneEdit;
        $doctor->clinic_id = $request->clinicEdit;
        $path = " ";
        if($request->avataEdit != null){
            $name = $request->avataEdit->getClientOriginalExtension();
            $name = time().".".$name;
            $request->avataEdit->move(public_path('upload'), $name);
            $path = "upload/".$name;
            $doctor->image = $path;
        }

        $doctor->save();
        $clinic = Clinic::find($request->clinicEdit);
        $old_clinic_id = $request->old_clinic_id;
        $new_clinic_id = $request->clinicEdit;
        if($old_clinic_id !=  $new_clinic_id){
            $new_clinic = Clinic::find($new_clinic_id);
            $old_clinic = Clinic::find($old_clinic_id);
            $new_total = Clinic::where('id', '=', $new_clinic_id)->value('totalDoctor');
            $old_total = Clinic::where('id', '=', $old_clinic_id)->value('totalDoctor');
            $new_clinic->totalDoctor =  $new_total + 1;
            $old_clinic->totalDoctor =  $old_total - 1;
            $new_clinic->save();
            $old_clinic->save();

        }
        return redirect("doctors");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $doctor_id = $request->doctor_id;
        $doctor = Doctor::findOrFail($doctor_id);
        $clinic_id = Doctor::where('id', '=',  $doctor_id)->value("clinic_id");
        $doctor_code =  $doctor->code;
        $doctor->delete();
        $user = User::where('doctor_code','=', $doctor_code)->get();
        if(count($user) > 0 ){
            foreach( $user as $u ){
                $u->delete();
            }
        }
        $clinicUpdate = Clinic::find($clinic_id);
        $totalDoctor = Clinic::where('id', '=', $clinic_id)->value('totalDoctor');
        $clinicUpdate->totalDoctor =  $totalDoctor - 1;
        $clinicUpdate->save();
        return redirect("doctors");
    }

    public function checkCodeDoctor(Request $request){
        $code =  $request->code;
        $doctor =  Doctor::where('code','=',$code)->get();
        if(count($doctor)>0){
            return response()->json(['data'=>'Doctor is exist']);
        }else{
            return response()->json(['data'=>""]);
        }
    }
    public function checkCodeDoctor1(Request $request){
        $code =  $request->code;
        $doctor =  Doctor::where('code','=',$code)->get();
        if(count($doctor)>1){
            return response()->json(['data'=>'Doctor is exist']);
        }else{
            return response()->json(['data'=>""]);
        }
    }
}
