<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
 <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
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
        <ul class="sf-menu" id="nav">
            
              <li><a href="index.php">Home</a></li>
          
         
              <li><a href="adminlogin.php">Admin Login</a></li>
			   <li><a href="userlogin.php">Student Login</a></li>
                            
                
                   <li><a href="Register.php">Student Registration</a></li>
			 
          </ul>
        </div>
      </nav>
    </header>
    <div id="site_content">
    <div id="sidebar_container">
    <!--    <img class="paperclip" src="images/paperclip.png" alt="paperclip" /> -->
	<br> <br> <br> <br><br>
        <div class="sidebar">
         
		  <br>
		  <img src="images/administration Icon.png" width="90%" style="margin-left:15px; ">
		  <br> <br>
        
        </div>
		<!--
        <img class="paperclip" src="images/paperclip.png" alt="paperclip" />
        <div class="sidebar">

		  <br> 
		  <img src="images/images.jpeg" width="90%" style="margin-left:15px; border-radius:8px; border:3px solid #FF9933;">
		  <br> <br>
        </div> -->
      </div>
      <div class="content">
	  <br>  <br> <br>     
        
		<div class="loginhead">
		<h2 style="padding:7px 20px 6px 20px; text-align:center; font-family:'Yanone Kaffeesatz', arial, sans-serif;   text-shadow: 1px 1px #7E4D0E;   text-decoration: none;   color: #FFF;  margin-right: 2px;">Student Login </h2>
		</div>
		<div class="login" style="height:300px">
		<center>
		<br /><br />
		<form name="f1" method="post" action="logdata.php">
		<table width="90%" border="0" height="200px">
          <tr>
            <td>User Name </td>
            <td><label>
              <input name="uname" type="text" class="txt" id="uname" />
            </label></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input name="pass" type="password" class="txt" id="pass" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><label>
              <input name="Submit" type="submit" class="lgnbtn" value="Submit" />
            </label></td>
          </tr>
         
        </table></form>
		<br>
		<center>
		     
		
		 
                    
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
</body>
</html>
