<?PHP
// <!-- Beginner -->
// <!-- Create variables for name, age, and favorite color. Print them in a single sentence. -->
$name = "Obed";
$age = 25;
$fav_color = "Red";

print("My name is $name and i am $age years old, and i love $fav_color color.\n");

// Calculate the area of a rectangle with a width of 10 and height of 20
$width=10;
$height= 7;
echo "The area of a rectangle with a width of $width and height of $height is = ".($width*$height)."\n";

// Write a program to check if a number is odd or even.

$number =10;

print($number%2==0 ?" $number is Even\n": " $number is odd\n");

// Print numbers from 1 to 10 using a loop.

$counter=1;
while($counter<=10){
    print("\t$counter");
    $counter++;
}
print("\n");

// Write a function to calculate the square of a number.

function square($num){
    return $num*$num;
}
echo "The square of 4 is " . (square(4))."\n";

// Create an array of 5 fruits and print each fruit using a loop.

$fruits = ["Apple","Whitabix","Mango","Berries","Maracuja"];

foreach($fruits as $fruit){
    print("Fruit: $fruit\n");
}

// Create an associative array for a book with title, author, and price. Print the book details.

$book = [
    "title"=>"C Programming",
    "author"=>"Vargas",
    "price"=>300.00
];

echo "_______Book Details__________\n";
echo "Book title: ". ($book['title'])."\n";
echo "Book Author: ". ($book['author'])."\n";
echo "Book price: ". ($book['price'])."\n";

// Create a class Person with properties name and age. Add a method to display a greeting.

class Person {
    private $id;
    public $name;
    public $age;

    public function __construct($id, $name,$age){
        $this->id=$id;
        $this->name=$name;
        $this->age=$age;
    }
}

class Speaker extends Person{
    public function Speaking(){
        echo "Person with name: $this->name and age of $this->age is Speaking\n";
    }
}

$speak = new Speaker(1,"Obed",34);

echo $speak->Speaking();

$nom = isset($_GET['nom']) ? $_GET['nom']: "Guest";
echo "Hello, $nom!\n"; 

// Create a multidimensional array for 3 students, each with a name and grade. Print all the details.

$employee =[
    ["empId"=>101,"empName"=>"Vargas","empDept"=>"SOD","empSalary"=>2300.70],
    ["empId"=>102,"empName"=>"Major","empDept"=>"HR","empSalary"=>1600.50],
    ["empId"=>103,"empName"=>"Obed","empDept"=>"MNR","empSalary"=>2540.40],
];

foreach ($employee as $emp){
    echo "The Employee id is: ". $emp['empId']."\t and the employee name is :".$emp['empName']."\t and workks in ".$emp['empDept']."\tand paid: $".$emp['empSalary']."\n";
}

/*__________________________Intermediate PHP Exercises____________________________*/ 
