@extends('layout')

@section('title')Главная страница@endsection

@section('main_content')
<html lang="en">
<head>
    <title>ID Example</title>
</head>

<body>
<h1>Your id is {{$id}}</h1>
@if (strlen($id) < 10)
    <h1>Your id consists of less than 10 characters</h1>
@elseif (strlen($id) < 20)
    <h1>Your id consists of 10 or more characters, but less than 20 characters</h1>
@else
    <h1>Your id consists of 20 or more characters</h1>
@endif
</body>
</html>
@endsection
