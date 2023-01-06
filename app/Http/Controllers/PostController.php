<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    //create page view
    public function post( ) {
        $post = Post::orderBy('created_at','desc')->paginate(3);
        return view('create',compact('post'));
    }

    // create post process
    public function postCreate(Request $request) {
        $validationRule = [
            'userTitle' => 'required',
            'userDescription' => 'required'
        ];
        Validator::make($request->all(),$validationRule)->validate();

        $data = $this->postCreateData($request);
        Post::create($data);
        return redirect()->route('post#create#page')->with(['createSession' => 'ပို့စ်ဖန်တီးခြင်းအောင်မြင်ပါသည်။']);
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

    // edit post page
    public function postEdit($id) {
        $post = Post::where('id',$id)->first();
        return view('edit',compact('post'));
    }

    // update post process
    public function postUpdate(Request $request){
        $post = $this->postCreateData($request);
        $id = $request->postId;
        Post::where('id',$id)->update($post);
        return redirect()->route('post#create#page')->with(['updateSession' => 'ပို့စ်ပြန်လည် ပြုပြင် ခြင်းအောင်မြင်ပါသည်။']);
    }

    // create post data call
    private function postCreateData($request) {
        return  [
            'title' => $request->userTitle,
            'description' => $request->userDescription,
        ];
    }
}
