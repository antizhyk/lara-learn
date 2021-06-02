@extends('layouts.main')
@section('content')
    <div>
        <div>
            <form action="{{ route('post.update', $post->id) }}" method="post">
                @csrf
                @method('patch')
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="title" id="title" value="{{$post->title}}">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control" name="post_content" placeholder="content" id="content">{{$post->post_content}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="text" name="image" class="form-control" placeholder="image" value="{{$post->image}}" id="image">
                </div>
                <select class="form-select" aria-label="Default select example" name="category_id">
                    @foreach($categories as $category)
                        <option
                            {{ $category->id === $post->category->id ? 'selected' : ''}}
                            value="{{$category->id}}" >{{$category->title}}</option>
                    @endforeach
                </select>
                <select class="form-select" multiple aria-label="multiple select example" name="tags[]">
                    @foreach($tags as $tag)
                        <option
                            @foreach($post->tags as $postTag)
                            {{ $tag->id === $postTag->id ? 'selected' : ''}}
                            @endforeach
                            value="{{$tag->id}}" >{{$tag->title}}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>

@endsection
