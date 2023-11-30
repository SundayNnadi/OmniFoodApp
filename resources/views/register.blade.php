<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<style>
  *{
    margin: 0;
    padding: 0;
}
.container{
    display: flex;
    padding: 20px;
    vertical-align: top;
    margin-left: 30%;
    /* margin-top: 2%; */
    width: 60%;
    background-color: rgb(252, 216, 167);
    /* background-color: rgb(236, 133, 133); */
}

.button{
    padding: 10px;
    margin: 20px;
    margin-top: 20px;
    margin-right: 400px;
}
.submit_button{
    margin-left: 10%;
    padding: 8px;
    background-color: black;
    color: white;
}
.container>img{
    width: 350px;
}
</style>
<body>
  @extends('layouts.app')

@section('content')
  <!-- Your registration form goes here -->
  <form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="container">
<img src="register.png">
<div class="button-section">
             {{-- <label>Name</label> --}}
        <input class="button" type="text" placeholder="First Name" name="first name">
        <input class="button" type="text" placeholder="Last Name" name="last name">
        <input class="button @error('email') is-valid
        @enderror" type="email" id="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" name="email">

        @error('email')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
        @enderror

        <input class="button"type="text" placeholder="Username" id="username" required autocomplete="username" name="username">
        <input class="button @error ('password') is-valid @enderror" name="password" type="password" placeholder="Password" id="password" required autocomplete="new-password">

        @error('password')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
          
        @enderror
        
        <input class="button" type="password" placeholder="Confirm Password"required autocomplete="Confirm Password" name="password">
        <input class="button" type="date" placeholder="date of birth">
        <button class="submit_button"type="Submit" name="date of birth"> 
          {{ __('Register') }}
        </button>
    </div>
    </div>
  </form>
  @endsection
</body>
</html>



{{-- @extends('layouts.app')

@section('content')
  <!-- Your registration form goes here -->
  <form method="POST" action="{{ route('register') }}">
    @csrf
    <!-- Add your registration form fields here -->
    <input type="text" placeholder="First Name">
    <input type="text" placeholder="Surname">
    <input type="number" placeholder="Password">
    <input type="number" placeholder="Confirm Password">
    <input type="submit">
  </form>
@endsection --}}

