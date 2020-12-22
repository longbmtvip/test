<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
  </head>

  <form 
  action="{{route('login')}}" method="post"  >
  
  <body>
<div class="login-box">
  <h1>Login</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    @csrf 
    <input type="text" name="username" placeholder="username">
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" name="password" placeholder="password">
  </div>

  <input type="submit" class="btn" value="Sign in">
</div>

  </body>
</form>
</html>
