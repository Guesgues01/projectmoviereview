@extends('layouts.app')

@section('content')


<div class="container text-black">

<div class="row row-cols-1 row-cols-md-3 g-4">
@foreach ($movies as $movie)
  <div class="col">
    <div class="card h-70">
      <a href="{{ route('pages.review', $movie->id) }}">
        <img 
          src="{{ asset('storage/'.str_replace('public', '', $movie->image)) }}" 
          class="card-img-top" 
          alt="..."  
          height="500px"
        >
        <!-- <img src="{{ $movie->image }}" class="card-img-top" alt="..."  height="500px"> -->
      </a>
      <div class="card-body">
        <h5 class="card-title">{{ $movie->title }}</h5>
        <p class="card-text">{{ $movie->type }}</p>
      </div>
    </div>
  </div>
  @endforeach
</div>

</div>




<!--

<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-70">
      <a href="/review">
        <img src="https://cdn.majorcineplex.com/uploads/movie/3320/thumb_3320.jpg" class="card-img-top" alt="..."  height="500px">
      </a>
      <div class="card-body">
        <h5 class="card-title">แฮร์รี่ พอตเตอร์กับศิลาอาถรรพ์</h5>
        <p class="card-text">แฟนตาซี</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-70">
      <img src="https://upload.wikimedia.org/wikipedia/th/thumb/3/30/Spirited_Away_poster.JPG/215px-Spirited_Away_poster.JPG" class="card-img-top" alt="..." height="500px">
      <div class="card-body">
        <h5 class="card-title">Spirited Away</h5>
        <p class="card-text">การ์ตูน, แฟนตาซี</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-70">
      <a href="/reviewserie">
        <img src="https://www.img04.xyz/assets/movie_poster/c/c7d3ac4a74b9cf5a8a57a072fad38a6c.jpg" class="card-img-top" alt="..." height="500px">
      </a>
      <div class="card-body">
        <h5 class="card-title">School 2015</h5>
        <p class="card-text">ดราม่า, คอมเมดี้</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-70">
      <img src="https://s.isanook.com/mv/0/ud/6/34987/cjr_1sht_alt_intl_debut_online.jpg" class="card-img-top" alt="..." height="500px">
      <div class="card-body">
        <h5 class="card-title">The Conjuring</h5>
        <p class="card-text">สยองขวัญ</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-70">
      <img src="https://i.pinimg.com/564x/36/38/5a/36385a529a085ebb2bfa5c05eeef79e1--tangled-movie-tangled-.jpg" class="card-img-top" alt="..." height="500px">
      <div class="card-body">
        <h5 class="card-title">Tangled</h5>
        <p class="card-text">การ์ตูน</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-70">
      <img src="https://www.anime-siam.com/wp-content/uploads/2021/08/55930.jpg" class="card-img-top" alt="..." height="500px">
      <div class="card-body">
        <h5 class="card-title">Gakuen Babysitters นักเรียนพี่เลี้ยงเด็ก</h5>
        <p class="card-text">การ์ตูน</p>
      </div>
    </div>
  </div>
  
</div>
-->




@endsection