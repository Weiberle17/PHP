<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
</head>

<body>
  <?php 
    $zahlen = range(1, 49, 1);
    shuffle($zahlen);
    $lottozahlen = array_slice($zahlen, 0, 6);
    $sortierteLottozahlen = sort($lottozahlen);
    echo "<h3>Ergebnis: ";
    foreach ($lottozahlen as $key ) {
      echo "$key ";
    }
    echo "</h3>";
  ?>
</body>

</html>
