<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

  
    $firstname = htmlspecialchars(trim($_POST["firstname"]));
    $lastname = htmlspecialchars(trim($_POST["lastname"]));
    $favouritepet = htmlspecialchars(trim($_POST["favouritepet"]));

    // Validation
    if (empty($firstname) || empty($lastname) || empty($favouritepet)) {
        echo "❌ Please fill in all fields.";
        exit;
    }

    // Output
    echo "<h2>Form Submitted Successfully ✅</h2>";
    echo "<p><strong>First Name:</strong> $firstname</p>";
    echo "<p><strong>Last Name:</strong> $lastname</p>";
    echo "<p><strong>Favourite Pet:</strong> $favouritepet</p>";

} else {
    echo "❌ Invalid request.";
}
