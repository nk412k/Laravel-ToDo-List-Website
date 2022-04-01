<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO | Edit</title>
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body style="text-align:center">
    <h1 id='heading'>Edit your Task</h1>
    <h3>
        <x-alert />
    </h3>
    <form action="/update" method="post" class="inputField">
        @csrf
        @method('patch')
        <input type="text" name="title" value="{{$todo->title}}" class="task_input"/>
        <input style="display:none" type="number" name="id" value="{{$todo->id}}">
        <button type="submit" name="submit" id="add_btn" ><i class="fas fa-pen"></i></button>
    </form>
    <br>
    <a href="/index" class="back">Back</a>
</body>
</html>