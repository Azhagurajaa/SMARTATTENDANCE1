<?php
include("db.php");
$cid=$_REQUEST["id"];

 
 
$quy=mysqli_query($con,"delete from tb_student where id='$cid'");
echo "<script language='javascript'>location.href='studentview.php';</script>"; 
 

?>