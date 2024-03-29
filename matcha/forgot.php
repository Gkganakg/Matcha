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

		<title>Forgot Password</title>

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
                                <h1 class="cover-heading col-sm-12">Forgot Password</h1>
                                
                                <form class="form-horizontal" method="post" action="funcs/reset.php" id="login_form">
                                    <div class="form-group col-sm-12">
                                        <div class="col-sm-offset-4 col-sm-4">
                                           Email 
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
                                        </div>
                                    </div>
                                    <button type="submit" id="loginBtn" name="resBtn" class="btn btn-danger" value="Log in">Submit <span class="glyphicon glyphicon-user"></span></button>
                                    <br><br>
                                    
                                </form>
                                <br>
                                <?php
                                    if(isset($_SESSION['errr'])){
                                        echo $_SESSION['errr'];	
                                        $_SESSION['errr'] = null;
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