<html>
    <body>
        <h1>THIS IS MY FIRST PAGE OF THE PHP</h1>
       
        // $v ="Tarun";
        
        // echo "$v WELCOME TO CEDCOSS WORLD!!
        
        // <br>";
        // sums();
        // echo "$V WELCOME TO CEDCOSS WORLD!! <br>";
        //IN THIS variable are not same as you declare .
         # is also used for single comments.

         /* for multi comments we used this sign*/

        //case sensitive
        //declared a function
//     function sums(){

//             $t =6 ;
//             $v =7;
//             $sum=$t + $v;
//             print "my nam is $sum <br>";
//             echo "my nam is $sum <br>";
//     }
    
//     sums();
// 
<?php
    php array under this 

    $cars = array("headphone","earphones","buds");
    var_dump($cars) ;
let suppose make one class
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("black", "Volvo");
  echo $myCar -> message();
  echo strlen("hello tarun"<);
  echo str_word_count("hello tarun");
    ?>
  </body>
</html>