@extends('layouts.default_login')

@section('content')
<html>
    <head>
            <style>
             table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
                           }
             th, td {
                background-color: #96D4D4;
                border-style: inset;
                          }
            </style>
        <title>Members registered</title>
    </head>

<body>
<div class="container">
    <h2 class="text-center">View Records</h2>

    <table style="text-align: center; ">
      <thead>
        <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Email</th>
          <th>Password</th>
          <th>Address</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($users as $user)
        <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->password }}</td>
        <td>{{ $user->address }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</body>
</html>

@endsection
