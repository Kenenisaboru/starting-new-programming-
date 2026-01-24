<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
/*
 * Example PHP Functions
 
 * Description: Simple and clear PHP function examples
 */

// 1. Greeting function
function sayHi(string $name): string {
    return "Hello, $name!";
}

// 2. Cube function
function cube(int $number): int {
    return $number * $number * $number;
}

// 3. Check even or odd
function isEven(int $number): string {
    return ($number % 2 === 0) ? "Even" : "Odd";
}

// 4. Sum of an array
function sumArray(array $numbers): int {
    return array_sum($numbers);
}

// 5. Find maximum number
function findMax(array $numbers): int {
    return max($numbers);
}

/* ---------- Function Calls (Testing) ---------- */

echo sayHi("Gamme") . "<br>";
echo sayHi("Osman") . "<br>";
echo sayHi("Esmail") . "<br><br>";

echo "Cube of 4: " . cube(4) . "<br>";
echo "10 is " . isEven(10) . "<br>";
echo "Sum of array: " . sumArray([1, 2, 3, 4, 5]) . "<br>";
echo "Maximum number: " . findMax([10, 25, 7, 40]) . "<br>";

/*
 * PHP Algorithm Practice
 * Description: Common algorithm problems implemented in PHP
 */

/* -------------------------------------------------
   1. Factorial (Loop Algorithm)
------------------------------------------------- */
function factorial(int $n): int {
    if ($n < 0) return 0;

    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

/* -------------------------------------------------
   2. Fibonacci Sequence (Iterative)
------------------------------------------------- */
function fibonacci(int $n): array {
    if ($n <= 0) return [];

    $sequence = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $sequence[] = $sequence[$i - 1] + $sequence[$i - 2];
    }
    return array_slice($sequence, 0, $n);
}

/* -------------------------------------------------
   3. Prime Number Check
------------------------------------------------- */
function isPrime(int $num): bool {
    if ($num <= 1) return false;

    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i === 0) return false;
    }
    return true;
}

/* -------------------------------------------------
   4. Reverse a String
------------------------------------------------- */
function reverseString(string $text): string {
    return strrev($text);
}

/* -------------------------------------------------
   5. Linear Search Algorithm
------------------------------------------------- */
function linearSearch(array $data, int $target): int {
    foreach ($data as $index => $value) {
        if ($value === $target) {
            return $index;
        }
    }
    return -1; // Not found
}

/* -------------------------------------------------
   6. Bubble Sort Algorithm
------------------------------------------------- */
function bubbleSort(array $data): array {
    $length = count($data);

    for ($i = 0; $i < $length; $i++) {
        for ($j = 0; $j < $length - 1; $j++) {
            if ($data[$j] > $data[$j + 1]) {
                [$data[$j], $data[$j + 1]] = [$data[$j + 1], $data[$j]];
            }
        }
    }
    return $data;
}

/* -------------------------------------------------
   7. Count Vowels in a String
------------------------------------------------- */
function countVowels(string $text): int {
    return preg_match_all('/[aeiou]/i', $text);
}

/* -------------------------------------------------
   Algorithm Testing Output
------------------------------------------------- */

echo "Factorial of 5: " . factorial(5) . "<br>";
echo "Fibonacci (7): " . implode(", ", fibonacci(7)) . "<br>";
echo "Is 13 prime? " . (isPrime(13) ? "Yes" : "No") . "<br>";
echo "Reverse 'PHP': " . reverseString("PHP") . "<br>";
echo "Linear search index: " . linearSearch([10, 20, 30, 40], 30) . "<br>";
echo "Bubble sort: " . implode(", ", bubbleSort([5, 3, 8, 1])) . "<br>";
echo "Vowel count: " . countVowels("Information Science") . "<br>";

?>