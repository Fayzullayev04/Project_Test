<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "signupdb";
        
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $gender = $_POST['gender'];
        $birth = $_POST['birth'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $pin = $_POST['PIN'];
        $state = $_POST['state'];
        $qualification = $_POST['qualification'];
        $specialization = $_POST['specialization'];
        $pwd = $_POST['password'];
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        $sql2 = "INSERT INTO `user`(`first_name`, `last_name`, `phone_number`, `gender`, `date_of_birth`, `address`, `area_pin`, `city_id`, `qualification_id`, `email`, `password`) VALUES ('".$fname."','".$lname."','".$mobile."','".$gender."','".$birth."','".$address."','".$pin."','".$city."','".$qualification."','".$email."','".$pwd."');";
        $result2 = $conn->query($sql2);
        
        echo "malumot qushildi";
    
    }
?>
