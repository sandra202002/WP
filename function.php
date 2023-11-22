<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Function Example</title>
</head>
<body>

<?php
// Define a function to process the form data
function processFormData() 
{
     {
        // Retrieve form data
        $name = $_POST["name"];
        $email = $_POST["email"];

        // Display a message using the entered data
        echo "<p>Hello, $name! Your email address is: $email</p>";
    }
}
?>

<h1>PHP Function Example</h1>

<form method="post" action=" ">
    <label for="name">Name:</label>
    <input type="text" name="name" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" required>
    <br>
    <input type="submit" value="Submit">
</form>

<?php
// Call the function to process form data
processFormData();
?>

</body>
</html>
