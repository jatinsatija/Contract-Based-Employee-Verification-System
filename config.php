<?php
   define('DB_SERVER', 'localhost:3304');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'tcil');
   $tcil = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
if($tcil === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>