<?php

$server = "sql212.epizy.com";
$username = "epiz_29193666";
$password = "mfxZ6qjSOdR";
$dbname = "epiz_29193666_netauto_system";
 
$conn = mysqli_connect($server, $username, $password, $dbname);

if(!$conn){
  die("Connection Failed:".mysqli_connect_error());
}

?>