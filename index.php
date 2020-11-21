<?php
include("config.php");

if($_SERVER["REQUEST_METHOD"] == "POST") 
  {
    $username = mysqli_real_escape_string($tcil, $_POST['USERNAME']);
    $password = mysqli_real_escape_string($tcil, $_POST['PASSWORD']);
    $cpassword= $_POST['CPASSWORD'];

    if($cpassword==$password){

      $query1 = "SELECT id FROM login WHERE username = '$username'";
      $result = mysqli_query($tcil,$query1);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count==1){
        echo "<script type='text/javascript'>alert('Username already exists.');</script>";
      }
      else{

        $query2 = "INSERT INTO login (username, password) 
        VALUES('$username', '$password')";
        mysqli_query($tcil, $query2);
        echo"<script type='text/javascript'>
        alert('Signup Successful');
        window.location='index2.php';
        </script>";

      }
    }
    else{
      $succ = "PASSWORDS DONT MATCH";
        echo "<script type='text/javascript'>alert('$succ');</script>";
    }   
  }
  

  

?>
<!DOCTYPE html>
<html>
<head>
  <title>SIGNUP PAGE</title>
  <style type="text/css">
    {
  box-sizing: border-box;
}

body {
  background: #333;
}

.centered {
  width: 550px;
  height: 110px;
  margin: auto;
 /* position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;*/
}

.group {
  width: 60%;
  height: 110px;
  overflow: hidden;
  position: relative;
  margin: auto;
}

label {
  position: absolute;
  top: 36.66667px;
  color: rgba(255, 255, 255, 0.5);
  font: 400 36.66667px Roboto;
  cursor: text;
  transition: .25s ease;
}

input {
  display: block;
  width: 100%;
  padding-top: 36.66667px;
  border: none;
  border-radius: 0;
  color: white;
  background: #333;
  font-size: 36.66667px;
  transition: .3s ease;
}
input:valid ~ label {
  top: 0;
  font: 700 22px Roboto;
  color: rgba(255, 255, 255, 0.5);
}
input:focus {
  outline: none;
}
input:focus ~ label {
  top: 0;
  font: 700 22px Roboto;
  color: #2196f3;
}
input:focus ~ .bar:before {
  transform: translateX(0);
}
input:-webkit-autofill {
  -webkit-box-shadow: 0 0 0px 1000px #333 inset;
  -webkit-text-fill-color: white !important;
}

.bar {
  background: rgba(255, 255, 255, 0.5);
  content: '';
  width: 550px;
  height: 3.66667px;
  transition: .3s ease;
  position: relative;
}
.bar:before {
  content: '';
  position: absolute;
  width: 20%;
  height: 15%;
  background: #2196f3;
  transform: translateX(-100%);
}

::selection {
  background: rgba(33, 150, 243, 0.3);
}


.centered1 {
  width: 550px;
  height: 95px;
  margin: auto;
  /*position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;*/
  }

.group1 {
  width: 60%;
  height: 95px;
  overflow: hidden;
  position: relative;


.but {
  background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}

  </style>>
</head>
<body>
 
  <div align="center">
  <img src="https://www.freshersvoice.com/wp-content/uploads/2017/09/TCIL-Recruitment.gif">
</div>
  <h1 style="color: rgba(255, 255, 255, 0.5)" align="center">SIGNUP PAGE</h1>
  <form action="" method="post" >
    <div class="centered" style="border-color: white;border-style: solid; ">
  <div class="group">
    <input type="text" name="USERNAME" required="required">
    <label for="name">Username</label>
    <div class="bar"></div>
  </div>
</div>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script><br><br>
    <div class="centered">
  <div class="centered" style="border-color: white;border-style: solid; ">
  <div class="group">
    <input type="PASSWORD" name="PASSWORD" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
    <label for="name">Password</label>
    <div class="bar"></div>
  </div>

  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script><br><br>
   <div class="centered" style="border-color: white;border-style: solid; ">
  <div class="group">
    <input type="PASSWORD" name="CPASSWORD"  required="required">
    <label for="name">Confirm Password</label>
    <div class="bar"></div>
  </div>
</div>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script><br><br>
    <div class="centered">
    <input style=" background-color: white;
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 150px;
  cursor: pointer; width: 40% ;" type="Submit" name="submit"><br><br><br>
  <a style="margin-left: 50px;
  font-size: 30px;
  color: white;
  background-color: transparent;
  text-decoration: underline;" href="index2.php">ALREADY A USER ? LOGIN HERE</a>
  </form>
</div>
</div>
</body>
</html>