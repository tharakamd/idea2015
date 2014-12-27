<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
        <title>Idea Challenge | Contact Us</title>
        <meta charset="utf-8">
		<link rel="icon" type="image/png" href="images/favicon.png">
        <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
        <link rel="stylesheet" type="text/css" href="Contact_Us/css/bootstrap2.css">
        <link rel="stylesheet" type="text/css" href="Contact_Us/css/style_contact.css">
        <link href='http://fonts.googleapis.com/css?family=Headland+One|Open+Sans:400,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'> <!-- Used for popup -->
        <link rel="stylesheet" href="./popup/css/reset_popup.css"> <!-- Used for popup -->
        <link rel="stylesheet" href="./popup/css/style_popup.css"> <!-- Used for popup -->
        <link rel="stylesheet" href="./popup/css/avgrund.css"> <!-- Used for popup -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script type="text/javascript" src="Contact_Us/js/contactus_action.js"></script>
        <script type="text/javascript" src="Contact_Us/js/jquery.validate.min.js"></script>
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
    <body id="page5" style="background-color: #000">
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
                                        <li id="nav4" class="active"><a href="Contacts.php">Contact<span>Us</span></a></li>
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
            <div class="main">
                <!-- content -->
                <article id="content">
                    <div class="wrapper">
                        <section class="col1">
                            <h2 class="under">Contact Us</h2>
                            <form  method="post" id="register-form" novalidate="novalidate" action="sendmail.php" autocomplete="off">
                                <fieldset>

                                    <div class="fieldgroup">
                                        <label id="lbl_font" for="firstname">Name</label>
                                        <input type="text" name="name">
                                    </div>

                                    <div class="fieldgroup">
                                        <label id="lbl_font" for="lastname">Mobile</label>
                                        <input placeholder="Eg :- 0712345678" type="text" name="mobile">
                                    </div>

                                    <div class="fieldgroup">
                                        <label id="lbl_font" for="email">Email</label>
                                        <input placeholder="Eg :- ideachallenge2013@gmail.com" type="text" name="email">
                                    </div>

                                    <div class="fieldgroup">
                                        <label id="lbl_font" for="firstname">Subject</label>
                                        <input type="text" name="subject">
                                    </div>

                                    <div class="fieldgroup2" style="boader:solid 1px;">
                                        <label id="lbl_font" for="password">Message</label> 
                                        <textarea style="resize: none; margin-left:125px;" name="message" placeholder="Describe Your Matter Here.." rows="4" cols="70" ></textarea>
                                    </div>

                                    <div class="fieldgroup">
                                        <input type="submit" value="Send Now" class="submit"> 
                                    </div>

                                </fieldset>
                            </form>
                        </section>
                        <section class="col2 pad_left1">
                            <h2 class="under">For More Info</h2>
                            <div id="address"><span>Vijayindu:<br>
                                    Vidudaya:<br>
                                    Rashmi:<br>
                                    Tiroshan:</span>
                                0718082232<br>
                                0713269771<br>
                                0777387222<br>
                                0771348319<br>
                                <a href="mailto:" class="color2">svijayindu@gmail.com</a><br>
                            <a href="mailto:" class="color2">vnbandara@gmail.com</a><br>
                            <a href="mailto:" class="color2">rashmi.woranga@gmail.com</a><br>
                            <a href="mailto:" class="color2">tiroshanm@gmail.com</a></div>                            
                        </section>
                    </div>

                </article>
            </div>
        </div>


        <!--        Java Script For The Validation Goes Here-->

        <div id="show"></div>

        <?php
        error_reporting(0);

        $recordAdded = FALSE;

        if (($_GET['status'] == 1) && (isset($_GET['status']))) {
            $recordAdded = TRUE;
        }

        if ($recordAdded) {
            echo "
       <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
	<script src=\"./popup/js/jquery.avgrund.js\"></script>
	<script>
	$(function() {
		$('#show').avgrund({
			width: 640, // max is 640px
			height: 350, // max is 350px
			holderClass: 'custom',
			showClose: true,
			showCloseText: 'Close',
			openOnEvent: false,
			enableStackAnimation: true,
			closeByEscape: true, // enables closing popup by 'Esc'..
			closeByDocument: true, // ..and by clicking document itself
			template: '<p>Thank You For Contacting Us. Our Member Will Contact You Soon. </p>' +
			'<div>' +
                        '<br/>'+
                        '<br/>'+
			'<a href=\"video gallery.php\"  class=\"github\">Have a Video Lectuer Now</a>' +
			'<a href=\"idea_challange_home.php\"  class=\"dribble\">Go to Home</a>' +
			'<a href=\"about_idea_challenge.php\"  class=\"twitter\">About IC 2013</a>' +
			'</div>'
		});
	});
	</script>";
        }
        ?>


       <div class="body4">
            <div class="main">
                <article id="content2">
                    <div class="wrapper">
                        <section class="col3">
                            <h4>Why IC?</h4>
                            <ul class="list1">
                                <li>Show Your Talents</li>
                                <li>Unbelievable Prizes</li>
                                <li>Best Experience Ever</li>
                                <li>Take This Opportunity</li>
                            </ul>
                        </section>
                        <section class="col3 pad_left2">
                            <h4>Address</h4>
                            <ul class="address">
                                <li><span>Country:</span>Sri Lanka</li>
                                <li><span>City:</span>Moratuwa</li>
                                <li><span>Phone:</span>011-2640382</li>
                            </ul>
                        </section>
                        <section class="col3 pad_left2">
                            <h4>Follow Us</h4>
                            <ul id="icons">
                                <li><a href="https://www.facebook.com/IeslIdeaChallenge"><img src="images/icon1.jpg" alt="">Facebook</a></li>
                                <li><a href="https://twitter.com/Idea_Challenge1"><img src="images/icon2.jpg" alt="">Twitter</a></li>
                            </ul>
                        </section>
                        <section class="col2 right">
                            <h4>Newsletter</h4>
                            <form id="newsletter" action="http://idea2013.us4.list-manage.com/subscribe/post?u=28d240dac795f97995da68923&amp;id=0fc0aad3d8" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                <div>
                                    <div class="wrapper">
                                        <input class="input" placeholder="Type Your Email Here" type="email" value="" name="EMAIL" onblur="if(this.value=='') this.value='Type Your Email Here'" onfocus="if(this.value =='Type Your Email Here' ) this.value=''" >
                                    </div>
                                    <a href="#" class="button" name="subscribe" id="mc-embedded-subscribe" onclick="document.getElementById('newsletter').submit()">Subscribe</a>
                                </div>
                            </form>
                        </section>
                    </div>
                </article>
                <!-- content end -->
            </div>
        </div>
        <div class="main">
            <!-- footer -->
            <footer>
                <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="3" direction="left">Copyrights Reserved &#169; <a href="http://www.cse.mrt.ac.lk/">Department of Computer Science and Engineering</a> University of Moratuwa. | Template Design by <a href="https://www.facebook.com/kasun.chamika">Chamika Kasun</a></marquee>
            </footer>
            <!-- footer end -->
        </div>
        <script type="text/javascript"> Cufon.now(); </script>
    </body>
</html>