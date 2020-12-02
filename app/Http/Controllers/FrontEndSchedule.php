<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clinic;

use App\Models\Post;
use App\Models\Doctor;
use App\Models\ExaminationSchedule;
use Illuminate\Support\Facades\App;

class FrontEndSchedule extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $lsClinic = Clinic::all();
        $lsDoctor = Doctor::all();
        $gioithieukhoa = Post::all()->where('tagId','=','4');

        $gioithieuchung = Post::all()->where('tagId','=','10');
        $dichvuyte = Post::all()->where('tagId','=','15');
        $Hotrokhachhang = Post::all()->where('tagId','=','16');
        return view('pages.schedule')->with(['Hotrokhachhang'=>$Hotrokhachhang,'gioithieukhoa'=>$gioithieukhoa,'gioithieuchung'=>$gioithieuchung,'dichvuyte'=>$dichvuyte,'lsClinic'=>$lsClinic, 'lsDoctor'=>$lsDoctor]);
    }
    public function index($locale)
    {
        if($locale != null){

           App::setLocale($locale);

        }

        $lsClinic = Clinic::all();
        $lsDoctor = Doctor::all();
        $gioithieukhoa = Post::all()->where('tagId','=','4');

        $gioithieuchung = Post::all()->where('tagId','=','10');
        $dichvuyte = Post::all()->where('tagId','=','15');
        $Hotrokhachhang = Post::all()->where('tagId','=','16');
        return view('pages.schedule')->with(['Hotrokhachhang'=>$Hotrokhachhang,'gioithieukhoa'=>$gioithieukhoa,'gioithieuchung'=>$gioithieuchung,'dichvuyte'=>$dichvuyte,'lsClinic'=>$lsClinic, 'lsDoctor'=>$lsDoctor]);
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
     *- @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $schedule = new ExaminationSchedule();
        $schedule->name = $request->name;
        $schedule->email = $request->email;
        $schedule->identity = $request->identity;
        $schedule->phone = $request->phone;
        $schedule->date = $request->date;
        $schedule->time = $request->time;
        $schedule->clinic_id = $request->clinic;
        $schedule->doctor_id = $request->doctor;
        $schedule->symptom = $request->symptom;
        $schedule->status = "Pendding";
        $schedule->save();
        return redirect('front/frontEndSchedule');
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

    public function findDoctor(Request $request){
        $clinicID = $request->clinicID;
        $lsdoctor = Doctor::where('clinic_id','=', $clinicID)->get();
        return response()->json(['data'=> $lsdoctor]);
    }

    public function checkSchedule(Request $request){
        $doctorID = $request->doctorID;
        $time = $request->time;
        $date = $request->date;
        $schedule = ExaminationSchedule::where('doctor_id',"=", $doctorID)->where('time',"=", $time)->where('date',"=", $date)->get();
        if(count( $schedule) > 0){
            return response()->json(['data'=> "Lịch bận, vui lòng chọn lịch khác"]);
        }else{
            return response()->json(['data'=>""]);

        }
    }
}
