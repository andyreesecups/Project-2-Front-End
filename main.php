<?php
session_start();
include('connection.php');
//logout
include('logout.php');
// remember me
include('rememberme.php');
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project 2</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    <!--Navigation Bar-->
    <nav role="navigation" class="navbar navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand">Project 2</a>
                <button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
                <!--Login button pushed to the right-->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#loginModal" data-toggle="modal">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Jumbotron-->
    <div class="jumbotron" id="myContainer">
        <h1>Project 2</h1>
        <p>Sign up and have one less thing to worry about.</p>
        <p>We will remind you of your plans by sending a text message to your phone!</p>
        <button type="button" class="btn btn-large green signup" data-target="#signupModal" data-toggle="modal">Sign up to get started</button>
    </div>
    <!--Login Form-->
    <form method="post" id="loginform">
        <div class="modal" id="loginModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">
                            &times;
                        </button>
                        <h4 id="myModalLabel">
                    Login: 
                  </h4>
                    </div>
                    <div class="modal-body">
                        <!--login message from PHP file-->
                        <div id="loginmessage"></div>
                        <div class="form-group">
                            <label for="loginemail" class="sr-only">Email:</label>
                            <input class="form-control" type="email" name="loginemail" id="loginemail" placeholder="Email" maxlength="50">
                        </div>
                        <div class="form-group">
                            <label for="loginpassword" class="sr-only">Password</label>
                            <input class="form-control" type="password" name="loginpassword" id="loginpassword" placeholder="Password" maxlength="30">
                        </div>
                        <div class="checkBox">
                            <label>
                                <input type="checkbox" name="rememberme" id="rememberme"> Remember Me
                            </label>
                            <a class="pull-right" style="cursor:pointer" data-dismiss="modal" data-target="#forgotpasswordModal" data-toggle="modal">
                    Forgot Password?
                  </a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input class="btn green" name="login" type="submit" value="login">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            Cancel
                        </button>
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal" data-target="signupModal" data-toggle="modal">
                            Register
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!--Sign up form-->
          <form method="post" id="signupform">
        <div class="modal" id="signupModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button class="close" data-dismiss="modal">
                    &times;
                  </button>
                  <h4 id="myModalLabel">
                    Sign up to start chatting with your coworkers now! 
                  </h4>
              </div>
              <div class="modal-body">
                  
                  <!--Sign up message from PHP file-->
                  <div id="signupmessage"></div>
                  
                  <div class="form-group">
                      <label for="username" class="sr-only">Username:</label>
                      <input class="form-control" type="text" name="username" id="username" placeholder="Username" maxlength="30">
                  </div>
                  <div class="form-group">
                      <label for="email" class="sr-only">Email:</label>
                      <input class="form-control" type="email" name="email" id="email" placeholder="Email Address" maxlength="50">
                  </div>
                  <div class="form-group">
                      <label for="password" class="sr-only">Choose a password:</label>
                      <input class="form-control" type="password" name="password" id="password" placeholder="Choose a password" maxlength="30">
                  </div>
                  <div class="form-group">
                      <label for="password2" class="sr-only">Confirm password</label>
                      <input class="form-control" type="password" name="password2" id="password2" placeholder="Confirm password" maxlength="30">
                  </div>
              </div>
              <div class="modal-footer">
                  <input class="btn green" name="signup" type="submit" value="Sign up">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                  Cancel
                </button>
              </div>
          </div>
      </div>
      </div>
      </form>

    <!--Forgot Password form-->
    <form method="post" id="forgotpasswordform">
        <div class="modal" id="forgotpasswordModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">
                            &times;
                        </button>
                        <h4 id="myModalLabel">
                    Forget your password? No worries! Enter your email address. 
                  </h4>
                    </div>
                    <div class="modal-body">
                        <!--Forgot Password message from PHP file-->
                        <div id="forgotpasswordmessage"></div>
                        <div class="form-group">
                            <label for="forgotemail" class="sr-only">Email:</label>
                            <input class="form-control" type="email" name="forgotemail" id="forgotemail" placeholder="Email" maxlength="50">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input class="btn green" name="forgotpassword" type="submit" value="Submit">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            Cancel
                        </button>
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal" data-target="signupModal" data-toggle="modal">
                            Register
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!--Footer-->
    <div class="footer">
        <div class="container">
            <p>UT Coding Bootcamp Copyright &copy; 2017</p>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="assets/javascript/logic.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="assets/javascript/index.js"></script>
</body>

</html>

?>