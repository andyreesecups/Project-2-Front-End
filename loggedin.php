
<?php
session_start();
if(!isset($_SESSION['user_id'])) {
  header("location: main.php");

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Plans</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <style>

      /*Container*/
#container {
 margin-top: 100px; 
}



/*Style text area where user will write plans*/
textarea {
  width: 100%;
  max-width: 100%;
  font-size: 16px;
  line-height: 1.5em;
  border-left-width: 20px;
  border-color: #2f2b3d;
  color: #2f2b3d;
  background-color: #FBFFFF;
  padding: 10px;
}



    </style>
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
                    <li class="active"><a href="#">Profile</a></li>
                    <li class="active"><a href="#">My Plans</a></li>
                </ul>
                <!--Login button pushed to the right-->
                <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Logged in as <b>username</b></a></li>
                    <li><a href="index.php?logout=1">Log out</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Container -->

     <div class="container" id="container">
      <div class="row">
        <div class="col-md-offset-3 col-md-6">
         <!--  <div class="buttons">
            <button id="addPlan" type="button" class="btn btn green btn-lg">Add Plan</button>

            <button id="edit" type="button" class="btn btn green btn-lg pull-right">Edit</button>

            <button id="done" type="button" class="btn btn-primary btn-lg pull-right">Submit</button>

            <button id="allPlans" type="button" class="btn btn green btn-lg">All Plans</button>
          </div> -->
         
         <div class="form-group">
                            <label for="planTitle">Title:</label>
                            <input class="form-control" type="text" name="title" id="title"  maxlength="50" placeholder="Ex: Dr. Appointment">
                        </div>
                        <div class="form-group">
                            <label for="planTime">Time:</label>
                            <input class="form-control" type="text" name="time" id="time"  maxlength="15" placeholder="Ex: 12:30 p.m.">
                        </div>
                        <!--  Notepad to write plans on -->
           <div id="notePad">
          <label for="planDetails">Details:</label>
            <textarea rows="10"></textarea>
          </div>
          <div id="plans" class="plans">
          <button id="planSubmit" type="button" class="btn btn green btn-lg pull-right" type="submit" value="submit">Submit</button>
      
          
            
          </div>
        </div>
      </div>
    </div>  
    
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
</body>

</html>


