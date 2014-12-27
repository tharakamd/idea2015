<?php
session_start();
if (!(isset($_SESSION['username']) && ($_SESSION['username'] != ''))) {
    header("location:index.php");
}

$idletime = 60*15; //after 60*15 seconds the user gets logged out

if (time() - $_SESSION['timestamp'] > $idletime) {
    require 'logout.php';
} else {
    $_SESSION['timestamp'] = time();
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
<title>Idea Challenge | Downloads</title>
<meta charset="utf-8">
<link rel="icon" type="image/png" href="images/favicon.png">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="css/style5.css" />
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />
<script type="text/javascript" src="js/jquery-1.6.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Swis721_Cn_BT_400.font.js"></script>
<script type="text/javascript" src="js/Swis721_Cn_BT_700.font.js"></script>
<script type="text/javascript" src="js/tabs.js"></script>

  <!--[if lt IE 9]>
  	<script type="text/javascript" src="js/html5.js"></script>
	<style type="text/css">
		.bg{ behavior: url(js/PIE.htc); }
	</style>
  <![endif]-->
	<!--[if lt IE 7]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0"  alt="" /></a>
		</div>
	<![endif]-->

</head>

<body id="download_page">
	<div class="body1">
	<div class="body2">
	<div class="body5">
		<div class="main">
<!-- header -->
			<header>
				<div class="wrapper">
				<h1><a href="idea_challange_home.php" id="logo">Progress Business Company</a></h1>
				<nav>
					<ul id="menu">
                                        <li id="nav1"><a href="idea_challange_home.php">Home<span>Welcome!</span></a></li>
                                        <li id="nav2"><a href="about_idea_challenge.php">About<span>Idea Challenge</span></a></li>
                                        <li id="nav3"><a href="video_gallery.php">Video<span>Lectures</span></a></li>
                                        <li id="nav4"><a href="register_idea_challange.php">Register<span>Now</span></a></li>
                                        <li id="nav5"><a href="Contacts.php">Contact<span>Us</span></a></li>
                                    </ul>
				</nav>
				</div>
			</header>
<!-- header end-->
		</div>
	</div>
	</div>
	</div>
	<div class="body3">
	
<div id="content3">
    <h3 style="margin-left: 110px;">Welcome <?php echo $_SESSION['username'] ?> </h3>
    <br/>
    <h3 style="margin-left:10px;">Download Idea Challenge Spread Sheet.</h3>
			
            
        		<div style="margin-left:60px" class="button-wrapper btn_algn">
				<?php echo	'<a style="text-decoration:none" href="generate_excel.php?name=' .$_SESSION['username'] . '" class="a-btn">' ?>
						<span class="a-btn-symbol">Z</span>
						<span class="a-btn-text">Click To Download</span> 
						<span class="a-btn-slide-text">Idea Challenge - 2013</span>
						<span class="a-btn-slide-icon"></span>
					</a>					
				</div>
                
		</div>
            
      
	</div>
	
<script type="text/javascript"> Cufon.now(); </script>
<script>
	$(document).ready(function() {
		tabs.init();
	})
</script>
</body>
</html>