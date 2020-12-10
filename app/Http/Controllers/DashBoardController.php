<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExaminationSchedule;
class DashBoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lsSuccessSchedule = ExaminationSchedule::select(\DB::raw("COUNT(*) as count"))
                            ->where('status','=','Success')
                            ->whereYear('created_at', date('Y'))
                            ->groupBy(\DB::raw("Month(updated_at)"))
                            ->pluck('count');
        $lsCancelSchedule = ExaminationSchedule::select(\DB::raw("COUNT(*) as count"))
                            ->where('status','=','Cancel')
                            ->whereYear('created_at', date('Y'))
                            ->groupBy(\DB::raw("Month(updated_at)"))
                            ->pluck('count');
        $months =  ExaminationSchedule::select(\DB::raw("Month(created_at) as month"))
                            ->whereYear('created_at', date('Y'))
                            ->groupBy(\DB::raw("Month(created_at)"))
                            ->pluck('month');
        $data1 = array(0,0,0,0,0,0,0,0,0,0,0,0);
        $data2 = array(0,0,0,0,0,0,0,0,0,0,0,0);
        //dd($lsCancelSchedule);
        //dd($months);
        foreach($months as $index => $month){
            $data1[$month - 1] = isset($lsSuccessSchedule[$index]) ? $lsSuccessSchedule[$index] : 0;
            $data2[$month - 1] = isset($lsCancelSchedule[$index]) ? $lsCancelSchedule[$index] : 0;
           
        }
        $totalSuccess=0;
        $totalCancel=0;
        foreach($lsSuccessSchedule as $s=>$value){
            $totalSuccess = $totalSuccess + $value;
        } 
        foreach($lsCancelSchedule as $s=>$value){
            $totalCancel = $totalCancel + $value;
        }      
        $total = ExaminationSchedule::count();
        $total1 = ExaminationSchedule::where('status','=','Success')->count();
        $total2 = ExaminationSchedule::where('status','=','Cancel')->count();
        $total3 = ExaminationSchedule::where('status','=','Pendding')->count();
        
        $lsSchedule = ExaminationSchedule::where('status','=', 'Pendding')->orderBy('created_at', 'desc')->get();  
        return view('dashboard.dashboard')->with(['lsSchedule'=>$lsSchedule, 'data1'=>$data1,'data2'=>$data2,'totalSuccess'=>$totalSuccess, 'totalCancel'=>$totalCancel,'total'=>$total,'total1'=>$total1,'total2'=>$total2,'total3'=>$total3]);
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
