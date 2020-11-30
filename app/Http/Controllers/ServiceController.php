<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clinic;
use App\Models\Doctor;
use Session;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $searchClinic = $request->searchClinic;
        if($searchClinic == null){
            $lsClinic = Clinic::paginate(8);
        }else{
            $lsClinic = Clinic::where('name', 'like', '%'.$searchClinic.'%')->paginate(8);
        }
        return view('services.service')->with(['lsClinic'=>$lsClinic, 'searchClinic'=>$searchClinic]);
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
        $clinic = new Clinic();
        $clinic->name =  $request->name;
        $clinic->phone = $request->phone;
        $clinic->totalDoctor = 0;
        $clinic->save();
        return redirect("services");
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
        $clinic = Clinic::findOrFail($request->service_id);
        $clinic->name =  $request->name;
        $clinic->phone = $request->phone;
        $clinic->save();
        return redirect("services");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $clinic_id = $request->service_id;
        $clinic = Clinic::findOrFail($clinic_id);
        $clinic->delete();
        return redirect("services");
    }

    public function checkClinic(Request $request){
        $nameClinic = $request->nameClinic;
        $clinic = Clinic::where('name','=',$nameClinic)->get();
        if(count($clinic)>0){
            return response()->json(['data'=>'Tên khoa đã tồn tại']);
        }else{
            return response()->json(['data'=>""]);
        }

    }

    public function checkEditClinic1(Request $request){
        $name = $request->name;
        $clinic = Clinic::where('name','=',$name)->get();
        if(count($clinic)>1){
            return response()->json(['data'=>'Tên khoa đã tồn tại']);
        }else{
            return response()->json(['data'=>""]);
        }

    }
    public function checkEditClinic2(Request $request){
        $name = $request->name;
        $clinic = Clinic::where('name','=',$name)->get();
        if(count($clinic)>0){
            return response()->json(['data'=>'Tên khoa đã tồn tại']);
        }else{
            return response()->json(['data'=>""]);
        }

    }
    
    public function checkDeleteClinic(Request $request){
        $clinic_id = $request->service_id;
        $doctor = Doctor::where('clinic_id','=', $clinic_id )->get();
        if(count( $doctor) > 0){
            return response()->json(['data'=>'Có bác sĩ trong khoa, không thể xóa']);
        }else{
            return response()->json(['data'=>""]);
        }
    }
}
