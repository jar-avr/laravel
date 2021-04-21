@extends('layout')

@section('title')Главная страница@endsection

@section('main_content')
<html lang="en">
<head>
    <title>All Example</title>
</head>

<body>
<h1>Your id and name: </h1>
@foreach ($info as $field)
    <h2>{{$field}}</h2>
@endforeach
</body>
</html>
@endsection
