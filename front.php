<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
      background-color: #e6eeff;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height:450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #e6faff;
      height: 100%;
    }
    body{
     background-color:#fcf8e3;
    }
     p{
     font-size:20px;
     
    }
    footer {
      background-color: #000099;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
    


  </style>
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
      <a class="navbar-brand" href="">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="">About us</a></li>
        <li><a href="">Contact Us</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="Create_account.php"><span class="glyphicon glyphicon-log-in"></span> Create Account</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="flights.php">Flights</a></p>
      <p><a href="hotels.php">Hotels</a></p>
      <p><a href="train.php">Trains</a></p>
      <p><a href="bus.php">Buses</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>DIGITAL ATTENDANCE...</h1>
      <hr>
      <p>Find best deals on flight booking, bus booking, train booking and 
hotel booking at travel time, with easy booking. Get multiple discounts and offers
everyday.... Happy Journey...  </p>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="goa.jpg" target="_blank">
          <img src="goa.jpg" alt="goa" style="width:100%">
          <div class="caption">
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="him.jpg" target="_blank">
          <img src="him.jpg" alt="him" style="width:100%">
          <div class="caption">
            
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="mou.jpg" target="_blank">
          <img src="mou.jpg" alt="mou" style="width:100%">
          <div class="caption">
            
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="sky.jpg" target="_blank">
          <img src="sky.jpg" alt="sky" style="width:100%">
          <div class="caption">  
          </div>
        </a>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Copyright © Travel Time. All Rights Reserved
</p>
</footer>
</body>
</html>
