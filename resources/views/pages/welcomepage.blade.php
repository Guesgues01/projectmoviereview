@extends('layouts.main')

<style>

.showcase {
    position: absolute;
    right: 0;
    top: 0;
    width:100% ;
    height:100vh ;
    display: flex;
    
    align-items: center;
    overflow: hidden;
    background: #000;
   
    z-index: 2;
}

.intro {
    position: absolute;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;

}




</style>

<div>
    <div class="showcase">
        
        
        

        <div class="video-container">
        <video src="pexels-tima-miroshnichenko-7988176.mp4" type="video/mp4" muted loop autoplay></video>
        </div>
        
        <div class="intro">
        <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        
        <div>
        
            
        
    </div>
</div>