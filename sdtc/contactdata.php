<?php
echo"hi";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST["name"];
    $contact = $_POST["number"];
    $email = $_POST["email"];
    $msg = $_POST["message"];




    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "silver";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT into contact(name, number,email,message) VALUES('$name','$contact','$email','$msg')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


}
?>