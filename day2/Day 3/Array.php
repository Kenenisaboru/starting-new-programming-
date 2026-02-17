<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array Practice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        h2 {
            color: #333;
        }
        .box {
            border: 1px solid #ccc;
            padding: 15px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<h1>PHP Array Practice – 5 Questions</h1>

<?php
/* ===============================
   Question 1: Create and display array
================================ */
echo "<div class='box'>";
echo "<h2>1. Countries Array</h2>";

$countries = ["Ethiopia", "Kenya", "Uganda", "Tanzania", "Somalia"];
foreach ($countries as $country) {
    echo $country . "<br>";
}
echo "</div>";

/* ===============================
   Question 2: Count array elements
================================ */
echo "<div class='box'>";
echo "<h2>2. Count Elements</h2>";

$numbers = [10, 20, 30, 40, 50];
echo "Total elements: " . count($numbers);
echo "</div>";

/* ===============================
   Question 3: Find largest number
================================ */
echo "<div class='box'>";
echo "<h2>3. Largest Number</h2>";

$values = [25, 60, 15, 90, 40];
echo "Largest number: " . max($values);
echo "</div>";

/* ===============================
   Question 4: Calculate average
================================ */
echo "<div class='box'>";
echo "<h2>4. Average Score</h2>";

$scores = [80, 75, 90, 85, 70];
$average = array_sum($scores) / count($scores);
echo "Average score: " . $average;
echo "</div>";

/* ===============================
   Question 5: Associative array
================================ */
echo "<div class='box'>";
echo "<h2>5. Student Information</h2>";

$student = [
    "name" => "Kenenisa Boru",
    "department" => "Information Science",
    "year" => 3
];

foreach ($student as $key => $value) {
    echo ucfirst($key) . ": " . $value . "<br>";
}
echo "</div>";
?>

</body>
</html>
