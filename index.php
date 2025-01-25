<?php
// //variables
// $name = 'Vargaas';
// $age=24;
// $isBool = true;
// $marks = 24.10;
// $brands = array('Apple','Microsoft','Google',10);
// $percentage = $marks/30*100;

// echo "Hello, there \nMy name is $name\n and i am $age years old ,\ni got $marks marks /30 in PHP langauge and \nI was the ${isBool}st student in a course with $percentage%.\n";
// echo var_dump($marks);
// print("Variable of marks is $marks");
// print($marks ? "Marks are >50 ": "No marks is <50\n");

// //conditionals
// if($marks > 50){
//     echo "Markas are good\n";
// }
// else{
//     echo "Markas are bad\n";
// }

// // for($i=0, i<5, i++){
// //     echo "$i"
// // }

// //functions

// $x = 4;
// $y=10;
// function assignx ($x,$y) {
// $x = 0;
// $sum=0;
// $sum=$x+$y;
// print "\$x inside function is $x.\n";
// print("The sum if $x and $y is = $sum\n");
// }
// assignx(1,2);
// print "\$x outside of function is $x.
// ";
// define("pi",3.14);

// function circle($radius,$pi){
//     $area = $radius*$radius*$pi;
//     return $area;
// }
// $circleArea = circle(7,3.14);
// print("The area of circle is $circleArea\n");
// print($age%2==0?"$age is Odd number":"$age is even number\n");

// $num=12;

// echo "Table of multiplication of 2\n";
// echo "$num X 0 = ". ($num*0). "\n";
// echo "$num X 1 = ". ($num*1). "\n";
// echo "$num X 2 = ". ($num*2). "\n";
// echo "$num X 3 = ". ($num*3). "\n";
// echo "$num X 4 = ". ($num*4). "\n";
// echo "$num X 5 = ". ($num*5). "\n";
// echo ($num >10 && $num!=2 ?"Truthy wanna":"Falsy Wann\n");

// //loops
//  for($i=0;$i<5;$i++){
//     echo("\n$i");
//  }

//  $counter=1;
//  while($counter<=10){
//     echo("\n$counter");
//     $counter++;
//  }
//  $fruits = ["Apple","Melon","Orange","Soya"];

//  foreach($fruits as $fruit){
//     echo "Fruit: " .($fruit[0])."\n";
//  }

// //  arrays

// $numbers = [1,2,3,4,5];
// $student = [
//     "id"=>1,
//     "name"=>"Obed",
//     "age"=>30,
//     "isAccepted"=>true,
// ];
// print("Student Id: " . ($student['id'])). "\n";
// echo "Student Name: " .($student['name']) ."\n";
// foreach($student as $stud){
//     echo "Student Details: " . ($stud) ."\n";
// }

//classes

class Car{
    public $brand;
    public $color;

    public function __construct($brand,$color){
        $this->brand=$brand;
        $this->color=$color;
    }
   
}
class Driver extends Car{
    public $name;
    public function drive($name){
        return "The $this->color $this->brand is being driven by $name";
    }
}

$car = new Driver("Maserati","red");
echo $car->drive("Obed\n");

//  
?>