<!doctype html>
<?php
$preis = $_POST["preis"];
$mwst = $_POST["mwst"];
if ($mwst == 19) $faktor = 1.19;
else $faktor = 1.16;
$netto = ($preis / $faktor);
$netto = number_format($netto,2,",",".");
?>
<html>
<head>
  <meta charset="utf-8">
  <title>Auswertung</title>
</head>
<body>
<p>
Sie haben <?=$preis ?>$ gezahlt.<br>
  Die Mwst beträg <?=$mwst ?>%.<br>
    Der Nettopreis beträgt <?=$netto ?>$.<br>
      </p>
      </body>
      </html>
