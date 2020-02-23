<html>
<head>
<title>Hotels</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>  
body{
     
     background-image: url("hotels.jpg");
min-height: 380px;
background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
color:#000066;
font-size:20;
font-weight:bold;   }

</style>
</head>
<body>
<form action="pro_hotels.php" method="get" >
<div class="container">
    <div class="form-group">
      <label for="Area">Area</label>
      <input type="text" name="Area" class="form-control" id="usr">
    </div>
    <div class="form-group">
      <label for="Checkin">Check-in</label>
      <input type="date" name="Checkin" class="form-control" id="usr">
    </div>
    <div class="form-group">
      <label for="Checkout">Check-out</label>
      <input type="date" name="Checkout" class="form-control" id="usr">
    </div>
    <div class="form-group">
      <label for="Guests">Guests</label>
      <input type="text" name="Guests" class="form-control" id="usr">
    </div>
    <div class="form-group">
      <label for="Rooms">Rooms</label>
      <input type="text" name="Rooms" class="form-control" id="usr">
    </div>
</div>
<input type="submit" class="btn btn-info" value="Book"><br>
</body>
</html>