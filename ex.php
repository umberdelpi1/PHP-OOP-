<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHO OOP Prodotto</title>
  </head>
  <body>
    <?php

      class Prodotto {

        private $id;

        private $name;
        private $model;
        private $type;
        private $color;
        private $price;


        public function __construct($id, $name, $model, $type, $color, $price) {

          $this -> id = $id;

          $this -> name = $name;
          $this -> model = $model;
          $this -> type = $type;
          $this -> color = $color;
          $this -> price = $price;
        }

        public function printMe() {
          echo "Codice Prodotto: <br>"
              . "id: " . $this -> id . "<br>"
              . "name: " . $this -> name . "<br>"
              . "model: " . $this -> model . "<br>"
              . "type: " . $this -> type . "<br>"
              . "color: " . $this -> color . "<br>"
              . "price: " . $this -> price . "<br>";
        }
      }
      $prodotto1 = new Prodotto(1, "Apple", "Iphone", "11 Pro", "Grey", "999$");
      $prodotto1 -> printMe();
    ?>
  </body>
</html>
