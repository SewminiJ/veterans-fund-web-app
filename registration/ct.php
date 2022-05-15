<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    try {
        $coaf=$_POST['coaf'];
        $ranks=$_POST['ranks'];
        $fullname=$_POST['fullname'];
        $Name_with_Initials=$_POST['Name_with_Initials'];
        $Service_Number=$_POST['Service_Number'];
        $Email=$_POST['Email'];
        $password = $_POST['password'];
        $Office_Addres=$_POST['Office_Addres'];
        $Personal_Address=$_POST['Personal_Address'];
        $DSD=$_POST['DSD'];
        $Date_Of_Birth=$_POST['Date_Of_Birth'];
        $Age_Of_Retirement=$_POST['Age_Of_Retirement'];
        $NIC=$_POST['NIC'];
        $RFR=$_POST['RFR'];
        $PhoneNumber=$_POST['Personal_Number'];
        $Annual_salary=$_POST['Annual_salary'];
        $Personal_Allowances=$_POST['Personal_Allowances'];
        $gender = $_POST['gender'];
        $MStatus = $_POST['MStatus'];
        $Pension = $_POST['Pension'];
        $C_detail = $_POST['C_detail'];
        




        $servername = "localhost";
        $username = "pamodith";
        $pass = "alex123";
        $dbname = "regform";

        // Create connection
        $conn = new mysqli($servername, $username, $pass, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("insert into `registration form` (coaf,ranks,fullname,Name_with_Initials,Service_Number,Email,password,Office_Addres,Personal_Address,DSD,Date_Of_Birth,Age_of_retirement,NIC,RFR,PhoneNumber,Annual_salary,Personal_Allowances,gender,MStatus,Pension,C_detail) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssssssiiiisiiissss",$coaf,$ranks,$fullname,$Name_with_Initials,$Service_Number,$Email,$password,$Office_Addres,$Personal_Address,$DSD,$Date_Of_Birth,$Age_of_retirement,$NIC,$RFR,$PhoneNumber,$Annual_salary,$Personal_Allowances,$gender,$MStatus,$Pension,$C_detail);

        $stmt->execute();
        $stmt->close();

        $conn->close();
    } catch (Exception $e) {
        print_r($e);
        die();
    }

?>