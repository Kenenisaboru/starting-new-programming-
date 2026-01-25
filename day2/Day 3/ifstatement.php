<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Conditional Examples</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .box {
            padding: 15px;
            border: 1px solid #ccc;
            width: fit-content;
        }
    </style>
</head>
<body>

<h2>PHP If-Else Examples</h2>

<div class="box">
<?php
// Example 1: Gender check
$isMale = true;

if ($isMale) {
    echo "<p>You are male 👨</p>";
} else {
    echo "<p>You are female 👩</p>";
}

// Example 2: Age check
$age = 21;

if ($age >= 18) {
    echo "<p>You are an adult ✔️</p>";
} else {
    echo "<p>You are under 18 ❌</p>";
}

// Example 3: Grade system
$score = 85;

if ($score >= 90) {
    echo "<p>Grade: A</p>";
} elseif ($score >= 75) {
    echo "<p>Grade: B</p>";
} elseif ($score >= 60) {
    echo "<p>Grade: C</p>";
} else {
    echo "<p>Grade: F</p>";
}
?>
</div>

</body>
</html>
