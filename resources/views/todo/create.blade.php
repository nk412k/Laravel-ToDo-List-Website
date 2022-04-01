<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO | Create</title>
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body style="text-align:center">
    <h1 id='heading'>Add your Task</h1>
    <h3>
        <x-alert/>
    </h3>
    <form action="/upload" method="post" class="inputField">
        @csrf
        <input type="text" name="title" class="task_input">
		<button type="submit" name="submit" id="add_btn" ><i class="fa fa-plus"></i></button>
    </form>
    <br>
    <a href="/index" class="back">Back</a>
</body>
</html>