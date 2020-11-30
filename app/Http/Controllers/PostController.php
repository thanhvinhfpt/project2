<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $lsPost = Post::all();
            $lsTag = Tag::all();
            return view('Posts.post')->with(['lsPost'=>$lsPost,'lsTag'=>$lsTag]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lsTag = Tag::all();
        return view('Posts.newPost')->with(['lsTag'=>$lsTag]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $post = new Post();
            $post->title = $request->title;
            $post->body = $request->body;
            $post->created_at = $request->createdAt;
            $post->tagId = $request->tag;
            $post->author = $request->author;
        $path = " ";
        if($request->coverImage != null){
            $name = $request->coverImage->getClientOriginalExtension();
            $name = time().".".$name;
            $request->coverImage->move(public_path('upload'), $name);
            $path = "upload/".$name;
        }
        $post->coverImage = $path;
        $post->save();
        return redirect('post');
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
        $post = Post::find($id);
        $lsTag = Tag::all();
        return view('Posts.edit')->with(['post'=>$post,'lsTag'=>$lsTag]);
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
        $post = Post::find($id);
        $post->title = $request->title ;
        $post->updated_at=$request->updatedAt;
        $post->body = $request->body;
        $post->tagId = $request->tag;
        $path = "";
        if($request->coverImage != null) {
            $name = $request->coverImage->getClientOriginalExtension();
            $name = time().".".$name;

            $request->coverImage->move(public_path('upload'), $name);
            $path = "upload/".$name;
            $post->coverImage = $path;
        }
        $post->save();
        return redirect('post');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
//        $request->session()->flash('success','Xóa bài viết thành công');
        return redirect('post');
    }
}
