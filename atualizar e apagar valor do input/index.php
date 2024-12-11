<?php
// Start session if you are using sessions
session_start();

// Clear session variables on page load
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Unset all session variables
    session_unset();
    // Optionally destroy the session if needed
    // session_destroy();
}

// Initialize the search variable
$search = '';

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Clean the input value
    $search = htmlspecialchars(trim($_POST['search']));

    // Process the search (e.g., database query) here
    // ...

    // Redirect to the same page to clear the input value on refresh
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Example</title>
</head>
<body>
    <form method="POST" action="">
        <input type="text" name="search" value="" placeholder="Search...">
        <input type="submit" value="Submit">
    </form>
    <?php 
    echo $search
    ;?>
</body>
</html>
