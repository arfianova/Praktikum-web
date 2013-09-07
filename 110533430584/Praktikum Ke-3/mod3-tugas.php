<html>
<head>
	<title>Login Page</title>
</head>

<style type="text/css">

*{font-family: Segoe UI, Arial;
margin: auto;
padding:0;

}

#header {
	z-index: 1;
	position: fixed;
	font-size: 20 px;
	font-color:white;
	width: 100%;
	margin-top: -20px;
	height: 60px;
	background-color: #668284;
	margin-bottom: 10px;
}

#container{
	margin:  20px auto;
	width: 15%;
	height: auto;
	padding: 100px;
	border: 1px solid red
}

.textinput{
width: 100%;
height: 30px;
margin: 5px auto;
}

.btn{
	width: 100%;
	padding:5px;
	background-color: #00ccff;
	border: none;
	color:white;
	font-weight: 900;

}

.btn:hover{
	cursor: pointer;

}

a{
	font-size: 11px;
	color: blue;
}

.textinput{
	background-color: #fafafa;
	border: inset 1px #efefef;
}
</style>
<script>



function cekhuruf(huruf){
				cek = /^[A-Za-z]{1,}$/;
				return cek.test(huruf);
			}

function validateForm()
{
var username=document.forms["myForm"]["username"].value;
var pass=document.forms["myForm"]["pass"].value;

if ((username==null || username=="")||(pass==null|| pass==""))
  {
  alert("Username dan Password harus diisi");
   document.getElementById("username").focus();
  return false;
  }
  
  if(cekhuruf(username)=== false ||cekhuruf(pass)===false)
  {
  	alert("Username dan password harus berupa huruf");
  	 document.getElementById("username").focus();
  	return false;
  }


 
  return true;
}
</script>
<body>
<div id="header">
<p id="name"><center>Form Log In</center></p>
</div>
<div id="container">
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="myForm" onsubmit="return validateForm()">
		<input type="text" name="username" class="textinput" id="username" />
		<input type="password" name="pass" class="textinput" id="pass"/>
		<input type="submit" name="submit" value="login" class="btn"/>
		<input type="checkbox" name="remember" class="checkbox"/>&nbsp;<small>Selalu login</small>
		<div id="bawah"><a href="" class="link">Mendaftar</a> | <a href="" class="link">Lupa password</a></div>
	</form>
</div>


<?php 
if (isset($_POST['submit'])) {
	if ((isset($_POST['username'])&&$_POST['username']=='arfianova')&&(isset($_POST['pass'])&&$_POST['pass']=='pio')) {
		echo "<center>Selamat Datang di Situs Kami, ". $_POST['username']."</center>";
	}
	else{
		echo "<script>alert('Username dan/atau password salah')</script>";
	}
}
 ?>

</body>
</html>