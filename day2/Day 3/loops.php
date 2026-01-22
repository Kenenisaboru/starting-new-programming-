<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./loops.php" method="post">
        <label>Enter a number to count to</label>
        <input type="text" name="counter">
        <input type="submit" value="start">
    </form>
    
</body>
</html>
<?php
/*
$counter =$_POST["counter"];
for($i = $counter; $i >= 0; $i--){
    echo $i. "<br>";
}
     while loop = do some code infinitely while some condition remains true
 

$counter = 5;

while ($counter <= 10) {
    echo $counter . "<br>";
    $counter++;
}
    $second =0;
$running =true;
while($running){
   $second++;
   echo $second . "<br>";
}
    */
   $seconds = 0;
$running = true;
if (isset($_POST['stop'])) {
    $running = false;
} else {
    $seconds++;
    echo $seconds . "<br>";
}



?>