<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>
  <?php 

    function Ergebniskontrolle($result) {
      $num = mysqli_num_rows($result);
      if($num > 0) {
        echo "Ergebnis:<br>";
      }
      else {
        echo "Keine Ergebnisse.<br>";
      }
    }

    $con = mysqli_connect("", "root", "", "hardware");

    // Teilaufgabe a)
    echo "Teilaufgabe a)<br>";
    $resA = mysqli_query($con, "SELECT * FROM fp");
    Ergebniskontrolle($resA);

    while ($dsatz = mysqli_fetch_assoc($resA)) {
      echo $dsatz["hersteller"] . ", "
        . $dsatz["typ"] . ", "
        . $dsatz["gb"] . ", "
        . $dsatz["preis"] . ", "
        . $dsatz["artnummer"] . ", "
        . $dsatz["prod"] . ".<br>";
    }

    // Teilaufgabe b)
    echo "<br>Teilaufgabe b)<br>";
    $resB = mysqli_query($con, "SELECT hersteller, typ, preis FROM fp ORDER BY preis");
    Ergebniskontrolle($resB);

    while ($dsatz = mysqli_fetch_assoc($resB)) {
      echo $dsatz["hersteller"] . ", "
        . $dsatz["typ"] . ", "
        . $dsatz["preis"] . ".<br>";
    }

    //Teilaufgabe c)
    echo "<br>Teilaufgabe c)<br>";
    $resC = mysqli_query($con, "SELECT hersteller, typ, preis FROM fp WHERE preis BETWEEN 120 AND 140 ORDER BY preis");
    Ergebniskontrolle($resC);

    while ($dsatz = mysqli_fetch_assoc($resC)) {
      echo $dsatz["hersteller"] . ", "
        . $dsatz["typ"] . ", "
        . $dsatz["preis"] . ".<br>";
    }

    //Teilaufgabe d)
    echo "<br>Teilaufgabe d)<br>";
    $sqlD = "SELECT hersteller, typ, preis FROM fp ";
    switch ($_POST["preisBereich"]) {
      case 1:
        $sqlD .= "WHERE preis <= 120";
        break;
      case 2:
        $sqlD .= "WHERE preis BETWEEN 120 AND 140";
        break;
      case 3:
        $sqlD .= "WHERE preis >= 140";
        break;
    }
    $sqlD .= " ORDER BY preis";
    $resD = mysqli_query($con, $sqlD);
    Ergebniskontrolle($resD);

    while ($dsatz = mysqli_fetch_assoc($resD)) {
      echo $dsatz["hersteller"] . ", "
        . $dsatz["typ"] . ", "
        . $dsatz["preis"] . ".<br>";
    }

    // Teilaufgabe e)
    echo "<br>Teilaufgabe e)<br>";
    $sqlE = "SELECT hersteller, typ, preis FROM fp ";
    switch ($_POST["preisBereich"]) {
      case 1:
        $sqlE .= "WHERE preis <= 120";
        break;
      case 2:
        $sqlE .= "WHERE preis BETWEEN 120 AND 140";
        break;
      case 3:
        $sqlE .= "WHERE preis >= 140";
        break;
    }
    if ($_POST["ausgewählterHersteller"] == "Alle") {
      $sqlE .= " ORDER BY preis";
    }
    else {
      $sqlE .= " AND hersteller = '" . $_POST["ausgewählterHersteller"] . "' ORDER BY preis";
    }
    $resE = mysqli_query($con, $sqlE);
    Ergebniskontrolle($resE);

    while ($dsatz = mysqli_fetch_assoc($resE)) {
      echo $dsatz["hersteller"] . ", "
        . $dsatz["typ"] . ", "
        . $dsatz["preis"] . ".<br>";
    }

    mysqli_close($con);
  ?>
</body>
