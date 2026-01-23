<?php
// Initialize variables
$result = "";
$error = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Validate input
    if (empty($_POST["counter"])) {
        $error = "Please enter a number.";
    } elseif (!is_numeric($_POST["counter"])) {
        $error = "Input must be a number.";
    } else {
        $counter = (int) $_POST["counter"];

        // Prevent negative values
        if ($counter < 0) {
            $error = "Please enter a positive number.";
        } else {
            // Generate output
            for ($i = $counter; $i >= 0; $i--) {
                $result .= $i . "<br>";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loop Counter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 40px;
        }
        form {
            background: #fff;
            padding: 20px;
            max-width: 400px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
        }
        .error {
            color: red;
            margin-top: 10px;
        }
        .result {
            margin-top: 20px;
            background: #e9ffe9;
            padding: 15px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<form method="post">
    <label><strong>Enter a number to count down from:</strong></label>
    <input type="text" name="counter" placeholder="e.g. 10">
    <input type="submit" value="Start Counting">
</form>

<?php if ($error): ?>
    <div class="error"><?= $error ?></div>
<?php endif; ?>

<?php if ($result): ?>
    <div class="result">
        <strong>Result:</strong><br>
        <?= $result ?>
    </div>
<?php endif; ?>

</body>
</html>
