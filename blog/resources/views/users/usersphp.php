<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" 
          content="width=device-width, initial-scale=1">

    <title>Mi cursito Laravel</title>
</head>
<body>
	<h1><?= e($title) ?></h1>

	<ul>
		<?php foreach ($users as $user): ?>
			
			<li><?= e($user) ?></li>
		
		<?php endforeach; ?>
	</ul>
</body>
</html>