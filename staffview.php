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
  <link  href="css/styletable.css" type="text/css" rel="stylesheet" />
 
<script type='text/javascript' src='js/slimtable.min.js'></script>
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

		 
		<h2 style="text-align:center; font-family:'Yanone Kaffeesatz', arial, sans-serif;   text-shadow: 1px 1px #7E4D0E;   text-decoration: none;   color: #FFF;  margin-right: 2px;">STAFF VIEW</h2>
		</div>
		<div class="login3" style="width:95%">
		<br>
		<center>
		<table width="100%" border="0" style="border-radius:4px;"  >
       
      <tr>
        <td>
		<center>
		<br />
		<form name="customer" action="studentdata.php" method="post" onsubmit="return validate()">
		 <table id='example1' class="bordered"  style="width:95%"  >
<thead>
<tr>
<th>Photo</th>
		<th>Staff ID</th>  
        <th>Student Name</th>	
		<th>Mail ID</th>	        
        <th>Phone</th>           
		<th>Department</th>
        <th></th>	
	 
		 
		 
</tr>
</thead>

<?php
$result=mysqli_query($con,"Select * from tb_staff ");
  
	while ($row = mysqli_fetch_array($result))
          {
		  $img=$row['photo']
		  ?>
		  <tbody>
 <tr>
  <td><span class="style11"><?php echo "<img src=home/$img width=80 height=80></img>";?></span></td>
 
        <td ><?php echo $row['id']; ?></td>        
        <td ><?php echo $row['sname']; ?></td>
		 <td ><?php echo $row['email']; ?></td>
		  
        <td ><?php echo $row['phone']; ?></td>
		<td ><?php echo $row['dep']; ?></td>
       <td align="center"><div align="center"><?php echo "<a href=delete.php?id=$row[id]>"; ?> <img src="images/delete.png" width=25 height=25/> </a>   </div></td>
		 
		
		</tr>
		</tbody> 
		 
	    
	<?php
	}
	?>				  
   

   
</tbody>
</table>
		
		
		 
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
