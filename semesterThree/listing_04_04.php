<?php
$a = 6;
$b = 3;
?>
<!doctype html>
<html>
<head>
<meta charset = "utf-8">
<title>Ein kleiner Test</title>
</head>
<body>
<?php
echo "<p>\$a = $a; \$b = $b</p>";
if ($a < $b) echo "<p>\$a ist kleiner als \$b</p>";
if ($a > $b) echo "<p>\$a ist groesser als \$b</p>";
if ($a == $b) echo "<p>\$a ist gleich \$b</p>";
?>
</body>
</html>

