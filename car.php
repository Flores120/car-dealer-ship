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
$subaru->make = "2015 Subaru Legacy";
$subaru->price = 32100;
$subaru->miles = 2123;
$subaru->image = "img/legacy.jpg";

$range_rover = new Car();
$range_rover->make = "2016 Range Rover";
$range_rover->price = 89000;
$range_rover->miles = 1235;
$range_rover->image = "img/rrover.jpg";

$dodge = new Car();
$dodge->make = "2016 Dodge Ram";
$dodge->price = 29799;
$dodge->miles = 45322;
$dodge->image = "img/ram.jpg";

$cars = array($honda, $lexus, $subaru, $range_rover, $dodge);

$cars_matching_search = array();
foreach ($cars as $car) {
  if ($car->price < $_GET["price"]){
    array_push($cars_matching_search, $car);
  }
}
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
     <link rel="stylesheet" href="css/styles.css">
     <title>Car Dealer Home</title>
   </head>
   <body>
     <div class="nav">
       <ul>
         <li><a href="car_form.html">Home</a></li>
         <li><a href="car.php">Show All Cars</a></li>
       </ul>
     </div>
     <div class="container">
       <div class="car-container">
         <?php
             foreach ($cars as $car) {
             echo "<h2> $car->make </h2>";
             echo "<ul>";
                 echo "<li> $$car->price </li>";
                 echo "<li> $car->miles </li>";
                 echo "<li><img src='$car->image'></li>";
             echo "</ul>";
             }
          ?>
       </div>
     </div>
   </body>
 </html>
