<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //create page view
    public function post( ) {
        $post = Post::orderBy('created_at','desc')->get()->toArray();
        return view('create',compact('post'));
    }

    // create post process
    public function postCreate(Request $request) {
        $data = $this->postCreateData($request);
        Post::create($data);
        return redirect()->route('post#create#page');
    }

    // delete post process
    public function postDelete($id) {
        // first way
        Post::where('id',$id)->delete();
        return back();
    }

    // read post process
    public function postRead($id) {
       $post =  Post::where('id',$id)->first();
        return view('read',compact('post'));
    }

    // create post data call
    private function postCreateData($request) {
        return  [
            'title' => $request->userTitle,
            'description' => $request->userDescription,
        ];
    }
}