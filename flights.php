<html>
<head>
<title>Flights</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>  
body{
     background-image: url("flight.jpg");
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
<form action="pro_Flights.php" method="get">
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
      <label for="Adults">Adults</label>
      <input type="text" name="Adults" class="form-control" id="usr">
    </div>
 <div class="form-group">
      <label for="Childrens">Childrens</label>
      <input type="text" name="Childrens" class="form-control" id="usr">
    </div>
 <label class="radio-inline">
      <input type="radio" name="Class">Economy
    </label>
    <label class="radio-inline">
      <input type="radio" name="Class">Premium
    </label>
    <label class="radio-inline">
      <input type="radio" name="Class">Business
    </label>
    
</div>
<input type="submit" class="btn btn-info" value="Book"><br>
</form>
</body>
</html>
