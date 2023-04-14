<?php
echo "hello world \n";


// Get values
$email = $_POST["email"];
$password = $_POST["password"];

// Database connection
$hostname = "localhost";
$username = "root";
$password = "";
$database = "laboration";

$connection = mysqli_connect($hostname, $username, $password, $database);

// Verify member #_#
$query = "SELECT * FROM member WHERE email = '$email'";
$result = mysqli_query($connection, $query);
show($result);


$member = mysqli_fetch_assoc($result);

show($member);


// $_POST ['password'] är entered password och 
// member password_hash är lösenordet i databasen 

if (password_verify($_POST['password'], $member["password_hash"])) {
    echo "valid";
    show($_SESSION);
    session_start();
    $_SESSION["isLoggedIn"] = true;
    $_SESSION["loggedInMember"] = [
        "first_name" => $member["first_name"],
        "last_name" => $member["last_name"],
        "email" => $member["email"]
    ];
    show($_SESSION);
    header("location: ../protected-site.php");
} else {
    echo "invalid";
}

function show($variable)
{
    echo "<pre>";
    echo var_dump($variable);
    echo "</pre>";
}
