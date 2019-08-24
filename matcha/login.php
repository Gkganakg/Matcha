<?php    
	session_start();
?>

<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="img/favicon.ico">

		<title>Login</title>

		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
        <link href="css/home.css" rel="stylesheet">
        <!-- <link href="css/login.css" rel="stylesheet"> -->

		<style>
			#btn-env:hover {
				color: #10ad9d;
			}
			
			#btn-env {
				color: #0bb320;
			}
		</style>

	</head>

	<body  onload="$('#btnlog').addClass('active')">
        <div class="container">    
            <div class="panel-body" id="main_page">
				<nav class="navbar navbar-default navbar-expand-lg" id="nav_load">
                    <div class="container-fluid">
                        <div class="nav navbar-toggler" id="navbarSupportedContent">
                            <ul class="nav navbar-nav">
						        <li id="btnlog"><a href="login.php"><span class="glyphicon glyphicon-user"></span> Log In </a></li>
						        <li id="btnsign"><a href="register.php"><span class="glyphicon glyphicon-plus"></span> Register </a></li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="inner cover bar" id="login" style="font-size: larger" <?php echo 'align="center"';?>>
                                <br>
                                <h1 class="cover-heading col-sm-12">Log In</h1>
                                <form class="form-horizontal" method="post" action="funcs/sign_in.php" id="login_form">
                                    <div class="form-group col-sm-12">
                                        <div class="col-sm-offset-4 col-sm-4">
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Username that you have used in the sign up process.." required>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <div class="col-sm-offset-4 col-sm-4">
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                        </div>
                                        <span id="pass_err"></span>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <div class="col-sm-offset-4 col-sm-4">
                                            <div class="checkbox">
                                                <label><input type="checkbox" name="special_key"> Keep me logged in</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" id="loginBtn" name="loginBtn" class="btn btn-danger" value="Log in">Log in <span class="glyphicon glyphicon-user"></span></button>
                                    <br><br>
                                    <a href="forgot.php">forgot Password </a>
                                </form>
                                <br>
                                <?php
                                    if(isset($_SESSION['er'])){
                                        echo $_SESSION['er'];	
                                        $_SESSION['er'] = null;
                                    }
                                ?>
                                <br><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mastfoot">
                    <div class="inner">
                        <p style="color:red;" <?php echo 'align="center"';?>>Matcha Project by gkganakg Copyright© 2018</p>
                        
                    </div>
                    
                </div>
             
            </div>
        </div>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>

	</html>