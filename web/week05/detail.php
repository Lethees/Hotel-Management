<?php
$guest_id = $_GET['id'];

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pines Inn</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="week05.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>    
    <div class="jumbotron text-center">
        <h1>Welcome to Pines Inn, Annandale, VA</h1>
        <p>This page is only accessible for Pines Inn Administration staff</p> 
    </div>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-end">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Pines Inn</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="management.php">Menu</a>
            </li>
        </ul>
        <form class="form-inline" action="">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-success" type="submit">Search</button>
        </form>
    </nav>
    <br>

    <div class="container">
  <h2>Reservation List</h2> 
  <button class="btn btn-outline-dark" id="btnB" onclick="window.location.href = 'guestList.php';">Return to the GuestList</button>      
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>Reservation ID</th>
        <th>Check-In Date</th>
        <th>Check-Out Date</th>
        <th>Room Number</th>
      </tr>
    </thead>
    <tbody>

    <?php
   require "connection.php";
   $db = get_db();
   foreach ($db->query("SELECT id, check_in_date, check_out_date, customer_id, room_number FROM reservation WHERE customer_id = $guest_id") as $fRow)
   {
    $reservation_id = $fRow["id"];   
    $check_in_date = $fRow["check_in_date"];
    $check_out_date = $fRow["check_out_date"];
      $room_number = $fRow["room_number"];

    echo "<tr>";
    echo "<td>$reservation_id</td>"; 
    echo "<td>$check_in_date</td>";
    echo "<td>$check_out_date</td>";
    echo "<td>$room_number</td>";
    echo "</tr>";
    }
    

            ?>
            </tbody>
  </table>
</div>


    
  <!-- Site footer -->
  <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">Pines Inn.com <i>MAKES TRAVELING SIMPLE AGAIN </i> is an fictional Hotel based in Annandale, VA that focuses on giving customers the freedom to roam and a comfortable place to spend the night.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            <ul class="footer-links">
              <li><a href="">C</a></li>
              <li><a href="">UI Design</a></li>
              <li><a href="">PHP</a></li>
              <li><a href="">Java</a></li>
              <li><a href="">Android</a></li>
              <li><a href="">Templates</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="">About Us</a></li>
              <li><a href="">Contact Us</a></li>
              <li><a href="">Contribute</a></li>
              <li><a href="">Privacy Policy</a></li>
              <li><a href="">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">          
            <p class="copyright-text justify-content-start">Copyright &copy; 2020 All Rights Reserved by 
         <a href="#">Pines INN</a>.
            </p>     
        </div>
      </div>
</footer>
  </body>
</html>