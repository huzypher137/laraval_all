@extends('layouts.inc')
@section('content')
    @if($posts>0)
        @foreach($posts as $post)
            <div class="card card-body">
                {{$post->title}}
            </div>
        @endforeach
    @endif
@endsection
