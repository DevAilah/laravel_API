  @extends('layouts.default_login')

@section('content')

<h1 style="text-align: center">Login Page</h1>

<form style="text-align: center" method="POST" action="users" >
    @csrf
   <input type="text" name="name" id="name" placeholder="Enter your name" /><br>
      <span style="color: red"> @error('username'){{ $message }} @enderror </span>
   <br>
   <input type="password" name="password" id="password" placeholder="Enter password" /><br>
      <span style="color: red"> @error('userpassword'){{  $message }} @enderror </span>
   <br>
   <button type="submit" class="btn btn-danger">Login</button>
</form>

@endsection

