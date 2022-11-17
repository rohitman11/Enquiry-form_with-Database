<?php
$insert=false;
if(isset($_POST['Name'])){
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con){
    die("connectoin to the database failed due to" .
    mysqli_connect_error());
}
//echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['Name'];
    $gender = $_POST['Gender'];
    $age = $_POST['Age'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO  `enquiry`.`details` ( `Name`, `Age`, `Gender`, `Email`, `Phone`, `Other`, `Date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    //echo $sql;

    if($con->query($sql) == true){
        //echo "Successfully inserted";
        $insert=true;
    }
    else{
        echo "Error: $sql <br> $con->error";
    }
    $con->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Enquiry Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="HMRITM" height="250">
    <div class="container">
        <h1>Welcome to HMR Institute Of Technology and Management Enquiry Form</h1>
        <p>Enter your details and submit this form to get information</p>
        <form action="index.php" method="post">
            <input type="text" name="Name" id="name" placeholder="Enter your name">
            <input type="text" name="Age" id="age" placeholder="Enter your Age">
            <input type="text" name="Gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="Email" id="email" placeholder="Enter your email">
            <input type="phone" name="Phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="5" placeholder="Your Enquiry here"></textarea>
            <button class="btn">Submit</button> 
        </form>
    </div>
  <!----INSERT INTO `info` (`S_No`, `Name`, `Age`, `Gender`, `Email`, `Phone`, `Other`, `Date`) VALUES ('1', 'sum', '2', 'm', 'kytrfcv', '666666666', 'this is my first dbms program', '2022-05-04 09:26:34.000000');-->
    
</body>
</html>