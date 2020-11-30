<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Models\Post;

class FrontEndController extends Controller
{
    public function index(){
        return view('pages.home');
    }
    public function show($id){
        $post = Post::find($id);
        $lsTag = Tag::all();
        return view('pages.post')->with(['post'=>$post,'lsTag'=>$lsTag]);
    }
}
