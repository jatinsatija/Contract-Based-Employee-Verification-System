<?php
include("config.php");

if($_SERVER["REQUEST_METHOD"] == "POST") 
  {
  $NAME = mysqli_real_escape_string($tcil, $_POST['NAME']);
  $PERIOD = mysqli_real_escape_string($tcil, $_POST['CP']);
  $DOJ = mysqli_real_escape_string($tcil, $_POST['JD']);
  $DEND = mysqli_real_escape_string($tcil, $_POST['ED']);    
  	
    $query = "INSERT INTO register (NAME,PERIOD,DOJ,DEND) 
  			  VALUES('$NAME', '$PERIOD','$DOJ','$DEND')";
  	mysqli_query($tcil, $query);
    $succ = "DETAILS UPDATED";
        echo "<script type='text/javascript'>alert('$succ');</script>";
   
  	}

  

?>
<!DOCTYPE html>

<html>
<head>
  <title>CONTRACT FORM</title>
</head>
<body style=" background: #333"><div  align="center"  style="margin-top: 100px; background: #333; border-color: white;border-width: 5px; border-style: solid;  margin-left: 350px; margin-right: 350px; margin-bottom: 1px">
  <br><br>
  <div align="center">
  <img src="https://www.freshersvoice.com/wp-content/uploads/2017/09/TCIL-Recruitment.gif">
</div>
  <h1 style="color: rgba(255, 255, 255, 0.5)" align="center">CONTRACT FORM</h1>
  <div align="center">
  <form action="" method="post" style="color: rgba(255, 255, 255, 0.5)">
    <label style="margin-left: -9px">NAME:</label>
    <input type="text" name="NAME" required><br><br>
    <label style="margin-left: -110px">CONTRACT PERIOD:</label>
    <select name="CP"><option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option></select>  <br><br>
    <label style="margin-left: -85px">JOINING DATE:</label>
    <input type="DATE" name="JD" required><br><br>
    <label style="margin-left: -83px">EXPIRY DATE:</label>
    <input type="DATE" name="ED" required><br><br>
    <input type="Submit" name="submit"><br><br><br>
    <a style="margin-left: 50px;
  font-size: 20px;
  color: white;
  background-color: transparent;
  text-decoration: underline;" href="index4.php">CLICK HERE TO GENERATE REPORT ---></a><br><br>
  </form>
</div>
</div>
</body>
</html>
