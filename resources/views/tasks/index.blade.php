<!DOCTYPE html>
<html>
<head>
	<title>Tasks List</title>
</head>
<body>
	<div>
		<ul>
			@foreach($tasks as $task)
				<li><a href="/tasks/{{$task->id}}">{{ $task->body }}</a></li>
			@endforeach
		</ul>
	</div>
</body>
</html>