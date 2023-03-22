<!doctype html>
<?php
define ("MWST", 19);
?>
<html>
<head>
<meta charset="utf-8">
<title>Test/Konstanten</title>
</head>
<body>
<?php
$netto = 42;
$steuer = ($netto/100)*MWST;
$brutto = $netto+$steuer;
?>
<p>
Preis (ohne MwSt.): <?=$netto?> Euro.<br>
<?= MWST ?>% MwSt: <?=$steuer?> Euro.<br>
Preis (inkl. MwSt.): <strong><?=$brutto ?>
Euro</strong>.
</p>
</body>
</html>

