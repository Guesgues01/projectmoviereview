@extends('layouts.app')

@section('content')


<div class="container text-black">
@if (count($movies) == 0)
  <div class="alert alert-danger" role="alert">
    ไม่พบข้อมูลหนัง ประเภท '<b>{{ $typeshow }}</b>'
  </div>
@else 

<div class="row row-cols-1 row-cols-md-3 g-4">

  @foreach ($movies as $movie)
  <div class="col">
    <div class="card h-70">
      <a href="{{ route('pages.review', $movie->id) }}">
        <img src="{{ asset('storage/'.str_replace('public', '', $movie->image)) }}" class="card-img-top" alt="..."  height="500px">
      </a>
      <div class="card-body">
        <h5 class="card-title">{{ $movie->title }}</h5>
        <p class="card-text">{{ $movie->type }}</p>
      </div>
    </div>
  </div>
  @endforeach

</div>
@endif
</div>

@endsection