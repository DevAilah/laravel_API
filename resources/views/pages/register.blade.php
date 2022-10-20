@extends('layouts.default_login')

@section('content')
<head>
    <link rel="stylesheet">
</head>
              <h1 style="text-align: center; ">Registration Page</h1>
        <form style="text-align: center; " method="POST" action="/register" enctype="multipart/form-data">

            @csrf

            <div>
                <label for="name" value="{{ __('Name') }}"> Name:</label><br>
                <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div><br>

            <div class="mt-4">
                <label for="email" value="{{ __('Email') }}"> Email: </label><br>
                <input id="email" type="email" name="email" :value="old('email')" required />
            </div><br>

            <div class="mt-4">
                <label for="password" value="{{ __('Password') }}"> Password: </label><br>
                <input id="password" type="password" name="password" required autocomplete="new-password" />
            </div><br>

            <div class="mt-4">
                <label for="password_confirmation" value="{{ __('Confirm Password') }}">Confirm Password: </label><br>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
                <span style="color: red"> @error('password_confirmation'){{  $message }} @enderror </span>
            </div><br>

            <div class="mt-4">
                <label for="address" value="{{ __('Address') }}"> Address: </label><br>
                <input id="address" type="text" name="address" required  />
            </div><br>

            <div class="mt-4">
                <label for="file" value="{{ __('File') }}">Upload photo: </label><br>
                <input id="file" type="file" name="file" required />
            </div><br><br>

            <button type="submit" class="btn btn-info">
                <span>{{ __('Submit') }}</span>
            </button>

                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="users">
                    {{ __('Already registered?') }}
                </a>
        </form>

@endsection
