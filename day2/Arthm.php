<?php
// ==========================================
// PHP Operators: Arithmetic, Assignment, Increment/Decrement
// ==========================================

// Variables
$x = 100;
$y = 10;

// Arithmetic Operators
echo "<h2>Arithmetic Operations</h2>";
echo "$x + $y = " . ($x + $y) . "<br>";
echo "$x - $y = " . ($x - $y) . "<br>";
echo "$x * $y = " . ($x * $y) . "<br>";
echo "$x / $y = " . ($x / $y) . "<br>";
echo "$x ** $y = " . ($x ** $y) . "<br>"; // Exponentiation

// ==========================================
// Increment / Decrement Operators
// ==========================================
$counter = 1;
echo "<h2>Increment/Decrement Operations</h2>";
echo "Initial counter: $counter<br>";

$counter++; // Post-increment
echo "After counter++: $counter<br>";

$counter--; // Post-decrement
echo "After counter--: $counter<br>";

$counter += 3; // Add 3
echo "After counter += 3: $counter<br>";

$counter -= 2; // Subtract 2
echo "After counter -= 2: $counter<br>";

// ==========================================
// Complex Arithmetic Expression
// ==========================================
$total = 1 + 2 - 3 * 4 / 5 ** 6; // Order of operations applied
echo "<h2>Complex Expression</h2>";
echo "1 + 2 - 3 * 4 / 5 ** 6 = $total<br>";

// ==========================================
// Extra Pro Exercises
// ==========================================

echo "<h2>Additional Practice</h2>";

// 1. Modulus operator
echo "10 % 3 = " . (10 % 3) . "<br>";

// 2. Combined arithmetic and assignment
$a = 5;
$a += 10; // $a = $a + 10
echo "a += 10 => $a<br>";
$a *= 2;  // $a = $a * 2
echo "a *= 2 => $a<br>";

// 3. Pre-increment vs Post-increment
$b = 5;
echo "Pre-increment: " . (++$b) . "<br>"; // increment first
$b = 5;
echo "Post-increment: " . ($b++) . " (then b=$b)<br>"; // increment after

// 4. Using parentheses to control precedence
$expr = (2 + 3) * 4;
echo "(2 + 3) * 4 = $expr<br>";

// 5. Mixing arithmetic and strings
$name = "PHP";
echo "Hello $name, 2 + 3 = " . (2 + 3) . "<br>";
?>
