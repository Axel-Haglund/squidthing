<?php
// Get values

$email = $_POST["email"];
$password = $_POST["password"];
$name = $_POST["name"];

show($_POST);

// split name into first and last name
$names = explode(" ", $name);
$first_name = $names[0];
$last_name = $names[1];


// Database connection
$hostname = "localhost";
$username = "root";
$databasePassword = "";
$database = "laboration";

$connection = mysqli_connect($hostname, $username, $databasePassword, $database);

// Encrypt password
$passwordHash = password_hash($password, PASSWORD_DEFAULT);

// skickar in registrerad data till sql
$query = "INSERT INTO member (password_hash, email, first_name, last_name) VALUES('{$passwordHash}', '{$email}', '{$first_name}', '{$last_name}')";

$result  = mysqli_query($connection, $query);

echo   $query;



// functions
function show($variable)
{
    echo "<pre>";
    echo var_dump($variable);
    echo "</pre>";
}
