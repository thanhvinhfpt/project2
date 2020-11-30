<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clinic;
use App\Models\Doctor;
use App\Models\ExaminationSchedule;
use App\Models\HistoryExamination;
class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $date = date('Y-m-j');
        $olddate = strtotime ( '-1 day' , strtotime ( $date ) ) ;
        $olddate = date ( 'Y-m-j' , $olddate );
        $lsOldSchedule = ExaminationSchedule::where('date',"=", $olddate)->get();
        foreach($lsOldSchedule as $oldSchedule){
            // $oldSchedule->status = "Cancel";
            $oldSchedule->save();
        }
        $date = $request->date;
        $doctor_id = $request->doctor;
        $clinic_id = $request->clinic;
        $identity = $request->identity;
        if($clinic_id == null && $doctor_id == null && $identity == null && $date == null){
            $lsSchedule = ExaminationSchedule::where('status',"=", "Pendding")->paginate(6);
        }else if($clinic_id != null && $doctor_id == null && $identity == null && $date == null ){
            $lsSchedule = ExaminationSchedule::where('clinic_id',"=",  $clinic_id)->where('status',"=", "Pendding")->paginate(6);
        }else if($clinic_id != null && $doctor_id != null && $identity == null && $date == null ){
            $lsSchedule = ExaminationSchedule::where('clinic_id',"=",  $clinic_id)->where('doctor_id',"=", $doctor_id)->where('status',"=", "Pendding")->paginate(6);
        }else if($clinic_id == null && $doctor_id == null && $identity == null && $date != null) {
            $lsSchedule = ExaminationSchedule::where('date',"=", $date)->where('status',"=", "Pendding")->paginate(6);
        }else if($clinic_id != null && $doctor_id != null && $identity == null && $date != null){
            $lsSchedule = ExaminationSchedule::where('clinic_id',"=",  $clinic_id)->where('doctor_id',"=", $doctor_id)->where('date',"=", $date)->where('status',"=", "Pendding")->paginate(6);
        }else if($clinic_id == null && $doctor_id == null && $identity != null && $date == null){
            $lsSchedule = ExaminationSchedule::where('identity',"=", $identity)->where('status',"=", "Pendding")->paginate(6);
        }else if($clinic_id != null && $doctor_id != null && $identity != null && $date != null){
            $lsSchedule = ExaminationSchedule::where('clinic_id',"=",  $clinic_id)->where('identity',"=", $identity)->where('doctor_id',"=", $doctor_id)->where('date',"=", $date)->where('status',"=", "Pendding")->paginate(6);
        }else if($clinic_id == null && $doctor_id != null && $identity == null && $date == null){
            $lsSchedule = ExaminationSchedule::where('doctor_id',"=",  $doctor_id)->where('status',"=", "Pendding")->paginate(6);
        }
        
        $lsDoctor = Doctor::all();
        $lsClinic = Clinic::all();
        return view('schedules.schedule')->with(['lsClinic'=>$lsClinic, 'lsDoctor'=>$lsDoctor, 'lsSchedule'=>$lsSchedule, 'clinic_id'=>$clinic_id,'doctor_id'=>$doctor_id, 'date'=>$date]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $history = new HistoryExamination();
        $history->name = $request->name;
        $history->CMND = $request->identity;
        $history->phone = $request->phone;
        $history->doctor = $request->doctor;
        $history->diagnostic = $request->comment;
        $history->save();
        $schedule = ExaminationSchedule::find($request->id);
        $schedule->status = "Success";
        $schedule->save();
        return redirect("schedules");
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
        $schedule = ExaminationSchedule::find($request->idEdit);
        $schedule->time = $request->timeEdit;
        $schedule->date = $request->dateEdit;
        $schedule->doctor_id = $request->doctorEdit;
        $schedule->save();
        return redirect("schedules");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $schedule_id = $request->schedule_id_delete;
        $schedule = ExaminationSchedule::find($schedule_id);
        $schedule->status = "Cancel";
        $schedule->save();
        return redirect("schedules");
    }

    public function checkSchedule(Request $request){
        $doctor_id = $request->doctor_id;
        $time = $request->time;
        $date = $request->date;
        $schedule = ExaminationSchedule::where('doctor_id',"=", $doctor_id)->where('time',"=", $time)->where('date',"=", $date)->get();
        if(count( $schedule) > 0){
            return response()->json(['data'=> "Lịch bận, vui lòng chọn lịch khác"]);
        }else{
            return response()->json(['data'=>""]);
           
        }
    }
    public function checkScheduleOld(Request $request){
        $doctor_id = $request->doctor_id;
        $time = $request->time;
        $date = $request->date;
        $schedule = ExaminationSchedule::where('doctor_id',"=", $doctor_id)->where('time',"=", $time)->where('date',"=", $date)->get();
        if(count( $schedule) > 1){
            return response()->json(['data'=> "Lịch bận, vui lòng chọn lịch khác"]);
        }else{
            return response()->json(['data'=>""]);
           
        }
    }

    public function findDoctor(Request $request){
        $clinicID = $request->clinicID;
        $lsdoctor = Doctor::where('clinic_id','=', $clinicID)->get();
        return response()->json(['data'=> $lsdoctor]);
    }
}
