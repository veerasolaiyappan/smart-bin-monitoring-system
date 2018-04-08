<?php
    include("connection.php");    
    // $link=Connection();
  // $timestamp= date(time());//$_GET["time"];
    date_default_timezone_set("asia/kolkata");
  $timestamp = date("Y-m-d h:i:s");
 $id=$_GET["id"];
 $distance=$_GET["distance"]; 
 $status=$_GET["stage"];
 echo "$id";
 echo "$distance";
 echo "$status";
 echo "$timestamp";
 if ($status==1) {
 	// $query = "INSERT INTO waste (`timestamp`,`id`, `distance`,`status`) VALUES ('".$timestamp."','".$id."','".$distance."','".$status."')";
 	$query = "INSERT INTO waste (`id`, `distance`, `status`) VALUES ($id, $distance, $status)";  
 	echo "<br>$query";   
    if(mysqli_query($con,$query))

 {
 //echo "inserted"; 
    $query2 = "SELECT link from address where id = (SELECT id from waste where status =1 )";
    $fetch = mysqli_query($con,$query2); 
    $data = array();
    for ($x = 0; $x < mysqli_num_rows($fetch); $x++) {
        $data[] = mysqli_fetch_assoc($fetch);
    }
$to       = '16ucse060@kamarajengg.edu.in';
$subject  = 'Testing sendmail.exe';
$message  = $data;
$headers  = 'From: veerasolaiyappan@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
if(mail($to, $subject, $message, $headers))
    echo "Email sent";
else
    echo "Email sending failed";
	
 mysqli_close($con);
}
}

// header("Location: way2sms.php");
 else{
 $query = "INSERT INTO waste (`id`, `distance`,`status`) VALUES ('".$id."','".$distance."','".$status."')";     
    mysqli_query($con,$query);
 mysqli_close($con);
    // header("Location: view.php");
}
?>

