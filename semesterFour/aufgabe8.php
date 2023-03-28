<html>
  <body>
    <?php
      class Fahrzeug {
        private $farbe;
        private $hersteller;

        public function __construct($farbe, $hersteller) {
          $this->farbe = $farbe;
          $this->hersteller = $hersteller;
        }

        public function Starten() {
          echo "Das Fahrzeug ist gestartet <br>";
        }

        public function Stoppen() {
          echo "Das Fahrzeug ist gestoppt <br>";
        }
      }

      $t = new Fahrzeug("schwarz", "Toyota");
      $t -> Starten();
      $t -> Stoppen();
    ?>
  </body>
</html>
