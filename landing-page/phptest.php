<?php

        if (isset($_POST['submit'])) {
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
            
        }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
        <?php
        if (isset($_POST['submit'])) {
            ?>
                <span>record successfully added!</span>
            <?php
        }
        ?>
      <form method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" placeholder="Enter your first name" name ="firstname" required>
          </div>
          <div class="input-box">
            <span class="details">Last name</span>
            <input type="text" placeholder="Enter your last name" name ="lastname" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" name ="Email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" name ="PhoneNumber" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Enter your password" name ="password" required>
          </div>
        </div>
        <input class"file-upload-input" type ="file" onchange = "readURL(this)" accept="image/*">
        <div class="button">
          <input type="submit" value="Register" name="submit">
        </div>
      </form>
    </div>
  </div>

</body>
</html>

