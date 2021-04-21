@extends('layout')

@section('title')Главная страница@endsection

@section('main_content')
<html lang="en">
<head>
    <title>Greeting Example</title>
</head>

<body>
<h1>Hi, {{$user->get_name()}} </h1>
<h2>Your password is {{$user->get_pass()}} </h2>
<form action = "/showId/{{{$user->get_id()}}}" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
    <input type = "submit" value = "Check ID" />
</form>
</body>
</html>
@endsection
