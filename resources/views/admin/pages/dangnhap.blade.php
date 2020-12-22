<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
  </head>
<form method="post">
	<body>
	<div class="login-box">
		
  <h1>Login</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
  <input name="email" placeholder="Username" type="text" required="" >
</div>
  <div class="textbox">
    <i class="fas fa-lock"></i>
  <input name="password" placeholder="Password" type="password" required="">
</div>
  <input type="submit" class="btn" value="Sign in">
  {{ csrf_field() }}
</div>
</body>
</form>
</html>