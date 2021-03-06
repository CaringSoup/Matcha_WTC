<!DOCTYPE html>
<html lang="en">
<head>
  <title>Matcha (dating website)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="js/myFunctions.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Matcha 2019</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Update profile</a></li>
        <li><a href="#">Brows other users</a></li>
        <li><a href="#">History</a></li>
        <li><a href="#">Matched</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <?php
        if (!isset($_SESSION['username']))
        {
        ?>
            <li><a href="modal/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <?php
        } else { 
        ?>
            <li><a href="modal/logout.php"></span>Logout</a></li>
        <?php
        }
        ?>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#">Link to something</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Welcome back [insert session user name]!</h1>
      <p>Possible preview of, "Here's what you've missed since you've been away." Then add messages/likes/comments/unliked/matched</p>
      <hr>
      <h3>Test</h3>
      <p>[username] liked one of your pictures.</p>
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>Pop-up notifications.</p>
      </div>
      <div class="well">
        <p>Pop-up notifications.</p>
      </div>
      <div class="well">
        <p>Pop-up notifications.</p>
      </div>
      <div class="well">
        <p>Pop-up notifications.</p>
      </div>
      <div class="well">
        <p>Pop-up notifications.</p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>&copy;gferreir 2019</p>
</footer>

</body>
</html>
