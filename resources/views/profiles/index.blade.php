@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fmnl25-2.fna.fbcdn.net/v/t51.2885-19/s320x320/97566921_2973768799380412_5562195854791540736_n.jpg?_nc_ht=instagram.fmnl25-2.fna.fbcdn.net&amp;_nc_ohc=WhIj0AjmRVcAX9Q5mqy&amp;tp=1&amp;oh=82d4ba4498ded473f4ab4d23c5359174&amp;oe=5FE9EF9F" class="rounded-circle" style="height: 150px">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">Add new post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
        <div><a href="{{ $user->profile->url }}">{{ $user->profile->url}}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach ($user->posts as $post)
        <div class="col-4">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        @endforeach
    </div>
</div>
@endsection