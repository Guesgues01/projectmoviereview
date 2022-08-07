@extends('layouts.app')

@section('content')


<style>
    .review {
        margin-top: 40px;
    }
    .comment {
        margin-top: 30px;
        
    }
    

    
</style>

<div class="container">
    
<!-- img and deteil -->
<div class="row">
    <div class="col-sm-4">
      <img src="https://www.img04.xyz/assets/movie_poster/c/c7d3ac4a74b9cf5a8a57a072fad38a6c.jpg" alt=""  height="500px">
    </div>
    <div class="col-sm-8">
      <h1>Who Are You: School 2015</h1><hr>
      <h6>หมวดหมู่ : <a href="#" class="text-white">ดราม่า</a>, <a href="#" class="text-white">คอมเมดี้</a></h6><br>
      <h6>นักแสดง : <a href="#" class="text-white">คิมโซฮยอน</a>, <a href="#" class="text-white">นัมจูฮยอก</a>, <a href="#" class="text-white">ยุกซองแจ</a></h6>
        <br><h3>เรื่องย่อ :</h3>
        <h4>เรื่องราวของนักเรียนในยุคสมัยใหม่ อีอึนบี(คิมโซฮยอน) หลังจากที่ฟื้นขึ้นมาจากอุบัติเหตุและต้องพบว่าตัวเองจำอะไรไม่ได้เลย และกลับไปที่โรงเรียนมัธยมเซกัง 
            โรงเรียนหรูในกังนัม ด้วยหวังว่าจะรื้อฟื้นความทรงจำ อึนบีจะรื้อฟื้นความทรงจำได้ไหมว่าเกิดอะไรขึ้นกับเธอ และนั่นก็ทำให้เธอพบกับความลับของโรงเรียนด้วยเช่นกัน 
            อยู่มาวันหนึ่งเธอตื่นขึ้นมาในเช้าวันหนึ่งโดยที่จำไม่ได้ว่าตัวเองคือใคร? 
            หลังจากนั้นเธอก็พยายามที่จะกู้ความทรงจำในส่วนที่ขาดหายไปของเธอกลับคืนมา และระหว่างนั้น!! เธอก็ค้นพบกับความจริงบางอย่างที่ซ่อนอยู่เบื้องหลังโรงเรียนที่มีชื่อเสียงของเธอ…</h4>
    </div>
</div>

<!-- Rating and Review -->

<div class="review">
    <h3><i class="fa-solid fa-heart fa-beat fa-xl" style="color: red;"></i>  4.9/5</h3>
    <br><h2>REVIEW</h2><hr>

    <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="#">ตอนที่ 1</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-danger" href="#">ตอนที่ 2</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-danger" href="#">ตอนที่ 3</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-danger" href="#">ตอนที่ 4</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-danger" href="#">ตอนที่ 5</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-danger" href="#">ตอนที่ 6</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-danger" href="#">ตอนที่ 7</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-danger" href="#">ตอนที่ 8</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-danger" href="#">ตอนที่ 9</a>
  </li>

</ul>
    

<div class="row">
        <div class="col-10">
            <div class="form-group mb-3">
                <label for="exampleFormControlTextarea1">Your Comment</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
            </div>
        </div>
        <div class="col-1 d-flex align-content-center flex-wrap">
            <button type="button" class="btn btn-outline-secondary btn-lg">Comment</button>
        </div>
    </div>



    <ol class="list-group list-group mb-3">
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">User1 :</div>
      สนุกมากๆเลยค่าา
    </div>
    <small class="text-muted"></small>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">User2 :</div>
      สนุกมากๆ CGดีมากเนื้อเรื่องเข้มข้น รอติดตามภาคต่อไปเลย
    </div>
    <small class="text-muted"></small>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">User3 :</div>
      Good!!
    </div>
    <small class="text-muted"></small>
  </li>
</ol>
            
    
    
    

    
    
    
    

</div>






</div>

@endsection