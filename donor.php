<?php
include 'db_connect.php';

$insert = false;
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $blood_group = $_POST['blood_group']; 
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $other = $_POST['other'];

    $sql = "INSERT INTO `donors` (`name`, `age`, `gender`, `blood_group`, `email`, `phone`, `other`, `dt`) 
            VALUES ('$name', '$age', '$gender', '$blood_group', '$email', '$phone', '$other', current_timestamp());";

    if ($con->query($sql) == true) {
        $insert = true;
    } else {
        echo "ERROR: $sql <br> $con->error";
    }
}

$con->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Blood Donation Registration</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <div class="main-nav">
      <a href="index.html" class="logo">
        Haemoglobal
        <img src="logo.png" alt="Logo">
    </a>
      <ul>
        <li><a href="index.html">about us</a></li>
        <li><a href="donor.php">register as donor</a></li>
        <li><a href="needblood.php">need blood</a></li>
      </ul>
    </div>
  </header>
    <img class="bg" src="bg.png" alt="blood donation poster">
    <br>
    <br>
    <br>
    <div class='container'>
        <h1>Welcome to Blood Donation Registration</h1>
        <p>Enter your details and submit this form to confirm your participation in the registration</p>
       
        <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to register you as our donor</p>";
        }
    ?>
        <form action="donor.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="text" name="blood_group" id="blood_group" placeholder="Enter your blood group">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="other" id="other" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button> 
        </form>

    </div>
    <script src="index.js"> </script>
</body>
</html>