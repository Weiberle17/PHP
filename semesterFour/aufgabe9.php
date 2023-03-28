<html>
  <body>
    <?php
      include ("aufgabe8.php");

      class Auto extends Fahrzeug {
        public $kilometerstand;

        public function __construct($farbe, $hersteller, $kilometerstand) {
          $this->farbe = $farbe;
          $this->hersteller = $hersteller;
          $this->kilometerstand = $kilometerstand;
        }

        public function Fahren($strecke) {
          $this->kilometerstand = $this->kilometerstand + $strecke;
          echo "Der neue Kilometerstand beträgt: ".  $this->kilometerstand ." km.<br>";
        }
      }

    $t2 = new Auto("blau", "Opel", 20000);
    $t2 -> Starten();
    $t2 -> Fahren(43);
    $t2 -> Stoppen();
    ?>
  </body>
</html>
