@extends('master')

@section('content')
    <div class="container text-white">
        <div class="row">
            <div class="offset-3 col-6">
                <a class="text-decoration-none text-white" href="{{ route('post#read', $post['id']) }}">
                    back
                </a>
                <div class="">
                    <form action="{{ route('post#update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="postId" value="{{ $post['id'] }}">
                        <label for="" class="text-warning mt-4">Title</label>
                        <input type="text" value="{{ $post['title'] }}" placeholder="Enter post Title..." required
                            name="userTitle" id="" class="form-control text-white bg-black">

                        <label for="" class="text-warning mt-4">Description</label>
                        <textarea name="userDescription" id="" placeholder="Enter post Description..." class="form-control text-white bg-black"
                            cols="30" rows="10">
                            {{ $post['description'] }}
                        </textarea>

                        <div class="float-end mt-3">
                            <input type='submit' value="Update" class="btn btn-warning">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
