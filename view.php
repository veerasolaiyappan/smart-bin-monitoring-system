<?php
 include("connection.php");   
 // $link=Connection();
 $result=mysqli_query($con,"SELECT * FROM waste ORDER BY `timeStamp` DESC");
?>
<html>
   <head>
      <title>smart bin-1</title>
      <link rel="stylesheet" type="text/css" href="w3.css">
   </head>
<body>
    <div class="w3-container"> 
   <h1 style="text-align: center">Smart bin monitoring system</h1>
   <table class="w3-table-all w3-card-4 w3-hoverable w3-centered" border="1" cellspacing="1" cellpadding="1" >
 <tr>
 <td>&nbsp;timeStamp&nbsp;</td>
 <td>&nbsp;ID&nbsp;</td>
 <td>&nbsp;Distance&nbsp;</td> 
 <td>&nbsp;Status&nbsp;</td>
 </tr>
<?php 
  if($result!==FALSE){
     while($row = mysqli_fetch_array($result)) {
        printf("<tr><td> &nbsp;%s </td><td> &nbsp;%d&nbsp; </td><td> &nbsp;%d&nbsp; </td><td> &nbsp;%d&nbsp; </td></tr>", 
           $row["timestamp"], $row["id"], $row["distance"], $row["status"]);
     }
     mysqli_free_result($result);
     mysqli_close($con);
  }
      ?>
   </table>
   </div>
</body>
</html>
