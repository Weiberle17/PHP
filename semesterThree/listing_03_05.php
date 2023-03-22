<!doctype html>
<?php
$nachname = $_POST["name"];
$vorname = $_POST["vorname"];
$name = $vorname." ".$nachname;
?>
<html>
<head>
<meta charset="utf-8">
<title>Auswertung</title>
</head>
<body>
<p>
Guten Tag, <?= $name?>!
</p>
</body>
</html>

