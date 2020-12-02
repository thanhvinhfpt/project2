<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Models\Post;

class FrontEndController extends Controller
{
    public function index(){
        $lsClinic = Post::all()->where('tagId','=','4');
        $gioithieuchung = Post::all()->where('tagId','=','10');
        return view('pages.home')->with(['lsClinic'=>$lsClinic,'gioithieuchung'=>$gioithieuchung]);
    }
    public function show($id){
        $post = Post::find($id);
        $lsTag = Tag::all();
        return view('pages.post')->with(['post'=>$post,'lsTag'=>$lsTag]);
    }
}
