<!doctype html>
<html>
<head>
<meta charset = "utf-8">
<title>Das kleine 1&times;1</title>
<style type="text/css">
table {
font-family: Arial;
height: 400px;
width: 400px;
}
table, td {
border: 1px solid black;
border-collapse: collapse;
}
td, th {
text-align: center;
}
th {
background-color: gray;
color: white;
}
</style>
</head>
<body>
<?php
echo "<table>";
echo "<tr>";
echo "<th>&nbsp;</th>";
for ($kopf = 1; $kopf <= 10; $kopf++)
echo "<th>$kopf</th>";
echo "</tr>";
for ($reihe = 1; $reihe <= 10; $reihe++) {
echo "<tr>";
echo "<th>$reihe</th>";
for ($spalte = 1; $spalte <= 10; $spalte++) {
echo "<td>",$spalte*$reihe,"</td>";
}
echo "</tr>";
}
echo "</table>";
?>
</body>
</html>

