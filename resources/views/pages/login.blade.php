@extends('layouts.main')

@section('content')


<style>

body {
	background : url(https://www.gannett-cdn.com/-mm-/83e081eae80cd2848af52df6da1060d621468f19/c=0-111-2120-1303/local/-/media/2021/02/04/USATODAY/usatsports/red-movie-theater-seats.jpg?width=2120&height=1192&fit=crop&format=pjpg&auto=webp) no-repeat ;
	background-size: auto;
	width: auto ;
	height: auto;
	
}

.login , .signup  {
	width: 280px ;
	position: relative ;
	top: 100% ;
	left: 50%;
	transform: translate(-50%,-50%) ;
	color: #fff ;
}

.login h1  {
	border-bottom: 5px solid #0dcaf0;
	padding: 13px;
	margin-bottom: 30px ;
}

.text-login   {
	width: 100% ;
	overflow: hidden ;
	padding: 5px ;
	margin: 5px ;
	border-bottom: 1px solid #0dcaf0;
}

.text-login input , .text-signup input {
	border: none ;
	outline: none ;
	background: none ;
	width: 210px ;
	margin: 0 10px 3px ;
	color: #fff ;
}

.login-btn input , .signup-btn input {
	width: 280px ;
	margin-top: 10px;
}

.signup h1 {
	border-bottom: 5px solid #32CD32	;
	padding: 13px;
	margin-bottom: 30px ;
}

.text-signup {
	width: 100% ;
	overflow: hidden ;
	padding: 5px ;
	margin: 5px ;
	border-bottom: 1px solid #32CD32;
}


.or {
  text-align: center;
  position: relative ;
	top: 100% ;
	
	
  
}




</style>

<div class="container">
  <!-- 
    <div class="showcase">
        
        
        

        <div class="video-container">
        <video src="pexels-tima-miroshnichenko-7988176.mp4" type="video/mp4" muted loop autoplay></video>
        </div>

        <div class="login">
          <div class="row align-items-center">
          <div class="col-1"></div>
            <div class="col-4">
            
          
              <h3>LOGIN</h3>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
              </div>
              
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
              </div>
            
              <div class="col-12">
                  <button type="submit" class="btn btn-primary">Sign Up</button>
              </div>
            
            </div>
            <div class="col-2">
              <h1>OR</h1>
            </div>
            <div class="col-4">

              <h3>REGISTER</h3>
              <form class="row g-3">
                <div class="col-md-12">
                  <label for="inputEmail4" class="form-label">Username</label>
                  <input type="email" class="form-control" id="inputEmail4">
                </div>
                
                <div class="col-md-12">
                  <label for="inputPassword4" class="form-label">Password</label>
                  <input type="password" class="form-control" id="inputPassword4">
                </div>
                
                <div class="col-md-12">
                  <label for="inputPassword4" class="form-label">Password</label>
                  <input type="password" class="form-control" id="inputPassword4">
                </div>
                
                
                
                
                
              
                
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Sign Up</button>
                </div>
              </form>

            </div>
            <div class="col-1"></div>
          </div>
        </div>

      

        <div class="login">
        
          <h3>LOGIN</h3>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
          </div>
          
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
            <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
          </div>
        
        </div> 
        
            
        
    </div>
    -->

	

    <div class="row">
  <div class="col-sm">
    <div class="login">
        <h1>LOGIN</h1>

        <div class="text-login">
          <i class="fa-solid fa-user"></i>
          <input type="text" placeholder="Username">
        </div>

        <div class="text-login">
          <i class="fa-solid fa-key"></i>
          <input type="password" placeholder="Password">
        </div>

        <div class="login-btn">
          <input class="btn btn-outline-info" type="button" value="Sign in">
        </div>
        
      </div>
  </div>
  <div class="col-sm"><div class="or"><h1>OR</h1></div></div>
  <div class="col-sm">
  <div class="signup">
        <h1>SIGN UP</h1>

        <div class="text-signup">
          <i class="fa-solid fa-user"></i>
          <input type="text" placeholder="Username">
        </div>

        <div class="text-signup">
          <i class="fa-solid fa-key"></i>
          <input type="password" placeholder="Password">
        </div>
        <div class="text-signup">
          <i class="fa-solid fa-key"></i>
          <input type="password" placeholder="Confirm Password">
        </div>

        <div class="signup-btn">
          <input class="btn btn-outline-success" type="button" value="Sign up">
        </div>
        
      </div>
  </div>
</div>

	
    
</div>




@endsection