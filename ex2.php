<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP OOP PRODOTTO 2</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php
      class Book {

        public $title;
        public $author;
        public $price;
        public $year;

        public function __construct($title,$author,$price,$year){

          $this -> title = $title;
          $this -> author = $author;
          $this -> price = $price;
          $this -> year = $year;
          $this -> page = $page;

        }
        public function printProduct(){

         echo "Scheda Libro:<br>"
            . "Libro/Titolo: " . $this -> title . "<br>"
            . "Prezzo: " . $this -> price . "€" . "<br>"
            . "Anno: " . $this -> year . "<br>"
            . "Pagine: " . $this -> page . "<br>";
                        $this -> author -> printProduct();
        }
      }

      class Author {

        public $name;
        public $lastname;
        public function __construct($name,$lastname){

           $this -> name = $name;
           $this -> lastname = $lastname;
        }
        public function printProduct(){
           echo "Autore: " . $this -> name . " " . $this -> lastname . "<br>---------<br>";
        }
      }

      $author1 = new Author('Bruno',"Munari");
      $author2 = new Author('Oliviero',"Toscani");
      $author3 = new Author('Nadia',"Busato");

      $book1 = new Book('Cromorama',$author1,"24,00","1992","2350");
      $book2 = new Book('Non sono Obiettivo',$author2,"22,00", "1996","346");
      $book3 = new Book('Non sarò mai la brava moglie di nessuno',$author3,"9,99", "1980","780");


      $book1 -> printProduct();
      $book2 -> printProduct();
      $book3 -> printProduct();
    ?>
  </body>
</html>
