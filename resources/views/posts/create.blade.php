@extends('layouts.app')

@section('content')
    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <h3>
                    Add a Post
                </h3>
                <form action="{{ route('posts.store') }}" method = "post">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea name="body" id="body" rows="3" class="form-control" required></textarea>
                    </div>
                    <br>
                    <button class="btn btn-primary" type="submit">Create Post</button>
                </form>
            </div>
        </div>
    </div>
@endsection