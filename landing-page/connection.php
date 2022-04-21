<?php
    try {
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $Email=$_POST['Email'];
        $PhoneNumber=$_POST['PhoneNumber']; 
        $password = $_POST['password'];

        $servername = "localhost";
        $username = "pamodith";
        $pass = "alex123";
        $dbname = "test";

        // Create connection
        $conn = new mysqli($servername, $username, $pass, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("insert into `registration_form` (name,password) values (?,?)");
        $stmt->bind_param("ss", $firstname, $password);

        $stmt->execute();
        $stmt->close();

        $conn->close();
    } catch (Exception $e) {
        print_r($e);
        die();
    }

?>
