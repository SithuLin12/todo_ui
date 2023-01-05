@extends('master')

@section('content')
    <div class="container text-white">
        <div class="row mt-5">
            <div class="col-6 offset-3">
                <a class="text-decoration-none text-white" href="{{ route('post#create#page') }}">
                    back
                </a>
                <h4 class="mt-5 text-warning">{{ $post['title'] }}</h4>
                <p>{{ $post['description'] }}</p>
                <a href="" class="float-end">
                    <button class="btn px-3 btn-warning">Edit</button>
                </a>
            </div>
        </div>
    </div>
@endsection
