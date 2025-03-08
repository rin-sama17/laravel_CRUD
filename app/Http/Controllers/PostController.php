<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::query()->orderBy("created_at", "desc")->paginate();
        


        return view("posts.index" ,compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("posts.create");

    }
    public function store(  Request $request)
    {
        $data=$request->validate([
            'title' => 'required|max:20',
            'content'=>'required'
        ]);

        $data['user_id'] = 1;
        $post=Post::create($data);

        return to_route('posts.show', $post)->with('message', 'با موفقیت ذخیره شد');
    }

    public function edit(string $id)
    {
        $post = Post::findOrFail($id); 

        return view("posts.edit", ['post'=>$post]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    { 
        $post = Post::findOrFail($id); 

        return view("posts.show", ['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
 

     public function update(  Request $request, Post $post)
     {
         $data=$request->validate([
             'title' => 'required|max:20',
             'content'=>'required'
         ]);
 
         $post->update($data);
 
         return to_route('posts.show', $post)->with('message', 'با موفقیت بروزرسانی شد');
     }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);

        $post->delete($post);

        return to_route("posts.index")->with('message', 'پست با موفقیت حذف شد');
    }
}
