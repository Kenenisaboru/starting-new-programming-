<?php
// ===============================
// CALCULATOR LOGIC
// ===============================
$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $op = $_POST["op"];

    switch ($op) {
        case "min2": $result = min($x, $y); break;
        case "max2": $result = max($x, $y); break;
        case "sum": $result = $x + $y; break;
        case "sub": $result = $x - $y; break;
        case "mul": $result = $x * $y; break;
        case "div": $result = ($y != 0) ? $x / $y : "Cannot divide by zero"; break;
        case "mod": $result = $x % $y; break;
        case "pow": $result = pow($x, $y); break;
        case "sqrt": $result = sqrt($x); break;
        case "abs": $result = abs($x); break;
        case "round": $result = round($x); break;
        case "floor": $result = floor($x); break;
        case "ceil": $result = ceil($x); break;
        case "avg2": $result = ($x + $y) / 2; break;
        case "even": $result = ($x % 2 == 0) ? "Even" : "Odd"; break;
        case "big2": $result = ($x > $y) ? $x : $y; break;
        case "min3": $result = min($x, $y, $z); break;
        case "max3": $result = max($x, $y, $z); break;
        case "rand": $result = rand($x, $y); break;
        case "sum3": $result = $x + $y + $z; break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Math Practice – Pro Version</title>
    <style>
        body {
            font-family: Arial;
            background: #f4f4f4;
        }
        .box {
            width: 450px;
            margin: 30px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
        }
        input, select, button {
            width: 100%;
            margin-bottom: 10px;
            padding: 8px;
        }
        .result {
            margin-top: 15px;
            font-weight: bold;
            color: green;
        }
        .section {
            margin-top: 40px;
        }
    </style>
</head>
<body>

<!-- ===============================
     CALCULATOR SECTION
================================ -->
<div class="box">
    <h2>PHP Math Calculator (20 Operations)</h2>

    <form method="post">
        <input type="number" step="any" name="x" placeholder="Enter X" required>
        <input type="number" step="any" name="y" placeholder="Enter Y">
        <input type="number" step="any" name="z" placeholder="Enter Z">

        <select name="op" required>
            <option value="">-- Choose Operation --</option>
            <option value="min2">Min (x, y)</option>
            <option value="max2">Max (x, y)</option>
            <option value="sum">Sum</option>
            <option value="sub">Subtract</option>
            <option value="mul">Multiply</option>
            <option value="div">Divide</option>
            <option value="mod">Modulus</option>
            <option value="pow">Power</option>
            <option value="sqrt">Square Root</option>
            <option value="abs">Absolute</option>
            <option value="round">Round</option>
            <option value="floor">Floor</option>
            <option value="ceil">Ceil</option>
            <option value="avg2">Average</option>
            <option value="even">Even / Odd</option>
            <option value="big2">Bigger</option>
            <option value="min3">Min (3 values)</option>
            <option value="max3">Max (3 values)</option>
            <option value="rand">Random</option>
            <option value="sum3">Sum (3 values)</option>
        </select>

        <button type="submit">Calculate</button>
    </form>

    <?php if ($result !== ""): ?>
        <div class="result">Result: <?= $result ?></div>
    <?php endif; ?>
</div>

<!-- ===============================
     PHP OPERATORS DEMO
================================ -->
<div class="box section">
    <h2>PHP Operators Demonstration</h2>

    <?php
    $a = 100;
    $b = 10;

    echo "<strong>Arithmetic Operators</strong><br>";
    echo "$a + $b = " . ($a + $b) . "<br>";
    echo "$a - $b = " . ($a - $b) . "<br>";
    echo "$a * $b = " . ($a * $b) . "<br>";
    echo "$a / $b = " . ($a / $b) . "<br>";
    echo "$a ** $b = " . ($a ** $b) . "<br><br>";

    echo "<strong>Increment / Decrement</strong><br>";
    $counter = 1;
    echo "Initial: $counter<br>";
    $counter++;
    echo "After ++ : $counter<br>";
    $counter--;
    echo "After -- : $counter<br>";
    $counter += 3;
    echo "After +=3 : $counter<br>";
    $counter -= 2;
    echo "After -=2 : $counter<br><br>";

    echo "<strong>Complex Expression</strong><br>";
    $total = 1 + 2 - 3 * 4 / 5 ** 6;
    echo "Result = $total<br><br>";

    echo "<strong>Extra Practice</strong><br>";
    echo "10 % 3 = " . (10 % 3) . "<br>";
    $x = 5;
    $x += 10;
    echo "x += 10 → $x<br>";
    $x *= 2;
    echo "x *= 2 → $x<br>";
    ?>
</div>

</body>
</html>
