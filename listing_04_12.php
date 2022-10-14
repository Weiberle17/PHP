<!doctype html>
<html>
<head>
<meta charset = "utf-8">
<title>Heute</title>
</head>
<body>
<?php
$heute = date("l");
switch ($heute) {
case "Monday":
$heute = "Montag";
break;
case "Tuesday":
$heute = "Dienstag";
break;
case "Wednesday":
$heute = "Mittwoch";
break;
case "Thursday":
$heute = "Donnerstag";
break;
case "Friday":
$heute = "Freitag";
break;
case "Saturday":
$heute = "Samstag";
break;
default:
$heute = "Sonntag";
}
?>
<p>Heute ist <?= $heute ?></p>
</body>
</html>

