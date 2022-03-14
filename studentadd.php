 <?php 
  include("db.php");
  $qry="SELECT id FROM tb_student ORDER BY id DESC";
  $set=mysqli_query($con,$qry);
  $data=mysqli_fetch_assoc($set);
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

		 
		<h2 style="text-align:center; font-family:'Yanone Kaffeesatz', arial, sans-serif;   text-shadow: 1px 1px #7E4D0E;   text-decoration: none;   color: #FFF;  margin-right: 2px;">Student Add</h2>
		</div>
		<div class="login3" style="width:95%">
		<br>
		<center>
		<table width="100%" border="0" style="border-radius:4px;"  >
       
      <tr>
        <td>
		<center>
		<br />
		<form name="myform" method="post" onsubmit="return validateform()"  action="studentdata.php"  enctype="multipart/form-data" >
		<table width="90%" border="0" height="230px"  >
  <tr>
    <td>RegNo</td>
    <td> <input name="id" type="text" id="id"  class="txt"  value="<?php echo $id;?>" /></td>
      <td>Gender</td>
    <td>  <input name="gender" type="radio" value="Male" />Male
	 <input name="gender" type="radio" value="Female" />Female
	</td>
    
	 
  </tr>
  <tr>
    <td> Name </td>
    <td><input name="cname" type="text"  class="txt"  id="cname"/></td>
    <td>Department</td>
    <td> <select  name="dep" class="txt" >
	<option>Department</option>	
	<option>CSE</option>
	<option>Physics</option>
	<option>Chemistry</option>
 
	</select>
 
	</select></td>
    
  </tr>
  <tr>
     
    <td>Email ID </td>
    <td><input name="email" type="text"  class="txt"  id="email"/></td>
	  <td>Course</td>
    <td>  
	<select  name="course" class="txt" >
	<option>Select Course</option>
	<option>M.Phil</option>
	<option>Ph.D</option>
	 
	</select>
	</td>
	
  </tr>
   
  <tr>
  <td>Mobile No</td>
    <td><input name="phone" type="text"  class="txt"  id="phone" maxlength="10"/></td>
	 <td>Year</td>
    <td> <select  name="year" class="txt" >
		<option>Select Year</option>
		<option>2017-2028</option>
		<option>2018-2019</option>
		<option>2019-2020</option>
	 
	<option>2021-2022</option>
	<option>2022-2023</option>
 
	</select></td>
	
	</tr>
	<tr>
	<td>Password </td>
    <td><input name="pass" type="password"  class="txt"  id="pass"/></td> 
 
    <td>Upload Photo</td>
    <td><label>
     <input name="img1" type="file">
       
        </label></td>
  </tr>
  <tr>
	 
    <td>Guide Name</td>
    <td><label>
      <select  name="cat" class="txt" >
	 <option>Select Name</option>
		<?php
		  
			  $q5=mysqli_query($con,"select * from tb_staff");
				while($r=mysqli_fetch_assoc($q5))

			{
				 echo "<option>".$r['sname']."</option>";
								}
								 

			
		 
		   ?>	
 
	</select>
       
        </label></td>
  </tr>
	</tr>
   
</table>
		
		
		
		</center>
		</td>
      </tr>
	   
	  
	   
		  
		  <tr>
		  <td align="right">
		   <input name="save" type="submit" value="Save" class="lgnbtn" />
		  
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
