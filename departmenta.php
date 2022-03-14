 <?php 
  include("db.php");
   
  ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
  <title>RESEARCH SCHOLAR APPLICATION SYSTEM</title>
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
<form name="f1" method="post" action="departmenta.php">
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_six", allows you to change the colour of the text -->
          <h1><a href="#">RESEARCH SCHOLAR APPLICATION SYSTEM</a></h1>
          
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

		 
		<h2 style="text-align:center; font-family:'Yanone Kaffeesatz', arial, sans-serif;   text-shadow: 1px 1px #7E4D0E;   text-decoration: none;   color: #FFF;  margin-right: 2px;">ATTENDANCE VIEW</h2>
		</div>
		<div class="login3" style="width:95%">
		<br>
		<center>
		 <table width="50%" border="0">
  <tr>
    <td class="style3">Department</td>
    <td><select name="class" id="class">
                <option>Select Department</option>
			 <option>CSE</option>
	<option>Physics</option>
	<option>Chemistry</option>
          </select></td>
    <td> <input name="submit" type="submit" class="load-more-button" value="SEARCH"></td>
  </tr>
  
</table>

	</center>
	
	
	
	<br />
	 <?php
   if(isset($_POST['submit']))
{

    $class=$_POST["class"];
   
   
   ?>
  <table id='example1' class="bordered"  style="width:95%"  >
<thead>
<tr bgcolor="#0066FF">
    <td><span class="style9">REG NO </span></td>
    <td><span class="style9">NAME </span></td>	
    <td><span class="style9">CLASS</span></td>
	<td><span class="style9">SECTION</span></td>
	<td><span class="style9">Date</span></td>
    <td><span class="style9">Attendance</span></td>
    
	 
	
  		 
</tr>
</thead>


  <?php
  
  
  
  $sel=mysqli_query($con,"select * from tb_att where dep='$class' ") or die("Table Error");
						while($row=mysqli_fetch_array($sel))
						{
						 
						?>
  
		 
		  <tbody>
 <tr>
 
        <td ><?php echo $row['id']; ?></td>        
        <td ><?php echo $row['ename']; ?></td>
		 <td ><?php echo $row['dep']; ?></td>
		  
        <td ><?php echo $row['course']; ?></td>
		<td ><?php echo $row['edate']; ?></td>
       
		 <td ><?php echo $row['status']; ?></td>
       
		 
		 
		</tr>
		</tbody> 
		 
	    
	<?php
	}
	?>				 
		 
  
 </table>
<br />
<?php
}
?>
	
		
		 
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
