<?php session_start();
$uname= $_SESSION['uname'];

?>
<html>

<head runat="server">
  <title>SMART STUDENT ATTENDANCE SYSTEM</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
        <style type="text/css">
            .style1
            {
                width: 10%;
            }
            .style2
            {
                width: 15%;
                color: #660066;
                font-weight: bold;
            }
            .style3
            {
                color: #660066;
                font-weight: bold;
            }
        .style4 {width: 10%; font-weight: bold; }
        .style5 {width: 15%; color: #0033CC; font-weight: bold; }
.style6 {
	color: #0033CC;
	font-weight: bold;
}
.style7 {color: #0033CC}
        </style>
</head>

<body>
    <form id="form1" runat="server">
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
          <ul class="sf-menu" id="nav">
             <li><a href="sprofile.php">Profile View</a>             
            </li>
			 <li><a href="sstaffview.php">View Staff</a></li> 
            <li><a href="sallocation.php">Allocation details</a></li> 
             <li><a href="sreview.php">Review Details</a></li>
			 
            <li><a href="index.php">Sign Out</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <div id="site_content">
    <div id="sidebar_container">
    <!--    <img class="paperclip" src="images/paperclip.png" alt="paperclip" /> -->
	<br> <br>  
        <br />
        <br />
        <!--<div class="sidebar">
         
		  <br>
		  <img src="images/admin_login_icon.png" width="90%" style="margin-left:15px; ">
		  <br> <br>
        
        </div> -->
		<!--
        <img class="paperclip" src="images/paperclip.png" alt="paperclip" />
        <div class="sidebar">

		  <br> 
		  <img src="images/images.jpeg" width="90%" style="margin-left:15px; border-radius:8px; border:3px solid #FF9933;">
		  <br> <br>
        </div> -->
      </div>
      <div class="content3" style="width:100%">
	  <br>  
		        <center>
		<div class="loginhead3" style="width:85%">

		 
		<h2 style="padding:7px 20px 6px 20px; text-align:center; font-family:'Yanone Kaffeesatz', arial, sans-serif;   text-shadow: 1px 1px #7E4D0E;   text-decoration: none;   color: #FFF;  margin-right: 2px;">Profile View</h2>
		</div>
		<div class="login3" style="width:85%">
		<br>
		<center>
	<?php
	include("db.php");
	$rs=mysql_query("select * from tb_student where ename='$uname' ");
$r=mysql_fetch_array($rs);
$im=$r['img1'];

?>
		<table width="95%" border="0" bgcolor="#FFFFFF"  style="margin-left:20px; height: 303px;">
  <tr>
    <td width="25%" class="style1"><strong> RegNo </strong></td>
    <td width="25%" height="55" class="style5"><?php echo $r['id'];?>     </td>
    <td width="25%"><strong>Department</strong></td>
    <td width="25%" height="55" class="style6"><?php echo $r['dep'];?>     </td>
  </tr>
  <tr>
    <td class="style4"> Name </td>
    <td height="55" class="style2"><span class="style6"><?php echo $r['ename'];?>     </span></td>
    <td><strong>Course</strong></td>
    <td class="style3"><span class="style7"><strong><?php echo $r['course'];?>
      
    </strong> </span></td>
  </tr>
  <tr>
    <td class="style4"  >Gender </td>
    <td class="style2">  <span class="style7"><?php echo $r['gender'];?></span> </td>
    <td><strong>Year</strong></td>
    <td class="style3"  ><span class="style7"><strong><?php echo $r['eyear'];?>
     
    </strong> </span></td>
  </tr>
  <tr>
    <td class="style4"  >Contact No</td>
    <td class="style2"> <span class="style7"><strong><?php echo $r['phone'];?>
    
                                
                </strong></span></td>
    <td colspan="2" rowspan="4"><strong>
      
    </strong>  
	  <?php echo "<a href=home/$im><img src=home/$im width=150 height=150></img></a>";?>	 </td>
    </tr>
  <tr>
    <td class="style4">Mail ID </td>
    <td class="style2"  ><span class="style7"><strong><?php echo $r['email'];?>
    
    </strong> </span></td>
    </tr>
  <tr>
    <td class="style4"  >Caste</td>
    <td class="style2"><span class="style7"><strong>
      <?php echo $r['cas'];?>
    </strong> </span></td>
  </tr>
</table>
<br> <br>
</center>

		</div>
      </div>
	  <br> <br> <br>
    </div>
	<br> <br> <br>
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
    </form>
</body>
</html>
