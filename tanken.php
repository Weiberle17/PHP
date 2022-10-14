<!doctype html>
<?php
$literpreis = $_POST["literpreis"];
$tmenge = $_POST["tmenge"];
$gezahlt = $literpreis * $tmenge;
?>
<html>
<head>
  <meta charset="utf-8">
  <title>Auswertung</title>
</head>
<body>
<p>
Guten Tag!<br>
  Sie haben insgesamt <?=$gezahlt ?>$  ausgegeben.<br>
  <?php 
if ($literpreis > 1.50) {
  $vergleich = "teuer getankt!"; }
elseif ($literpreis > 1.40) {
  $vergleich = "billig getankt"; }
else { $vergleich = "fair getankt!"; }
?>
Sie haben <?=$vergleich ?><br>
  </p>
  </body>
  </html>

