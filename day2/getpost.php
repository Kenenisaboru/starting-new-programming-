<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="./getpost.php" method="post">
    <label>x</label>
    <input type="text" name="x"><br>
    <label>y</label>
    <input type="text" name="y"><br>
   <label>z</label>
    <input type="text" name="z">
    <input type="submit"value="total">
   </form>
</body>
</html>
<?php
$x= $_POST["x"];
$x= $_POST["y"];
$x= $_POST["z"];
$total =null;
//$total = null;
//$total =abs($x);
//echo $total;
//$total = round($x);
//$total =floor($x);
//$total =ceil($x);
//$total =max($x, $y, $z);
$total =min($x, $y, $z);


echo $total;



?>