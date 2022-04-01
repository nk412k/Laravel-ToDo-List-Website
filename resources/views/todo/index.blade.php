<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>TODO | Home</title>
</head>
<body>
    
    <h1 id='heading'>All Your TODOsss...</h1>
    <div class="box">
    <h3 class="alert">
        <x-alert />
    </h3>
    <table>		
		<tbody>			
        @foreach($todos as $todo)
            <tr class="task-list">
                <td><a href="{{asset('/' . $todo->id . '/completed')}}" class="complete"><span class="material-icons">task</span></a></td>
                @if($todo->completed)
                   <td > <span style="text-decoration:line-through" class="title">{{$todo->title}}</span></td>
                @else 
                    <td><span class="title">{{$todo->title}}</span></td>
                @endif
                <td><a href="{{asset('/' . $todo->id . '/edit')}}" class="edit">Edit</a></td>
                <td><a href="{{asset('/' . $todo->id . '/delete')}}" class="delete"><i class="fas fa-trash"></i></a></td>
            </tr>
        @endforeach    	
		</tbody>
    </table>
    
    <h3 class="add-task">
        <a href="/create"><i class="fas fa-plus">  New Task</i></a>
    </h3>
    </div>
</body>
</html>