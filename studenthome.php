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
        <img class="paperclip" src="images/paperclip.png" alt="paperclip" />
        <div class="sidebar">
          <!--<h3>Latest News</h3> -->
		  <br><br>
		  <img src="images/green.png" width="90%" style="margin-left:15px; border-radius:8px; border:3px solid #FF9933;">
		  <br> <br>
         <!--<h4>New Website Launched</h4>
          <h5>January 1st, 2012</h5>
          <p>2012 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
		  -->
        </div>
        <img class="paperclip" src="images/paperclip.png" alt="paperclip" />
        <div class="sidebar">
<!--          <h3>Useful Links</h3>
          <ul>
            <li><a href="#">First Link</a></li>
            <li><a href="#">Another Link</a></li>
            <li><a href="#">And Another</a></li>
            <li><a href="#">Last One</a></li>
          </ul>
		  -->
		  <br> 
		  <img src="images/images.jpeg" width="90%" style="margin-left:15px; border-radius:8px; border:3px solid #FF9933;">
		  <br> <br>
        </div>
      </div>
      <div class="content">
	  <table border="0" width="100%" height="500px">
	  <tr>
	  <td valign="top">
		<h2 style="font-weight:bold">WELCOME TO RESEARCH SCHOLARIP</h2>
	  </td>
	  </tr>
	  </table>
        
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
