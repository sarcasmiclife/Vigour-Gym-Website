<?php
session_start();
include("db.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $username = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $locality = $_POST['locality'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    if (!empty($username) && !empty($age) && !empty($gender) && !empty($locality) && !empty($phone) && !empty($email))
    {
    $query = "insert into registration_users(name, age, gender, locality, phone, email) values('$username', '$age', '$gender', '$locality', '$phone', '$email')";
    mysqli_query($con, $query);
    echo "<script type='text/javascript'> alert('Registered successfully')</script>";
    }
    else{
        echo "<script type='text/javascript'> alert('Cannot register. Please add all the details.')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vigour Fitness</title>
</head>
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
<style>
    body{
        font-family: 'Baloo Bhai', cursive;
        margin: 0px;
        padding: 0px;
        background: url('bg.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        
        color: aliceblue;
    }
    .left{
        display: inline-block;
        position: absolute;
        left: 34px;
        top: 20px;
    }
    .mid{
        display: block;
        width:50%;
        margin: 40px auto;
    }
    .right{
        position: absolute;
        right: 34px;
        top: 20px;
        display: inline-block;
    }
    .navbar{
        display: inline-block;
    }
    .navbar li {
        display: inline-block;
        font-size: 25px;
    }

    .navbar li a {
        color: white;
        text-decoration: none;
        padding: 34px 18px;

    }

    .navbar li a:hover,
    .navbar li a.active {
        text-decoration: underline;
        color: grey;

    }
    .left img {
        width: 110px;
    }

    .left div {
        line-height: 19px;
        font-size: 22px;
        text-align: center;
    }
    .btn{
       color: white;
       font: 18px solid; 
       background: rgba(128, 128, 128, 0.829);
       margin: 0px 4px;
       padding: 8px 12px;
       border-radius: 10px;
       cursor: pointer;
    }
    .btn:hover{
        background-color: rgb(24, 23, 23); 
    }
    .container {
        background-image: linear-gradient(black, white);
        padding: 75px;
        width: 34%;
        border-radius: 28px;
        margin: auto;
    }
    .form-group input {
        font-family: 'Baloo Bhai', cursive;
        text-align: center;
        display: block;
        padding: 1px;
        border: 2px solid black;
        margin: auto;
        margin-bottom: 20px;
        font-size: 25px;
        border-radius: 8px;
    }
    .container button {
        display: block;
        width: 48%;
        margin: 20px auto;
    }
    .container h1{
        color: white;
        font-family:'Baloo Bhai', cursive;
        font-weight: bolder;
   }

</style>
<body>
    <header class ="header">
        <div class="left">
             <img src="gym.jpg">
             <div> Vigour Fitness</div>
        </div>
        <div class="mid">
            <ul class="navbar">
            <li><a href="#" class="active">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
        </div>
        <div class="right">
            <button class="btn">Call Us</button>
            <button class="btn">Email Us</button>
        </div>
        <div class="container">
            <h1 >Join the best gym of Delhi now</h1>
            <form method="POST">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Enter your Name">
                </div>
                <div class="form-group">
                    <input type="text" name="age" placeholder="Enter your Age">
                </div>
                <div class="form-group">
                    <input type="text" name="gender" placeholder="Enter your Gender">
                </div>
                <div class="form-group">
                    <input type="text" name="locality" placeholder="Enter your Locality">
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Enter your Email Id">
                </div>
                <div class="form-group">
                    <input type="text" name="phone" placeholder="Enter your Phone Number">
                </div>
                <button class="btn">Submit</button>
            </form>
        </div>
    </header>
    
</body>
</html>