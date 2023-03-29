<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>
  <h1>Festplatten:</h1>
  <h2>Für welchen Preisbereich interessieren Sie sich?</h2>
  <form action="aufgabe10.php" method="post">
    <p>
      <input type="radio" name="preisBereich" value="1" checked="checked"> Bis 120 €.<br>
      <input type="radio" name="preisBereich" value="2"> Zwischen 120 € und 140 €.<br>
      <input type="radio" name="preisBereich" value="3"> Über 140 €.<br>
    </p>
    <h2>Wollen Sie eine bestimmte Marke auswählen?</h2>
    <select name="ausgewählterHersteller">
      <option value="Alle">Alle</option>
      <option value="Quantum">Quantum</option>
      <option value="Seagate">Seagate</option>
      <option value="Fujitsu">Fujitsu</option>
      <option value="IBM Corporation">IBM Corporation</option>
    </select>
    <p><input type="submit"><input type="reset"></p>
  </form>
  <?php 
    if (!empty($_POST["preisBereich"])) {
      function Ergebniskontrolle($result) {
        $num = mysqli_num_rows($result);
        if($num > 0) {
          echo "Ergebnis:<br>";
        }
        else {
          echo "Keine Ergebnisse.<br>";
        }
      }

      echo "<h1>Ergebnisse</h1>";

      $con = mysqli_connect("", "root", "", "hardware");

      // Teilaufgabe a)
      echo "<h4>Teilaufgabe a)</h4>";
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
      echo "<h4>Teilaufgabe b)</h4>";
      $resB = mysqli_query($con, "SELECT hersteller, typ, preis FROM fp ORDER BY preis");
      Ergebniskontrolle($resB);

      while ($dsatz = mysqli_fetch_assoc($resB)) {
        echo $dsatz["hersteller"] . ", "
          . $dsatz["typ"] . ", "
          . $dsatz["preis"] . ".<br>";
      }

      //Teilaufgabe c)
      echo "<h4>Teilaufgabe c)</h4>";
      $resC = mysqli_query($con, "SELECT hersteller, typ, preis FROM fp WHERE preis BETWEEN 120 AND 140 ORDER BY preis");
      Ergebniskontrolle($resC);

      while ($dsatz = mysqli_fetch_assoc($resC)) {
        echo $dsatz["hersteller"] . ", "
          . $dsatz["typ"] . ", "
          . $dsatz["preis"] . ".<br>";
      }

      //Teilaufgabe d)
      echo "<h4>Teilaufgabe d)</h4>";
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
      echo "<h4>Teilaufgabe e)</h4>";
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
    }
  ?>
</body>
</html>
