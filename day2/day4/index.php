<?php
// Call the Python script
$output = shell_exec("python calculate.py");
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP + Python Example</title>
</head>
<body>

<h2>PHP + Python Integration 🚀</h2>

<p>Result from Python:</p>
<pre><?php echo $output; ?></pre>

</body>
</html>
