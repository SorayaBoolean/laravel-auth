@extends ('layouts.app')
@section('content')

    <div class="container border">
        <div class="">
            <strong>Title:</strong>
            <p>{{$post->title}}</p>
        </div>
        <div class="">
            <strong>Content:</strong>
            <p>{{$post->content}}</p>
        </div>
        <div class="">
            <strong>Slug:</strong>
            <p>{{$post->slug}}</p>
        </div>
    </div>
    <div class="container ">
        <a class="btn btn-primary my-2" href="{{route('admin.posts.index')}}">< Back</a>
    </div>



@endsection