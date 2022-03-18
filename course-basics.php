<?php
  include('variables.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Jarryd Steele - PHP</title>
  </head>
  <body>
    <br/>
    
    <center>
    <p>
      
      <?php 
        
        $num_1 = 40;
        $num_2 = 5;

        $key = 2;

        $array_1 = array("John", "Steve", "Mary");
        $array_2 = array("Elder", "Smith", "Poppins");
        $array_3 = array($array_1, $array_2);

        $fav_pizza = array(
          "John"=>"Pepperoni",
          "Steve"=>"Cheese",
          "Mary"=>"Mushroom",
        );

        $stuff = "Jarryd Steele";

        //echo strtoupper($stuff);

        function helloWorld($first_name, $last_name) {
          return "Hello, $first_name $last_name!";
        }

        // $ans = helloWorld("Jarryd", "Steele");

        function guess($guess) {
          echo "Guess a random number!<br>";
          $rand = mt_rand(0,10);
          if ($rand == $guess)
            echo "Well done, $guess = $rand!";
          else
            echo "Oh no, $guess <> $rand...";
        }


        $year = date('Y');
        echo "Copyright (c) $company_name $year - All Rights Reserved";


        // $rando = mt_rand(0,2);

        // guess(mt_rand(0,10));


        // $todays_date = date('l jS \of F, Y');
        // $year = date('Y');
        // echo "Copyright (c) $year - All Rights Reserved";


        // echo $array_1[$rando];



        // **********      While Loop      **********

        // $x = 0;

        // while ($x < 3) {
        //   echo $array_3[0][$x] . " " . $array_3[1][$x] . "'s favourite pizza is: " . $fav_pizza[$array_1[$x]];
        
        //   echo "<br/>";
        //   echo "<br/>";
        //   ++$x;
        // }

        // $x = 1;

        // while ($x <= 10) {
        //   echo "The count is: $x<br/>";
        //   ++$x;
        // }

        // $x = 1;

        // do {
        //   echo "The count is: $x<br/>";
        //   ++$x;
        // } while ($x <= 10)


        // **********      For Loop      **********

        // for ($y =0; $y < 3; $y++ ) {
        //   echo $array_3[0][$y] . " " . $array_3[1][$y] . "'s favourite pizza is: " . $fav_pizza[$array_1[$y]];
        
        //   echo "<br/>";
        //   echo "<br/>";
        // }

        // echo "For Loop: <br/>";
        // for ($count =0; $count <= 10; $count++ ) {
        //   echo "The count is: $count<br/>";
        // }


        // **********      Foreach Loop      **********        

        // foreach ($fav_pizza as $key => $value) {
        //   echo $key . "'s favourite pizza is: " . $value . "<br>";
        // }

        // foreach ($array_1 as $name) {
        //   echo "Name: $name<br/>";
        // }

        // echo "<br/>";

        // $count = 0;
        // while ($count < count($array_1)) {
        //   echo "Name: $array_1[$count]<br/>";
        //   ++$count;
        // }

        // echo "<br/>";

        // for ($x = 0; $x < 3; ++$x) {
        //   echo "Name: $array_1[$x]<br/>";
        // }

        // **********                        **********

        // echo $array_1[count($array_1) - 1];

        // echo $fav_pizza[$array_1[$key]];
        

        // echo "<br/>";
        // echo "<br/>";


        // if ($num_1 > $num_2) {
        //   echo $num_1 . " is greater than " . $num_2;
        // } elseif ($num_1 < $num_2) {
        //   echo $num_1 . " is less than " . $num_2;
        // } else {
        //   echo $num_1 . " is equal to " . $num_2;
        // }

      ?>
    </center>

    <br/>

    </p>

































    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>