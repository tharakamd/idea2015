<!DOCTYPE html>
<html lang="en">
    <head>
		<link rel="icon" type="image/png" href="images/favicon.png">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
        <title>Idea Challenge | Register</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
        <link rel="stylesheet" type="text/css" href="register/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="register/register_css.css">
        <link href='http://fonts.googleapis.com/css?family=Headland+One|Open+Sans:400,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'> <!-- Used for popup -->
        <link rel="stylesheet" href="./popup/css/reset_popup.css"> <!-- Used for popup -->
        <link rel="stylesheet" href="./popup/css/style_popup.css"> <!-- Used for popup -->
        <link rel="stylesheet" href="./popup/css/avgrund.css"> <!-- Used for popup -->
        <link rel="stylesheet" type="text/css" href="search_content/css/bootstrap_search.css">
        <script>window.jQuery || document.write("<script src='search_content/js/jquery-1.8.2.min.js'>\x3C/script>")</script>
        <script type="text/javascript" src="search_content/js/bootstrap.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script> <!-- Used for popup -->
        <script type="text/javascript" src="register/jquery.validate.min.js"></script>
        <script type="text/javascript" src="register/formvalidate.js"></script>
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
                                        <li id="nav4" class="active"><a href="register_idea_challange.php">Register<span>Now</span></a></li>
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
            <div class="main">
                <!-- content -->
                <article id="content">
                    <div class="wrapper">
                        <section class="col1">
                            <h2 class="under">Register Now</h2>
                            <form action="register.php" method="post" id="register-form" novalidate="novalidate" autocomplete="off">

                                <h2>Idea Challenge - 2013</h2>

                                <div id="form-content">
                                    <fieldset>

                                        <div class="fieldgroup">
                                            <label id="lbl_txt" for="firstname">Your School Name</label>

                                            <?php
                                            require("getSchoolNames.php");

                                            $num = mysql_num_rows($result);
                                            $i = 0;
                                            $schl_nmz = array();
                                            if ($num > 0) {
                                                while ($row = mysql_fetch_array($result)) {
                                                    $schl_nmz[$i] = $row['schoolname'] . "  -  " . $row['district'];
                                                    $i++;
                                                }
                                            }
                                            $school_names = json_encode($schl_nmz);
                                            ?>


                                            <?php echo "<input type=\"text\" name=\"schoolname\" class=\"span3\" data-provide=\"typeahead\" data-items=\"4\" data-source='$school_names'> " ?>
                                        </div>

                                        <div class="fieldgroup">
                                            <label id="lbl_txt" for="firstname">First Student Name</label>
                                            <input type="text" name="firststudent">
                                        </div>

                                        <div class="fieldgroup">
                                            <label id="lbl_txt" for="email">First Student Email</label>
                                            <input placeholder="Eg :- ideachallenge2013@gmail.com" type="text" name="email1">
                                        </div>

                                        <div class="fieldgroup">
                                            <label id="lbl_txt" for="lastname">Second Student Name</label>
                                            <input type="text" name="secondstudent">
                                        </div>

                                        <div class="fieldgroup">
                                            <label id="lbl_txt" for="email">Second Student Email</label>
                                            <input placeholder="Eg :- ideachallenge2013@gmail.com" type="text" name="email2">
                                        </div>

                                        <div class="fieldgroup">
                                            <label id="lbl_txt" for="firstname">Third Student Name</label>
                                            <input type="text" name="thirdstudent">
                                        </div>

                                        <div class="fieldgroup">
                                            <label id="lbl_txt" for="email">Third Student Email</label>
                                            <input placeholder="Eg :- ideachallenge2013@gmail.com" type="text" name="email3">
                                        </div>

                                        <div class="fieldgroup">
                                            <label id="lbl_txt" for="lastname">Fourth Student Name</label>
                                            <input type="text" name="fourthtudent">
                                        </div>

                                        <div class="fieldgroup">
                                            <label id="lbl_txt" for="email">Fourth Student Email</label>
                                            <input placeholder="Eg :- ideachallenge2013@gmail.com" type="text" name="email4">
                                        </div>

                                        <div class="fieldgroup">
                                            <label id="lbl_txt" for="lastname">Select Group Leader</label>
                                            <select name="selectleader">
                                                <option value="" selected="selected">Select Leader</option>
                                                <option value="1" >Student 1</option>
                                                <option value="2" >Student 2</option>
                                                <option value="3" >Student 3</option>
                                                <option value="4" >Student 4</option>
                                            </select>
                                        </div>

                                        <div class="fieldgroup">
                                            <label id="lbl_txt" for="lastname">Group Leader Mobile</label>
                                            <input placeholder="Eg :- 0712345678" type="text" name="number1">
                                        </div>

                                        <div class="fieldgroup">
                                            <label id="lbl_txt" for="lastname">Mentor`s Name</label>
                                            <input type="text" name="mentorname">
                                        </div>

                                        <div class="fieldgroup">
                                            <label id="lbl_txt" for="email">Mentor`s Email</label>
                                            <input placeholder="Eg :- ideachallenge2013@gmail.com" type="text" name="email5">
                                        </div>

                                        <div class="fieldgroup">
                                            <label id="lbl_txt" for="lastname">Mentor`s Mobile</label>
                                            <input placeholder="Eg :- 0712345678" type="text" name="number2">
                                        </div>
                                        <div class="fieldgroup">                
                                            <input type="submit" value="Register" class="submit">
                                        </div>

                                    </fieldset>
                                </div>
                            </form>
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
			template: '<p>We are pleased to inform you that you have been correctly registered with Idea Challange 2013. Keep in touch with us. Thank You.</p>' +
			'<div>' +
                        '<br/>'+
                        '<br/>'+
			'<a href=\"video gallery.php\"  class=\"github\">Have a Video Lectuer Now</a>' +
			'<a href=\"Contacts.php\"  class=\"twitter\">Contact Us</a>' +
			'<a href=\"idea_challange_home.php\"  class=\"dribble\">Go to Home</a>' +				
			'</div>'
		});
	});
	</script>";
        }
        ?>

        <!--        Java Script For The Validation Ends Here-->


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
                <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="3" direction="left">Copyrights Reserved @ <a href="http://www.cse.mrt.ac.lk/">Deparment of Computer Science And Engineering</a> University of Moratiwa. | Template Design By <a href="https://www.facebook.com/kasun.chamika">Chamika Kasun</a></marquee>
            </footer>
            <!-- footer end -->
        </div>
        <script type="text/javascript"> Cufon.now(); </script>
    </body>
</html>