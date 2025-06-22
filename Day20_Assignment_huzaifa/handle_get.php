<?php
$name = $_GET['name'] ?? '';
$email = $_GET['email'] ?? '';
$phone = $_GET['phone'] ?? '';

$errors = [];

if (empty($name)) $errors[] = "Name is required.";
if (empty($email)) $errors[] = "Email is required.";
if (empty($phone)) $errors[] = "Phone is required.";

if (count($errors) > 0) {
    echo "<h3>Error(s):</h3><ul>";
    foreach ($errors as $error) {
        echo "<li>$error</li>";
    }
    echo "</ul>";
} else {
    echo "<h3>Submitted Data (GET Method):</h3>";
    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "Phone: $phone<br>";
}
?>
