<html>
<head>
<title>Train</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>  
body{
     background-image: url("train.jpg");
min-height: 380px;
background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
color:white;
font-size:20;
font-weight:bold;   }
</style>
</head>
<body>
<form action="pro_train.php" method="get">
<form action="payment.php" method="get">
<div class="container">
    <div class="form-group">
      <label for="Starting_from">Starting_from</label>
      <input type="text" name="Starting_from" class="form-control" id="usr">
    </div>
    <div class="form-group">
      <label for="Destination">Destination</label>
      <input type="text" name="Destination" class="form-control" id="usr">
    </div>
    <div class="form-group">
      <label for="Date">Date</label>
      <input type="date" name="Date" class="form-control" id="usr">
    </div>

    <div class="form-group">
      <label for="Time">Time</label>
      <input type="time" name="Time" class="form-control" id="usr">
    </div>
    <div class="form-group">
      <label for="Passengers">Passengers</label>
      <input type="text" name="Passengers" class="form-control" id="usr">
    </div>
     <label class="radio-inline">
      <input type="radio" name="Class" checked>First AC
    </label>
    <label class="radio-inline">
      <input type="radio" name="Class">Second AC
    </label>
    <label class="radio-inline">
      <input type="radio" name="Class">Sleeper Class
    </label>
    <label class="radio-inline">
      <input type="radio" name="Class">Chair Seating
    </label>
</div>
<input type="submit" class="btn btn-info" value="Book"><br>
</body>
</html>
