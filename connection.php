<?php
 // function Connection(){
 $server="localhost";
 $user="id5195535_veera";
 $pass="26011999";
 $db="id5195535_sensor";
 $con = mysqli_connect($server, $user, $pass, $db);
 if (!$con) {
     die('MySQL ERROR: ' . mysqli_error($con));
 }
 // mysql_select_db($db) or die( 'MySQL ERROR: '. mysql_error() );
 // return $connection;
 // }
?>
