<!doctype html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		
		<?php foreach ($tasks as $task) : ?>
			<li>
				<a href="/tasks/{{ $task->id }}">
					{{ $task->body }}
				</a>
							
			</li>
		<?php endforeach; ?>
	</body>
</html>
