<?php
declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| WEEKLY PAY CALCULATION
|--------------------------------------------------------------------------
*/

define('OVERTIME_RATE', 1.5);

function calculateWeeklyPay(int $hours, float $rate): float
{
    if ($hours <= 0) {
        return 0;
    }

    if ($hours <= 40) {
        return $hours * $rate;
    }

    $overtimeHours = $hours - 40;
    return (40 * $rate) + ($overtimeHours * ($rate * OVERTIME_RATE));
}

$hours = 40;
$rate  = 15;
$weeklyPay = calculateWeeklyPay($hours, $rate);

echo "You made \${$weeklyPay} this week<br>";

/*
|--------------------------------------------------------------------------
| WEATHER CHECK (LOGICAL OPERATORS)
|--------------------------------------------------------------------------
| &&  → true if BOTH conditions are true
| ||  → true if AT LEAST ONE condition is true
| !   → reverses boolean value
*/

$temp = -15;
$cloudy = false;

if ($temp < 0 || $temp > 30) {
    echo "The weather is bad<br>";
} else {
    echo "The weather is good<br>";
}

echo $cloudy ? "It's cloudy<br>" : "It's sunny<br>";

/*
|--------------------------------------------------------------------------
| GRADE CHECK (IF / ELSEIF)
|--------------------------------------------------------------------------
*/

$grade = strtoupper("f");

if ($grade === "A") {
    echo "You did great<br>";
} elseif ($grade === "B") {
    echo "You did good<br>";
} elseif ($grade === "C") {
    echo "You did okay<br>";
} elseif ($grade === "D") {
    echo "You did poorly<br>";
} elseif ($grade === "F") {
    echo "You failed<br>";
} else {
    echo "Invalid grade<br>";
}

/*
|--------------------------------------------------------------------------
| GRADE CHECK (SWITCH)
|--------------------------------------------------------------------------
*/

$grade = "E";

switch ($grade) {
    case "A":
        echo "You did great<br>";
        break;
    case "B":
        echo "You did good<br>";
        break;
    case "C":
        echo "You did okay<br>";
        break;
    case "D":
        echo "You did poor<br>";
        break;
    case "E":
        echo "You failed<br>";
        break;
    default:
        echo "Invalid grade<br>";
}

/*
|--------------------------------------------------------------------------
| DAY MESSAGE
|--------------------------------------------------------------------------
*/

$day = date("l"); // Correct format → Monday, Tuesday, etc.

switch ($day) {
    case "Monday":
        echo "I hate Mondays<br>";
        break;
    case "Tuesday":
        echo "My best day<br>";
        break;
    default:
        echo "Just another day<br>";
}
