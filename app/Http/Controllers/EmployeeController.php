<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Doctor;
use App\Models\ExaminationSchedule;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $doctor_code = Auth::user()->doctor_code;
        $doctor_id = Doctor::where('code','=', $doctor_code)->value('id');
        $now = date('Y-m-j');
        $date = $request->date;
        
       
        $identity = $request->identity;
     
        if( $date == null && $identity == null ){
            $lsSchedule = ExaminationSchedule::where('doctor_id','=',"28")->where('date',"=", $now)->where('status','=','Pendding')->orderBy('created_at', 'desc')->paginate(8);
            
        }else if($date != null && $identity == null ){
            $lsSchedule = ExaminationSchedule::where('doctor_id','=',$doctor_id)->where('date',"=", $date)->where('status','=','Pendding')->orderBy('created_at', 'desc')->paginate(8);
        }else if($date == null && $identity != null ){
            $lsSchedule = ExaminationSchedule::where('doctor_id','=',$doctor_id)->where('identity',"=", $identity)->where('status','=','Pendding')->orderBy('created_at', 'desc')->paginate(8);
        }else{
            $lsSchedule = ExaminationSchedule::where('doctor_id','=',$doctor_id)->where('date',"=", $date)->where('identity',"=", $identity)->where('status','=','Pendding')->orderBy('created_at', 'desc')->paginate(8);
        }
        return view('employee.schedule')->with(['lsSchedule'=>$lsSchedule, 'date'=>$date, 'identity'=>$identity]);
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
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
