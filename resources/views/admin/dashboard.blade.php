<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dasshboard admin</title>
</head>
<body>
  <a class="nav-link" href="{{route('siswa.index')}}">Data siswa</a>
  <a href="{{route('logut')}}" onclick="event.preventdefault(); document.getElementById('logout-form').submit();">Logout</a> 
  <form id="logout-form" action="{{routew('logout')}}"method="POST">
    @csrf 
</form>
<h1> Dashboard Admin </h1>
@if ($message = session:: get ('succsess'))
@else
<p>{{$message}}</p>
@else 
<p>You logged in!</p> 
@endif
</body>
</html>