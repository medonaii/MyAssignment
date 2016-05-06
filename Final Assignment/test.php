<?php
 $servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "";
    $database = "cupcake";
    $dbport = 3306;

// Create connection
$conn = new mysqli($servername, $username, $password);

// Create connection
    $db = new mysqli($servername, $username, $password, $database, $dbport);

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    } 
    echo "Connected successfully (".$db->host_info.")";
    
?>