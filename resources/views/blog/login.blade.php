@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sunday.css">
    <title>Document</title>
</head>
<style>
  *{
    padding: 0;
    margin: 0;
}
/* .container{
 width: 100%;
 background-color: rgb(246, 154, 34);
} */
.button-section{
  margin-top: 20px;
}
.login{
    margin-left: 30px;
    color: blue;
    font-weight: bolder;
}
.hero{
    display: flex;
    /* background-color: rgb(245, 195, 195); */
    background-color: rgb(252, 216, 167);
    width: 35%;
    padding-top: 20px;
    margin-left: 30%;
    margin-top: 15%;
}
.image-section>img{
    width: 250px;
}
.image-section{
    margin-right: 40px;
    border: 10px;
    border-color: rgb(9, 9, 12);
}
.button{
    margin: 15px;
    padding: 3px;
}
.submit{
    margin: 15px;
    margin-left: 30%;
    padding: 10px;
    background-color: rgb(25, 19, 28);
    border: none;
    color: white;
    font-weight: bolder;
  text-align: center;
}
</style>
<body>
  <div class="container">

 
  <form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="hero">
    
        <div class="button-section">
            <figure class="login">Login Form</figure>
        <input class="button" type="email" placeholder="Email" required autocomplete="email"><br>
        <input class="button"type="username" placeholder="Username" required autocomplete="username"><br>
        <input class="button"type="password" placeholder="Password" required autocomplete="password"><br>
        <button class="submit"type="submit"> LOGIN</button>
        
    </div>
        <div class="image-section"> <img src="login.png" alt=""></div>
    
        <!-- <div class="image-section"> <img src="login.png" alt=""></div> -->
  
</div>
</form>
@endsection
</div>
</body>
</html>









{{-- @extends('layouts.app')

@section('content')
  <!-- Your login form goes here -->
  <form method="POST" action="{{ route('login') }}">
    @csrf
    <!-- Add your login form fields here -->
    <h1>Login Page</h1>
    <input type="email" placeholder="Please enter your email address">
    <input type="password" placeholder="Please enter your password">
  </form>
@endsection --}}