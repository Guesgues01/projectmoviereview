@extends('layouts.app')

@section('content')

<style>

body {
	background : url(https://ak.picdn.net/shutterstock/videos/1022154211/thumb/1.jpg) no-repeat ;
	background-size: cover;
	width: auto ;
	height: auto;
	
}
    .input-group , .form-control {
        
        justify-content: center;
    }
</style>

<div class="container">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form class="row g-3 mb-5" action="/create" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">ชื่อหนัง</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="col-md-6">
    <label for="inputGroupSelect01" class="form-label">หมวดหมู่</label>
    <select class="form-select" id="type" name="type">
    <option selected>Choose...</option>
    <option value="ไซไฟ">ไซไฟ</option>
    <option value="ดราม่า">ดราม่า</option>
    <option value="สยองขวัญ">สยองขวัญ</option>
    <option value="ระทึกขวัญ">ระทึกขวัญ</option>
    <option value="แฟนตาซี">แฟนตาซี</option>
    <option value="แอ็คชั่น">แอ็คชั่น</option>
    <option value="การ์ตูน">การ์ตูน</option>
    <option value="คอมเมดี้">คอมเมดี้</option>
    <option value="ซีรีส์">ซีรีส์</option>

  </select>
  </div>



  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">rating</label>
    <input type="text" class="form-control" id="rating" name="rating">
  </div>

  <div class="col-md-6">
  <label for="inputEmail4" class="form-label">รูปภาพ</label>
    <input type="file" class="form-control" id="inputEmail4" name="image">
  </div>

  <div class="col-md-12">
  <label for="exampleFormControlTextarea1" class="form-label">นักแสดงนำ</label>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="ชื่อนักแสดง คนที่1" aria-label="" name="name1">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="ชื่อนักแสดง คนที่2" aria-label="" name="name2">
    </div>
  </div>
  <div class="row mt-2">
    <div class="col">
      <input type="text" class="form-control" placeholder="ชื่อนักแสดง คนที่3" aria-label="" name="name3">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="ชื่อนักแสดง คนที่4" aria-label="" name="name4">
    </div>
  </div>
  
  </div>


  <div class="mt-5">
    <label for="exampleFormControlTextarea1" class="form-label">เรื่องย่อ</label>
    <textarea class="form-control" id="description" rows="10" name="description"></textarea>
  </div>


  <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3 mb-5">
  <button type="submit" class="btn btn-outline-info btn-lg">Add</button>
</div>


</form>


</div>


@endsection