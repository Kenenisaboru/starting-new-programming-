<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
</head>
<body>

<main>
    <h2>User Information Form</h2>

    <!-- Use POST (more secure than GET) -->
    <form action="form.php" method="post">

        <label for="firstname">First Name</label><br>
        <input id="firstname" type="text" name="firstname" placeholder="First name..." required><br><br>

        <label for="lastname">Last Name</label><br>
        <input id="lastname" type="text" name="lastname" placeholder="Last name..." required><br><br>

        <label for="favouritepet">Favourite Pet</label><br>
        <select id="favouritepet" name="favouritepet" required>
            <option value="">-- Select one --</option>
            <option value="Dog">Dog</option>
            <option value="Cat">Cat</option>
            <option value="Bird">Bird</option>
        </select><br><br>

        <button type="submit">Submit</button>
    </form>
</main>

</body>
</html>
