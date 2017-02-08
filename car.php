<?php
    class Car
    {
      public $make;
      public $price;
      public $miles;

    }

$honda = new Car();
$honda->make = "2015 Honda Civic Type R";
$honda->price = 26000;
$honda->miles = 1234;
$honda->image = "img/typer.jpg";

$lexus= new Car();
$lexus->make = "2017 Lexus RC F";
$lexus->price = 56022;
$lexus->miles = 8234;
$lexus->image = "img/lexus.jpg";

$subaru = new Car();
$subaru->make = "2015 Honda Civic Type R";
$subaru->price = 26000;
$subaru->miles = 1234;
$subaru->image = "img/typer.jpg";

$range_rover = new Car();
$range_rover->make = "2015 Honda Civic Type R";
$range_rover->price = 26000;
$range_rover->miles = 1234;
$range_rover->image = "img/typer.jpg";

$dodge = new Car();
$dodge->make = "2015 Honda Civic Type R";
$dodge->price = 26000;
$dodge->miles = 1234;
$dodge->image = "img/typer.jpg";

$cars = array($honda);

// $cars
// foreach ($cars as $car) {
//   # code...
// }
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
     <link rel="stylesheet" href="styles.css">
     <title>Cars</title>
   </head>
   <body>
     <div class="container">
       <div class="car-container">
         <?php
             foreach ($cars as $car) {
             echo "<h2> $car->make </h2>";
             echo "<ul>";
                 echo "<li> $$car->price </li>";
                 echo "<li> $$car->miles </li>";
                 echo "<li><img src='$car->image'></li>";
             echo "</ul>";
             }
          ?>
       </div>
     </div>
   </body>
 </html>
