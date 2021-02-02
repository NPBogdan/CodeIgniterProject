<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head lang="EN">
	<meta charset="UTF-8">
	<title>CRUD App </title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
		  integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<h1>Create</h1>
	<form method="post" action='/user/update/<?php echo $id; ?>'>
		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Telephone</label>
			<input type="text" class="form-control" aria-describedby="Telephone" name="telephone" value="<?php echo $telephone ?>">
			<div id="Telephone" class="form-text">What telephone do you want?</div>
		</div>
		<div class="mb-3">
			<label for="games" class="form-label">Games</label>
			<input type="text" class="form-control" name="games" value="<?php echo $games ?>">
			<div id="games" class="form-text">How many games do you have?</div>
		</div>
		<div class="mb-3">
			<label for="clothes" class="form-label">Clothes</label>
			<input type="text" class="form-control" name="clothes" value="<?php echo $clothes ?>">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
</body>
</html>
