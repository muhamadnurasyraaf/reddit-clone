<!-- resources/views/posts/create.blade.php -->
@extends('layout.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create New Post</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('post.store') }}">
                            @csrf
                            {{-- csrf means cross request forgery site  --}}
                            <!-- Post Title -->
                            <div class="form-group mb-3">
                                <label for="title">Post Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    placeholder="Enter post title" required>
                            </div>

                            <!-- Post Content -->
                            <div class="form-group mb-3">
                                <label for="content">Post Content</label>
                                <textarea class="form-control" id="content" name="content" rows="5" placeholder="Write your post here..."
                                    required></textarea>
                            </div>

                            <input type="text" name="saje saje">
                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary">Create Post</button>
                            <a href="" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
