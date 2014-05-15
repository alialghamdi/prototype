<?php


$name = $_POST['username'];
$pass = $_POST['password'];
// Check username and password match
if ($name == "Omar") {
    header('Location: profile.php');
}
else if ($name == "Ali") {
    header('Location: chairman.php');
}
else {
    header('Location: advisor.php');
}
    
?>