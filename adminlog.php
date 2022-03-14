<?php session_start();
include("db.php");
$uname=$_POST["uname"];
$pass=$_POST["pass"];
 
if($uname=="Admin" && $pass=="12345")
{
	 
  
  
 header("location:Adminhome.php");
}

 
else
{
header("Location:index.php?a=Invalid user Try again");
}
?>


 