<html>
<head>
  <style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
  border: 1px solid black;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
</head>
<body><br><br><br>
<h1 align="center">CONTRACT BASED EMPLOYEE DETAILS</h1>
<?php 
include("config.php");
$query = "SELECT * FROM register";
$result = mysqli_query($tcil,$query);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
  echo "<table><tr><th>S.NO</th><th>NAME</th><th>CONTRACT(in years)</th><th>DOJ</th><th>DEND</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row["S. NO"]."</td><td>".$row["NAME"]."</td><td>".$row["PERIOD"]."</td><td>".$row["DOJ"]."</td><td>".$row["DEND"]."</td></td></tr>";
    }
    echo "</table>";
    }
else {
    echo "0 results";
}
?>
</body>
</html>