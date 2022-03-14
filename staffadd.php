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

		 
		<h2 style=" text-align:center; font-family:'Yanone Kaffeesatz', arial, sans-serif;   text-shadow: 1px 1px #7E4D0E;   text-decoration: none;   color: #FFF;  margin-right: 2px;">Staff Add</h2>
		</div>
		<div class="login3" style="width:95%">
		<br>
		<center>
		<table width="100%" border="0" style="border-radius:4px;"  >
       
      <tr>
        <td>
		<center>
		<br />
		<form name="myform" method="post" onsubmit="return validateform()"  action="staffdata.php"  enctype="multipart/form-data" >
		<table width="50%" border="0" height="330px"  >
  <tr>
    <td>Staff ID</td>
    <td> <input name="id" type="text" id="id"  class="txt"  value="<?php echo $id;?>" /></td>
       
    
	 
  </tr>
  <tr>
    <td> Name </td>
    <td><input name="cname" type="text"  class="txt"  id="cname"/></td>
    
  </tr>
  <tr>
     
    <td>Email ID </td>
    <td><input name="email" type="text"  class="txt"  id="email"/></td>
	  
	
  </tr>
   
  <tr>
  <td>Mobile No</td>
    <td><input name="phone" type="text"  class="txt"  id="phone" maxlength="10"/></td>
	  
	</tr>
	<tr>
	<td>Department </td>
    <td><select  name="dep" class="txt" >
	<option>Department</option>	
	<option>CSE</option>
	<option>Physics</option>
	<option>Chemistry</option>
 
	</select></td> 
 
   
  </tr>
  <tr>
   <td>Upload Photo</td>
    <td><label>
     <input name="img1" type="file">
       
        </label></td>
  </tr>
  
	<tr>
		  <td align="center" colspan="2">
		   <input name="save" type="submit" value="Save" class="lgnbtn" />
		  <input name="save" type="submit" value="Clear" class="lgnbtn" />
		  </td>
		  </tr>
   
</table>
		
		
		
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
