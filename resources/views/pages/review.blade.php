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
        <img src="{{ asset('storage/'.str_replace('public', '', $movie->image)) }}"  alt=""  height="500px">
        </div>
        <div class="col-sm-8">
        <h1>{{ $movie->title }}</h1><hr>
        <h6>หมวดหมู่ : <a href="{{ route('pages.movietype', $movie->type) }}" class="text-white">{{ $movie->type }}</a></h6><br>
        <h6>นักแสดง : 
            @foreach ($casts as $cast)
            <a href="{{ route('pages.cast', $cast->id) }}" class="text-white">{{$cast->name}}</a> 
            @endforeach
        </h6>
            <br><h3>เรื่องย่อ :</h3>
            <h4>{{ $movie->description }}</h4>
        </div>
    </div>

<!-- Rating and Review -->

<div class="review">
    <h3><i class="fa-solid fa-heart fa-beat fa-xl" style="color: red;"></i>  {{ $movie->rating }}/5</h3>
    
    <br>

    
    <h2>REVIEW</h2>

    <hr>

@if($admin != '')
<form action="{{ route('pages.review1',$movie->id) }}" method="post">
@csrf
    <div class="row">
        <div class="col-10">
            <div class="form-group mb-3">
                <label for="exampleFormControlTextarea1">Your Comment</label>
                <textarea class="form-control" name="your_comment" rows="2"></textarea>
            </div>
        </div>
        <div class="col-1 d-flex align-content-center flex-wrap">
            
            <input type="submit" value="Comment" class="btn btn-outline-info btn-lg">
        </div>
    </div>
</form>
@endif

<ol class="list-group list-group mb-3">
    @foreach ($comments as $comment)
    <li class="list-group-item d-flex justify-content-between align-items-start mb-2">
    <div class="ms-2 me-auto" id="myDIV">
        <div class="fw-bold"> 
            {{ $comment->name }} :  
            <font size="1.5">{{ date('d-M-Y H:i:s', strtotime($comment->created_at)) }}</font>
        </div>
        {{ $comment->content }}

    </div>
    @if($admin != '')
    @if($admin->admin == '1')
    <small class="text-muted">
        @if($comment->created_user_id == $admin->id)
        <a  href="{{ URL('showcommetedit',['id' => $comment->comid, 'movieid' => $movie->id]) }}" class="link-secondary">Edit</a> 
        @endif 
        <a href="{{ URL('deletecomment',['id' => $comment->comid, 'movieid' => $movie->id]) }}" class="link-danger">Delete</a>
    </small>
    @elseif($comment->created_user_id == $admin->id)
    <small class="text-muted">
        <a  href="{{ URL('showcommetedit',['id' => $comment->comid, 'movieid' => $movie->id]) }}" class="link-secondary">Edit</a> 
        <a href="{{ URL('deletecomment',['id' => $comment->comid, 'movieid' => $movie->id]) }}" class="link-danger">Delete</a>
    </small>
    @endif 
    @endif
    
  </li>

  @endforeach
</ol>


            
    

    
    
    
    

</div>



</div>

@endsection