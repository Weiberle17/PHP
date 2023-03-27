<html>
  <body>
    <?php
      class Auto extends Fahrzeug {
        private $kilometerstand;

        public function __construct($farbe, $hersteller, $kilometerstand) {
          parent::__construct();
          $this->kilometerstand = $kilometerstand;
        }

        public function Fahren($strecke) {
          $kilometerstand += $strecke;
          echo "Der neue Kilometerstand beträgt: <?= $kilometerstand ?>km.<br>" 
        }
      }

    $t2 = new Auto("blau", "Opel", 20000);
    $t2 -> Starten();
    $t2 -> Fahren(43);
    $t2 -> Stoppen();
    ?>
  </body>
</html>
