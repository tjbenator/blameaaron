<?php
include('database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="main.css">
	<title>Blame Aaron</title>
</head>
<body>
	<h3>Reasons to blame Aaron:</h3>
	<ul>
	<?php
		$sql = "SELECT id, tidbit FROM bucket_facts WHERE lower(fact) = 'reasons to blame aaron' ORDER BY RAND()";
		$query = $dbo->prepare($sql);
		$query->execute();
		$facts = $query->fetchAll(PDO::FETCH_ASSOC);
		foreach ($facts as $row) {
			echo '<li>' . $row['tidbit'] . '</li>';
		}
	?>
	</ul>
</body>
</html>
