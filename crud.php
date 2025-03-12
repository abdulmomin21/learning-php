<?php
session_start(); // Start session to store submission status

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['form_submitted'] = true; // Store status in session
    header("Location: crud.php"); // Redirect to prevent form resubmission
    exit();
}

// Display message if form was submitted
if (isset($_SESSION['form_submitted'])) {
    echo "ok";
    unset($_SESSION['form_submitted']); // Remove message after showing it
}
?>
<form action="crud.php" method="POST">
    Firstname:<br>
    <input type="text" name="firstname"><br><br>

    Lastname:<br>
    <input type="text" name="lastname"><br><br>

    Email:<br>
    <input type="email" name="email"><br><br>

    <button type="submit">Submit</button>
</form>
