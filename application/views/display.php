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
	<ul class="list-group">
		<li class="list-group-item m-5">
			<?php foreach ($results as $row) {
				echo "This is id : " . $row->id;
				echo "</br>";
				echo $row->telephone;
				echo "</br>";
				echo $row->clothes;
				echo "</br>";
				echo $row->games;
				echo "<br>";
				echo "<a class = 'btn btn-dark' href='/user/edit/" . $row->id . "'>Edit!</a>";
				echo "<form method='DELETE' action='/user/delete/". $row->id ."'>
						<button type='submit' class='btn btn-danger'>Delete</button>
					  </form>";
					echo "<br>";
					echo "<br>";
				} ?>
		</li>
		<li class="list-group m-5">
			<h1><a href="/user/create">Add something new!</a></h1>
		</li>
	</ul>

</div>
</body>
</html>
