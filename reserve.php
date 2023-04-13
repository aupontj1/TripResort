<!DOCTYPE html>
<html lang="en">
<head>
  <title>Reserved Stay</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-success navbar-dark">
  <a class="navbar-brand" href="#"><img src="img/img_logo.webp" width="60" height="60" alt="img-logo"></a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav" style="text-align: center;">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="yurts.php">Yurts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="activities.php">Activities</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="reservation.php">Reservation</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="comments.php">Comments</a>
      </li>
    </ul>
  </div>
</nav>

<?php
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $street = $_POST["street"];
  $city = $_POST["city"];
  $zipcode = $_POST["zipcode"];
  $cindate = $_POST["cindate"];
  $coutdate = $_POST["coutdate"];
  
  $cindate = date_create($cindate);
  $coutdate = date_create($coutdate);

  $numpeople = $_POST["npeople"];
  $numdays = $_POST["ndays"];
  $roomtype = $_POST["roomtype"];
  $phonenum = $_POST["phone"];
  $email = $_POST["email"];
  $payment = $_POST["payment"];
  $cardnum = $_POST["cardnum"];
  $sr = $_POST["sr"];

  $King = 200;
  $Queen = 150;
  $Suit = 300;
  $total = 0;

  if($roomtype === "King"){
    $total = ($King * $numdays) * 1.07;
  } elseif ($roomtype === "Queen"){
    $total = ($Queen * $numdays) * 1.07;
  } elseif ($roomtype === "Suit"){
    $total = ($Suit * $numdays) * 1.07;
  }

?>
<h2>
  Thank you <?php echo $fname . " " . $lname;?> for your reservation
</h2>
<p>The followings is the information you entered: </p>

<div class="container">
  <table class="table table-striped">
    <tr>
      <th><label>Number & Street</label></th>
      <td> <?php echo $street?></td>
    </tr>
    <tr>
      <th><label>City</label></th>
      <td> <?php echo $city?></td>
    </tr>
    <tr>
      <th><label>Zip Code</label></th>
      <td> <?php echo $zipcode?></td>
    </tr>
    <tr>
      <th><label>Check In Date</label></th>
      <td> <?php echo date_format($cindate, "Y-m-d")?></td>
    </tr>
    <tr>
      <th><label>Check Out Date</label></th>
      <td> <?php echo date_format($coutdate, "Y-m-d")?></td>
    </tr>
    <tr>
      <th><label>Number of People</label></th>
      <td> <?php echo $numpeople?></td>
    </tr>
    <tr>
      <th><label>Number of Days</label></th>
      <td> <?php echo $numdays?></td>
    </tr>
    <tr>
      <th><label>Room Type</label></th>
      <td> <?php echo $roomtype?></td>
    </tr>
    <tr>
      <th><label>Email</label></th>
      <td> <?php echo $email?></td>
    </tr>
    <tr>
      <th><label>Phone Number</label></th>
      <td> <?php echo $phonenum?></td>
    </tr>
    <tr>
      <th><label>Credit Card</label></th>
      <td> <?php echo $payment?></td>
    </tr>
    <tr>
      <th><label>Card Number</label></th>
      <td> <?php echo $cardnum?></td>
    </tr>
    <tr>
      <th><label>Special Request</label></th>
      <td><?php echo $sr?></td>
    </tr>
    <tr>
      <th><label>Total Charge</label></th>
      <td><?php echo $total ?></td>
    </tr>
  </table>
</div> 
  

</body>
</html>
