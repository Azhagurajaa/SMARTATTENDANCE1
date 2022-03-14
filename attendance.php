 <?php 
  include("db.php");
 
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
  <script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>

  <link rel="stylesheet" type="text/css" href="tcal.css" />
<script type="text/javascript" src="tcal.js"></script> 

</head>

<body>
<form name="f1" action="attdata.php" enctype="multipart/form-data" method="post">
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

		 
		<h2 style="text-align:center; font-family:'Yanone Kaffeesatz', arial, sans-serif;   text-shadow: 1px 1px #7E4D0E;   text-decoration: none;   color: #FFF;  margin-right: 2px;">Attendance</h2>
		</div>
		<div class="login3" style="width:95%">
		<br>
		<center>
		<table width="100%" border="0" style="border-radius:4px;"  >
       
      <tr>
        <td>
		<center>
		<br />
		<table width="50%" border="0" height="430px"  >
  <tr>
    <td>Review ID</td>
    <td>
	 <select  name="jobs" class="text"  onchange="MM_jumpMenu('parent',this,0)">
	 <option>Select Reg</option>
		 <?php
		  
			  $q5=mysql_query("select * from tb_student");
				while($r=mysql_fetch_assoc($q5))

			{
				 echo "<option value=attendance.php?id=".$r['id'].">".$r['id']."</option>";
								}
								$id=$_REQUEST['id'];

			
		 
		   ?>	
	 </select>
	   <?php $result = mysql_query("SELECT * FROM tb_student where id='$id' ");
$row1= mysql_fetch_array($result);
?>
	</td>
       
    
	 
  </tr>
   <tr>
    <td> Register No </td>
    <td><input name="id" type="text"  class="txt"  id="id"  value="<?php echo $row1['id'];?>"/></td>
    
  </tr>
  <tr>
    <td> Name </td>
    <td><input name="cname" type="text"  class="txt"  id="cname"  value="<?php echo $row1['ename'];?>"/></td>
    
  </tr>
  
  <tr>
  <td>Department</td>
    <td><input name="dep" type="text"   id="dep"   class="txt"   value="<?php echo $row1['dep'];?>"/></td>
	  
	</tr>
	  <tr>
    <td> Course </td>
    <td><input name="course" type="text"  class="txt"  id="course"  value="<?php echo $row1['course'];?>"/></td>
    
  </tr>
   <tr>
    <td> Date</td>
    <td><input name="edate" type="text" class="tcal" id="edate"  size="15"     /></td>
    
  </tr>
	 <tr>
  <td>Attendance</td>
    <td>	<select  name="att" class="txt"  >
	 <option>Select Attendance</option>
	 <option>Present</option>
	 <option>Absent</option>
		
	 </select></td>
	  
	</tr>
   
  
	<tr>
		  <td align="center" colspan="2">
		   <input name="save" type="submit" value="Save" class="lgnbtn" />
		  <input name="save" type="submit" value="Clear" class="lgnbtn" />
		  </td>
		  </tr>
   
</table>
  
<br> <br>
</center>

		</div>
    
        

        
      </div>
    </div>
     
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
