@extends('layouts.main')
@section('content')
<div>
    <div>
        <form action="{{ route('post.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input value="{{old('title')}}" type="text" name="title" class="form-control" placeholder="title" id="title">
                @error('title')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" name="post_content" placeholder="content" id="content">{{old('post_content')}}</textarea>
                @error('post_content')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input value="{{old('image')}}" type="text" name="image" class="form-control" placeholder="image" id="image">
                @error('image')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" name="category_id">
                    @foreach($categories as $category)
                        <option
                            value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
            <select class="form-select" multiple aria-label="multiple select example" name="tags[]">
                @foreach($tags as $tag)
                    <option value="{{$tag->id}}" >{{$tag->title}}</option>
                @endforeach
            </select>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>

@endsection
