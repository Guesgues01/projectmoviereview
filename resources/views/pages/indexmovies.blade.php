@extends('layouts.app')

@section('content')

<style>
    body {
	background : url(https://ak.picdn.net/shutterstock/videos/1022154211/thumb/1.jpg) no-repeat ;
	background-size: cover;
	width: auto ;
	height: auto;
	
}
</style>


<div class="container text-black">

<a href="{{ url('/add') }}" class="btn btn-success btn-lg mt-5">เพิ่มภาพยนตร์</a>
<br><br>
<table class="table table-hover table-warning mt-3">
  <thead>
    <tr>
      <th scope="col">เรื่องที่</th>
      <th scope="col">ชื่อเรื่อง</th>
      <th scope="col">ประเภท</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($movies as $key => $movie)
    <tr>
      <th scope="row">{{ $key+1 }}</th>
      <td>{{ $movie->title }}</td>
      <td>{{ $movie->type }}</td>
      <td><a href="{{ URL('deletemovie/'.$movie->id) }}" class="btn btn-danger btn-sm">Delete</a></td>
    </tr>
    @endforeach
<!--     <tr>
      <th scope="row">2</th>
      <td>คนเรียกผี</td>
      <td>ภาพยนต์</td>
      <td><button type="button" class="btn btn-danger btn-sm">Delete</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Spirited Away</td>
      <td>ภาพยนต์</td>
      <td><button type="button" class="btn btn-danger btn-sm">Delete</button></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>School 2015</td>
      <td>ซีรีส์</td>
      <td><button type="button" class="btn btn-danger btn-sm">Delete</button></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Tangled</td>
      <td>ภาพยนต์</td>
      <td><button type="button" class="btn btn-danger btn-sm">Delete</button></td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Gakuen Babysitters นักเรียนพี่เลี้ยงเด็ก</td>
      <td>ซีรีส์</td>
      <td><button type="button" class="btn btn-danger btn-sm">Delete</button></td>
    </tr>
 -->    

  </tbody>
</table>

</div>

@endsection