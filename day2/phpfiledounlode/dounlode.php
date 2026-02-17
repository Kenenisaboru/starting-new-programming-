<?php 
//array in php=they allow you to store multiple values in a single variable making it easier to manage related data
//there are there main types of array in php
//indexed array=use numeric indexes starting from 0 these are ideal when you need to store a list of items
//using the array function
//$colors=array("red","green","blue","yellow");
//echo $colors[0];
// $colors=["read","grean","white","blue"];
//echo $colors[2];
//modifying array elements=it is simpliy refer to its index and assign to a new value
//$number =[1,3,4,5,6];
//$number[0]=37;
//var_dump($number) ."\n";
//looping throu indexing array= the most common is foreach loop
//$cars =["volvo", "toyota", "BMW"];
//foreach ($cars as $car){
//    echo "$car".  "\n";
//}
//another loop is for loop=espetially when we need to access both indexes and value 
/*
$country = ["USA", "UNK", "Ethio", "Canada", "Mexico"];
$originalCount = count($country); // Store original number of elements

 Loop through only the original elements
for ($i = 0; $i < $originalCount; $i++) {
    echo $country[$i] . "<br>"; // Show the original element
    array_push($country, "Vietnam"); // Add "Vietnam" to the array
}

 Show the final array after loop
echo "<br>Final array:<br>";
var_dump($country);
traversing an indexing array=it is reverse order
$number=[1,2,3,4,5,6,7,8,9];
$i =count($number) -1;
while($i >=0){
    echo $number[$i] ."\n";
    $i--;
}
$numbers =[1000,2000,3000,4000,5000,10000,0000];
$num=count($numbers) -1;
while($num>=0){
    echo $numbers[$num] ."\n";
    $num --;

}

Associative array= named keys which are useful when you want to store data with meaningful identifiers instead of numeric indexes 
 this is instead of give me the item on possition 0 we say
give me the item with the name name or with the name age
$person =[
    "name" =>"kenenisa",
    "age" => 22,
    "city" => "Aseko"
];
echo $person["name"] ."\n <br>";
echo $person["age"] ."\n <br>" ;
echo $person["city"] ."\n <br>";
by using foreach loop
$fruits =[
    "apple" =>"red",
    "banana" => "yellow",
    "grape" => "purple",
];
foreach($fruits as $fruit => $color){
    echo "the color of $fruit is $color .\n <br>";
}
    $persons =[
    "name" =>"kenenisa",
    "age" => 22,
    "city" => "Aseko"
];
$keys = array_keys($persons);
for($i = 0; $i< count($keys); $i++){
   $person=$keys[$i];
   echo "the information of $person is $persons[$person] .\n <br>";
}
   $fruits = [
    "apple" => "red",
    "banana" => "yellow",
    "grape" => "purple"
];

$keys = array_keys($fruits);

for ($i = 0; $i < count($keys); $i++) {
    $fruit = $keys[$i];
    echo "The color of $fruit is " . $fruits[$fruit] . "<br>\n";
}
*/
//multidimential array=are arrays that contain other arrays as elemens these are used to reperesent more complex data structure such as metrices or tables
//program to create .
//multidimentional array
//creating multidimentional
//array
$myarray =array(
    array("kanu","ram","shyam"),
    array("unnao","trichy","knapur")
);
print_r($myarray);

?>