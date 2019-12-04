<!DOCTYPE html>
<html>
<head>
	<title>Rock, Paper, Scissors!</title>
</head>
<body>
		<h1>Rock Paper Scissors</h1>
		<h2>Player one</h2>
		<?php
		$dis = "";

		if(isset($_GET["submit"]))
			$dis = "display: none;";
		echo "<form method='get' style='" . $dis
		. "'><select name='drop'><option>Rock</option><option>Paper</option><option>Scissors</option></select><input type='submit' value='submit' name='submit'></form>";
			if (isset($_GET["submit"])) {
				$p1c = $_GET["drop"];
			}
		?>
		<h2>Player two</h2>
		<?php
		$dis = "";

		if(!isset($_GET["submit"]) || !isset($p1c))
			$dis = "display: none;";
		echo "<form method='get' action='game_handler.php' style='" . $dis
		. "'><input name='p1c' type='hidden' value=" . $p1c . "><select name='p2c'><option>Rock</option><option>Paper</option><option>Scissors</option></select><input type='submit' value='submit' name='submit'>";
		echo "</form>";
		?>
	
</body>
</html>