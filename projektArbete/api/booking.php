<?php
require("../utility.php");
require("../db-connection.php");

echo "hello world! ";

$query = "INSERT INTO booking (first_name, last_name, email, description) VALUES ('Svante','Svensson','svante.svensson@example.com', 'en jätte beskrivande beskrivning som beskriver olika beskrivningar')";

$result = mysqli_query($connection, $query);

show($result);

header("Location: ..");
