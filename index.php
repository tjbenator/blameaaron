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
	<header>
		<a href="https://github.com/tjbenator/blameaaron"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/52760788cde945287fbb584134c4cbc2bc36f904/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f77686974655f6666666666662e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_white_ffffff.png"></a>
		<h1>Reasons to blame Aaron:</h1>
	</header>
	<div class="reasons">
	<ul>
	<?php
		$sql = "SELECT id, tidbit FROM bucket_facts WHERE lower(fact) = 'reasons to blame aaron' ORDER BY RAND()";
		$query = $dbo->prepare($sql);
		$query->execute();
		$facts = $query->fetchAll(PDO::FETCH_ASSOC);
		foreach ($facts as $row) {
			echo "<li title='#{$row['id']}'>{$row['tidbit']}</li>";
		}
	?>
	</ul>
	</div>
	<footer>
		Also see <a href='http://aaronlogic.com'>AaronLogic.com</a>
	</footer>
</body>
</html>
