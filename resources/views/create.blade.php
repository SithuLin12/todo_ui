@extends('master')

@section('content')
<div class="container text-white">
    <div class="row mt-5 ">
        <div class="col-4 p-3">
           <div class="form-group">
            <form action="{{ route('post#create') }}" method="POST">
                @csrf
                <label for=" " class="text-warning">Title</label>
                <input type="text" name="userTitle" id="" class="form-control text-white bg-black   border-none">

                <label for="" class="text-warning mt-3">Description</label>
                <textarea name="userDescription" class="form-control text-white bg-black" id="" cols="30" rows="10"></textarea>
                <div class=" mt-3">
                    <button type="submit" class="btn btn-warning">Create</button>
                </div>
            </form>


           </div>
        </div>

        <div class="col-7 offset-1 p-3">
            @foreach ($post as $p)
            <div class="mb-5">
                <div class="d-flex justify-content-between">
                    <h5 for="" class="text-warning fw-bold">{{ $p['title'] }}</h5>
                    <span class="text-warning">{{ $p['created_at'] }}</ျ>
                </div>
                <p>{{ Str::words($p['description'], 20, '...') }}</p>
                <div class="float-end">
                    <a href="{{ route('post#delete',$p['id']) }}">
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </a>
                    <a href="{{ route('post#read',$p['id']) }}">
                        <button class="btn btn-sm btn-warning">read</button>
                    </a>
                    <button class="btn btn-sm btn-primary">update</button>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
@endsection
