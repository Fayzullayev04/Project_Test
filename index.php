<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registration-1111</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "signupdb";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }   
    ?>
    <div>
        <h2>
            <u>Registration Form</u>
        </h2>
    </div>

    <div class="main">
        <form action="create_user.php" method='POST'>
            <label for="fname">First Name:</label>
            <input class="one" type="text" id="fname one" name="fname" placeholder="Enter your first name"> <br>
            
            <label for="fname">Last Name:</label>
            <input class="one" type="text" id="lname one" name="lname" placeholder="Enter your last name"> <br>
            
            <label for="email">Email:</label>
            <input class="one" type="email" id="email one" name="email" placeholder="It should contain @," autocomplete="off"> <br>

            <label for="mobile">Mobile:</label>
            <input class="one" type="tel" id="mobile one" name="mobile" placeholder="only 14 digits are allowed" maxlength="14"> <br>

            <label for="Gender">Gender:</label>
            
            <input type="radio" id="male" name="gender" value="Male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="Female">
            <label for="female">Female</label> <br>

            <label for="birth">Date Of Birth:</label>
            <input class="one" type="date" id="birth one" name="birth" placeholder="mm/dd/yyyy"> <br>

            <label for="address">Address:</label>
            <input class="one two" type="text" id="address one" name="address" > <br>

            <label for="city">City:</label>
            <input class="one" type="text" id="city" name="city"> <br>

            <label for="birth">Area PIN:</label>
            <input class="one" type="text" id="PIN" name="PIN"> <br>

            <label for="state">State:</label>
            <input class="one" type="text" id="state" name="state" > <br>

            <label for="qualification">Qualification:</label>
            
            <?php 
        $sql = "SELECT  * FROM `qualification`;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        // output data of each row
        echo "<select class='three' name='qualification' id='qualification'><option selected>---qualificationni tanlang!---</option>";
        while($row = $result->fetch_assoc()) {
          echo "<option value=". $row["id"].">" . $row["name"]. "</option>";  
        }
      } else {
        echo "0 results";
      }
      echo "</select><br>";
?> 

            <label for="specialization">Specialization:</label><br>
            <?php 
        $sql = "SELECT  * FROM `speciality`;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "<input type='checkbox' id='checkbox' name='specialization' value=".$row["id"].">" . $row["name"]."<br>";
        }
      } else {
        echo "0 results";
      }
      echo "</select><br>";
?>

            <label for="password">Password:</label>
            <input class="one" type="password" id="password one" name="password"> <br>

            <input class="register" type="submit" id="submit" name="submit" value="Registered">
        </form>
    </div>








    
    
  

    






</body>
</html>
