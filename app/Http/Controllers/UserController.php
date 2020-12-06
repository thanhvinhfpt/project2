<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Doctor;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $name = $request->nameSearch;
        if($name != null){
            $lsUser = User::where('name','=',$name)->paginate(10);
        }else {
            $lsUser = User::paginate(10);
        }
        return view('users.user')->with(['lsUser'=> $lsUser, 'name'=>$name]);
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
        $user = new User();
        $user->name = $request->usernameInsert;
        $user->password = Hash::make($request->passwordInsert);
        $user->email = $request->emailInsert;
        $user->doctor_code = $request->doctorCodeInsert;
        $user->save();
        return redirect("users");
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
        $id = $request->idEdit;
        $user = User::find($id);
        $user->name = $request->usernameEdit;
        $user->email = $request->emailEdit;
        $user->password = Hash::make($request->passwordEdit);
        $user->save();
        return redirect("users");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $user_id = $request->user_id;
        $user = User::find($user_id);
        $user->delete();
        return redirect("users");
    }


    public function checkDoctorExisit(Request $request){
        $doctor_code = $request->doctor_code;
        $doctor = Doctor::where('code','=', $doctor_code)->first();
        $user = User::where('doctor_code', '=', $doctor_code)->first();
        if($doctor != null && $user != null){
            return response()->json(['data'=> "Bác sĩ đã có tài khoản"]);
        }else if($doctor != null && $user == null){
            return response()->json(['data'=>' ']);
        }else if($doctor == null ){
            return response()->json(['data'=>'Bác sĩ không tồn tại']);
        }
    }

    public function checkEmailExisit(Request $request){
        $email = $request->email;
        $user = User::where('email','=',$email)->first();
        if($user != null){
            return response()->json(['data'=>'Email đã tồn tại, chọn lại']);
        }else{
            return response()->json(['data'=>' ']);
        }
    }

    public function checkEmailExisitEdit(Request $request){
        $email = $request->email;
        $user = User::where('email','=',$email)->get();
        if(count($user) > 1){
            return response()->json(['data'=>'Email đã tồn tại, chọn lại']);
        }else{
            return response()->json(['data'=>' ']);
        }
    }
}
