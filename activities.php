<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeremy's Resort</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
  <h3 class="title-card" style="text-align: center; font-weight: 400; font-size: 40px; text-shadow: 2px 2px 5px #666;" >Jeremy's Resort</h3>
</div>

<nav class="navbar navbar-expand-sm bg-success navbar-dark">
  <a class="navbar-brand" href="#"><img src="img/img_logo.webp" width="60" height="60" alt="img-logo"></a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav" style="text-align: center;">
      <li class="nav-item">
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

<div class="container-fluid" style="position:absolute; top:160px; left:30px;">
  <h3>Activities at Pacific Trails</h3>
  
  <table border="1">
      <thead>
          <tr>
              <th>Pool - Free</th>
              <th>Golf - $20</th>
          </tr>
          
          <tr>
              <th><img src="img/summer_img.jpg"  width="300px" height="200px"></th>
              <th><img src="img/summer_img2.jpg" width="300px" height="200px"></th>
          </tr>
      </thead>
      <tfoot>
          <tr>
              <th>Parasailing - $100</th>
              <th>Hiking - Free</th>
          </tr>
          
          <tr>
              <th><img src="img/summer_img3.jpg" width="300px" height="200px"></th>
              <th><img src="img/summer_img4.jpg" width="300px" height="200px"></th>
          </tr>
      </tfoot>
  </table>
</div>


<footer>
  <div class="fixed-bottom text-center" style="background-color: #666; color:white;">
      <p>Copyright &copy; 2023 Jeremy's Resort</p>
      <p>email:John.Doe@mail.montclair.edu</p>
  </div>
</footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
</body>
</html>