 <?php 
  include("db.php");
   $qry="SELECT id FROM tb_staff ORDER BY id DESC";
  $set=mysql_query($qry);
  $data=mysql_fetch_assoc($set);
  $id1=$data['id'];
  $id=$id1+1; 
  ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
  <title>SMART STUDENT ATTENDANCE SYSTEM</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
  
  <script>  
function validateform(){  
var name=document.myform.cname.value;  
var email=document.myform.email.value; 
var phone=document.myform.phone.value;  
var pass=document.myform.pass.value;  
 
  
if(name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
}

if(email==null || email==""){  
  alert("Mail can't be blank");  
  return false;  
}
if(phone==null || phone==""){  
  alert("Phone can't be blank");  
  return false;  
}
 else if(pass.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }  
  
  
  
  
  
}  
</script>  
  
  
</head>

<body>
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_six", allows you to change the colour of the text -->
          <h1><a href="#">SMART STUDENT ATTENDANCE SYSTEM</a></h1>
          
        </div>
      </div>
      <nav>
        <div id="menu_container">
          <ul class="sf-menu" id="nav">   <li><a href="studentadd.php">Student Add</a></li> .			
			 <li><a href="attendance.php">Attendance</a></li> 
			  <li><a href="studentview.php">Student View</a></li> 
			   <li><a href="departmenta.php">Department Report</a></li>
			  <li><a href="attreport.php">Attendance Report</a></li>			
            <li><a href="index.php">Sign Out</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <div id="site_content">
       
     
	 <div class="content" style="width:100%">
	  <br>  
		        <center>
		<div class="loginhead3" style="width:95%">

		 
		<h2 style=" text-align:center; font-family:'Yanone Kaffeesatz', arial, sans-serif;   text-shadow: 1px 1px #7E4D0E;   text-decoration: none;   color: #FFF;  margin-right: 2px;"></h2>
		</div>
		<div class="login3" style="width:95%">
		<br>
		<center>
		<table width="100%" border="0" style="border-radius:4px;" height="250px"  >
       
      <tr>
        <td>
		<center>
		<br />
		<form name="myform" method="post" onsubmit="return validateform()"  action="staffdata.php"  enctype="multipart/form-data" >
		 <?php
include("db.php");
$cid=$_POST["id"];

$cname=$_POST["cname"];

$email=$_POST["email"];
$phone=$_POST["phone"];
$dep=$_POST["dep"];
 
$img=$_FILES["img1"]["name"];

 move_uploaded_file($_FILES["img1"]["tmp_name"],"home/" . $img); 


 
 
$quy=mysql_query("insert into tb_staff values('$cid','$cname','$email','$phone','$dep','$img')");
echo "<h2>Staff Added Successfully</h2>"; 
 

?>
		
		
		
		</center>
		</td>
      </tr>
	   
	  
	   
		  
		  
    </table>
		       
  
<br> <br>
</center>

		</div>
    
        

        
      </div>
    </div>
    <footer>
      <p> Copyright ©&nbsp;&nbsp; <a href="#"> 2020</a></p>
    </footer>
  </div>
  <p>&nbsp;</p>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>
