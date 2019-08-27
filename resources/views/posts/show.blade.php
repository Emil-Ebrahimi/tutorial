@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
  <div class="col-8">
  <img src="/storage/{{ $post->image }}" alt="" class="w-100">
</div>
<div class="col-4">
  <div>
    <div>
      <div class="d-flex align-items-center">
        <div class="pr-3">
          <img src="{{ $post->user->profile->profileImage()}}" class="w-100 rounded-circle" style="max-width:50px">
        </div>
        <div>
          <div class="font-weight-bold">
             <a href="/profile/{{ $post->user->id }}">
               <span class="text-dark">{{$post->user->username}}</span>
             </a>
<a href="#" class="pl-3">Follow</a>
           </div>
        </div>
      </div>
    </div>

<hr>

    <p>
      <span class="font-weight-bold">
        <a href="/profile/{{ $post->user->id }}">
          <span class="text-dark">{{$post->user->username}}</span>
        </a></span> <br> {{$post->caption}}</p>
  </div>
</div>
  </div>
</div>
@endsection
