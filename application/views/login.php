<!DOCTYPE html>
<html lang="en">


<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <meta name="keywords" content="Flat Dark Web Login Form Responsive Templates, Iphone Widget Template, Smartphone login forms,Login form, Widget Template, Responsive Templates, a Ipad 404 Templates, Flat Responsive Templates" />
    <link href="<?php echo base_url('assets/')  ?>css/login.css" rel='stylesheet' type='text/css' />
    <!--webfonts-->
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic|Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
    <!--//webfonts-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>

<body >
    <script>$(document).ready(function(c) {
        $('.close').on('click', function(c){
            $('.login-form').fadeOut('slow', function(c){
                $('.login-form').remove();
            });
        });   
    });
</script>
<div class="login-form">
    <div class="close"> </div>
 
    <div class="clear"> </div>
    <div class="avtar">
        <img src="assets/images/avtar.png" />
    </div>
    <form action="" method="post">
                    <input type="text" class="text" name ="username" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" >
                        <div class="key">
                    <input type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Login" />
                            </fieldset>
                        </form>
   
</div>


</body>
</html>
