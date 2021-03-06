<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistoryExamination;
use App\Models\ExaminationSchedule;
class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $identity = $request->searchIdentity;
        
        if($identity == null){
            $lsHistory = HistoryExamination::orderBy('created_at', 'desc')->paginate(10);
        }else{
            $lsHistory = HistoryExamination::where('CMND','=',$identity)->orderBy('created_at', 'desc')->get();
           
        }
       
        
        return view('history.history')->with(['lsHistory'=>$lsHistory, 'identity'=>$identity]);
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
        return redirect("employees");
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
