<?php
	$a = 15;
	$b = 7;
	$title = "Rechnen mit PHP";
?>
<!doctype html>
<html>
	<head>
		 <charset = "utf-8">
		<title><?=$title ?></title>
		<style type="text/css">
		body {font-family: Arial;}
		h1 {font-size: 1.5em;}
		</style>
	</head>
	<body>
		<h1>Einfache Rechenoperationen mit PHP</h1>
		<p>Gegeben sind die beiden Werte <?= $a ?> und <?= $b ?>.</p>
		<p>
		<?php
			echo "$a + $b = ", $a+$b,"<br>";
			echo "$a &minus; $b = ", $a-$b,"<br>";
       			echo "$a &times; $b = ", $a*$b,"<br>";
			echo "$a &divide; $b = ", $a/$b, "<br>";
			echo "$a mod $b = ", $a%$b;
		?>
		</p>
	</body>
</html>
 
