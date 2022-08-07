@extends('layouts.app')

@section('content')


<div class="container">
<h5 class="mb-5">" {{ $castname->name}} "</h5>
<div class="row row-cols-1 row-cols-md-3 g-4">
@foreach ($casts as $cast)
  <div class="col text-black">
    <div class="card h-70">
      <a href="{{ route('pages.review', $cast->id) }}">
        <img 
          src="{{ asset('storage/'.str_replace('public', '', $cast->image)) }}" 
          class="card-img-top" 
          alt="..."  
          height="500px"
        >
        <!-- <img src="{{ $cast->image }}" class="card-img-top" alt="..."  height="500px"> -->
      </a>
      <div class="card-body">
        <h5 class="card-title">{{ $cast->title }}</h5>
        <p class="card-text">{{ $cast->type }}</p>
      </div>
    </div>
  </div>
  @endforeach
</div>

@endsection