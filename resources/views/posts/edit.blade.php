@extends('layouts.app')

@section('content')
    <div class="container h-100 mt-2">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <h3>
                    Update Blog
                </h3>
                <form action="{{ route('blogs.update', $post->id) }}" method = "POST" class="mt-3">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control" value = "{{ $post->title }}" required>
                    </div>
                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea name="body" id="body" rows="3" class="form-control" required>{{$post->body}}</textarea>
                    </div>
                    <button type="submit" class="btn mt-3 btn-primary">Update Post</button>
                </form>
            </div>
        </div>
    </div>
@endsection