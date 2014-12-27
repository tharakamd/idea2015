<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" type="image/png" href="images/favicon.png">
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Idea Challenge | Downloads</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="stylesheet" type="text/css" href="css/loginstyle.css" />
        <script src="js/modernizr.custom.63321.js"></script>
        <!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->

    </head>
    <body>
        <div class="container">

            <header>

                <h1>Please Login to Download</h1>
                <h2>"Idea Challenge - 2013"</h2>

                <div class="support-note">
                    <span class="note-ie">Sorry, only modern browsers.</span>
                </div>

            </header>

            <section class="main">
                <form class="form-2" method="post" action="validate_login.php">
                    <h1><span class="log-in">Log in</span> or <span class="sign-up">sign up</span></h1>
                    <p class="float">
                        <label for="login"><i class="icon-user"></i>Username</label>
                        <input type="text" name="username" placeholder="Username">
                    </p>
                    <p class="float">
                        <label for="password"><i class="icon-lock"></i>Password</label>
                        <input type="password" name="password" placeholder="Password" class="showpassword">
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember">Remember me</label>
                    </p>
                    <p class="clearfix"> 
                        <a href="#" class="log-twitter">Log in with Twitter</a>    
                        <input type="submit" name="submit" value="Log in">
                    </p>
                </form>​​
            </section>

        </div>
        <!-- jQuery if needed -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript">
            $(function(){
                $(".showpassword").each(function(index,input) {
                    var $input = $(input);
                    $("<p class='opt'/>").append(
                    $("<input type='checkbox' class='showpasswordcheckbox' id='showPassword' />").click(function() {
                        var change = $(this).is(":checked") ? "text" : "password";
                        var rep = $("<input placeholder='Password' type='" + change + "' />")
                        .attr("id", $input.attr("id"))
                        .attr("name", $input.attr("name"))
                        .attr('class', $input.attr('class'))
                        .val($input.val())
                        .insertBefore($input);
                        $input.remove();
                        $input = rep;
                    })
                ).append($("<label for='showPassword'/>").text("Show password")).insertAfter($input.parent());
                });

                $('#showPassword').click(function(){
                    if($("#showPassword").is(":checked")) {
                        $('.icon-lock').addClass('icon-unlock');
                        $('.icon-unlock').removeClass('icon-lock');    
                    } else {
                        $('.icon-unlock').addClass('icon-lock');
                        $('.icon-lock').removeClass('icon-unlock');
                    }
                });
            });
        </script>
    </body>
</html><!DOCTYPE html>