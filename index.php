<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="" />
    <meta name="author" content="">
    <link rel="icon" href="http://v4-alpha.getbootstrap.com/favicon.ico">

    <title>Sample Login Template</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="assets/cover.css">

</head>

<body>

    <div class="site-wrapper">

        <div class="site-wrapper-inner">

            <div class="cover-container">

                <div class="navbar navbar-inverse navbar-fixed-top white">
                    <div class="container">
                        <div class="navbar-header white">
                            <a class="navbar-brand" href="index.php">Navbar Link 1 </a>
                            <a class="navbar-brand" href="index.php">Navbar Link 2 </a>
                            <a class="navbar-brand" href="index.php">Navbar Link 3 </a>
                            <a class="navbar-brand" href="index.php">Navbar Link 4 </a>
                            <a class="navbar-brand" href="index.php">Navbar Link 5 </a>
                        </div>
                        <div class="btn btn-link" id="show_login">
                            <input type="button" class="btn btn-link" value="LOGIN">
                        </div>
                    </div>
                </div>

                <div>
                    <!-- login scripts goes here - before display of form -->   
                    <?php include_once( 'includes/login_manual.php'); ?>
                    <!-- alternative login script for mysql below -->
                    <!--  include_once( 'includes/login_mysql.php'); -->
                </div>
                    <!-- form display goes here - this already includes a  div container -->
                    <?php include_once( 'includes/login_form.php'); ?>                    
                <div class="inner cover">
                    <!-- content goes here -->
                </div>
                <div class="mastfoot">
                    <div class="inner">
                        <?php include_once( 'includes/footer_text.php'); ?>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="assets/tether.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script type="text/javascript" src="files/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <!-- all custom login and other js code goes here -->
    <script type="text/javascript" src="assets/login_effect.js"></script>
</body>

</html>