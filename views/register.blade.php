@extends('layout')

@section('title')Главная страница@endsection

@section('main_content')
<html lang="en">
<head>
    <title>Form Example</title>
</head>

<body>
<form action = "/greeting" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">

    <table>
        <tr>
            <td>Name</td>
            <td><input type = "text" name = "name" /></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type = "text" name = "password" /></td>
        </tr>
        <tr>
            <td colspan = "2" align = "center">
                <input type = "submit" value = "Register" />
            </td>
        </tr>
    </table>

</form>
</body>
</html>
@endsection
