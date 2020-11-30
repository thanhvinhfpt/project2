
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<script src="http://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">

    
    </head>
<body>
	<img class="wave" src="imgs/wave.png">
	<div class="container">
		<div class="img">
			<img src="imgs/bg.svg">
		</div>
		<div class="login-content">
			<form method="POST" action="{{ route('login') }}" id="loginForm" name="myForm">
            @csrf
				<img src="imgs/avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>{{ __('E-Mail Address') }}</h5>
           		   		<input type="email" class="input" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"  autocomplete="email"  autofocus>
           		   		<p id="username-message"></p>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>{{ __('Password') }}</h5>
           		    	<input type="password" class="input" id="password" name="password" >
           		    	<p id="message"></p>
            	   </div>
            	</div>
            	
            	<button type="submit" class="btn btn-primary" onclick="return  validate() ">{{ __('Login') }}</button>
            </form>
        </div>
    </div> 
    
    <script type="text/javascript" src="js/main.js"></script>
     
     <script type="text/javascript" >
     		function validate(){
     			var username = $('#email').val();
     			var password = $('#password').val();
     			if(username == "" && password == ""){
     				$('#username-message').html("Vui lòng nhập email");
     				$('#message').html("Vui lòng nhập mật khẩu");
     				return false;
     			}else if(username != "" && password == ""){
     				$('#message').html("Vui lòng nhập mật khẩu");
     				return false;
     			}else if(username == "" && password != ""){
     				$('#username-message').html("Vui lòng nhập tài khoản");
     				return false;
     			}else{
     				return true;
     			};
     		}
     		var user = document.querySelector('#username');
         	var pass = document.querySelector('#password');
         	user.oninput = function(){
         		$('#username-message').html("");
         	};
         	pass.oninput = function(){
         		$('#message').html("");
         	};
     </script>
     <script>
        const inputs = document.querySelectorAll(".input");
        function addcl(){
            let parent = this.parentNode.parentNode;
            parent.classList.add("focus");
        }
        function remcl(){
            let parent = this.parentNode.parentNode;
            if(this.value == ""){
                parent.classList.remove("focus");
            }
        }
        inputs.forEach(function(input){
            input.addEventListener("focus", addcl);
            input.addEventListener("blur", remcl);
        });
     </script>

     
</body>
</html>