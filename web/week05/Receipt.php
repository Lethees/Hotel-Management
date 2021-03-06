<?php
$reservation_id = $_GET['id'];
require "connection.php";
$db = get_db();
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
<script src="week05.js"></script>
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
    <h2>Reciept Page</h2>
  <button class="btn btn-outline-dark" id="btnB" onclick="window.location.href = 'search2.php';">Return to the Search Page</button>  
  <div class="card">
<div class="card-header">
Invoice
  <span class="float-right"> <strong>Status:</strong> Pending</span>

</div>
<div class="card-body">
    <div class="row mb-4">
    <div class="col-sm-6">
    <h6 class="mb-3">From:</h6>
    <div>
        <strong>Pine Inn</strong>
    </div>
    <div>9013 Orange Hunt Lane</div>
    <div>Annandale, VA</div>
    <div>Email: PinesInn@gamil.com</div>
    <div>Phone: +1(202)594-5456</div>
    </div>

<div class="col-sm-6">
<h6 class="mb-3">To:</h6>
<?php
   foreach ($db->query("SELECT c.first_name as first_name, c.last_name as last_name, c.phone as phone FROM customer c INNER JOIN reservation r ON c.id = r.customer_id WHERE r.id = $reservation_id") as $fRow)
   {
    $first_name = $fRow["first_name"];   
    $last_name = $fRow["last_name"];
    $phone = $fRow["phone"];
    

    echo "<div>";
    echo "<strong>$first_name $last_name</strong>";
    echo "</div>";
    echo "<div>Phone: $phone</div>";
    }
    

            ?>
    </div>
</div>

<div class="table-responsive-sm">
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="center">#</th>
                <th>Room Type</th>
                <th>Check-In Date</th>
                <th>Check-Out Date</th>

                <th class="right">Unit Cost</th>
               <th class="center">Nights</th>
                <th class="right">Total</th>
            </tr>
        </thead>
    <tbody>
    
    <?php
   foreach ($db->query("SELECT r.id as rid, r.check_in_date as check_in_date, r.check_out_date as check_out_date, r.room_number as room_number FROM reservation r INNER JOIN customer c ON r.customer_id = c.id WHERE r.id = $reservation_id") as $fRow)
   {
    $reservation_id = $fRow["rid"];   
    $check_in_date = $fRow["check_in_date"];
    $check_out_date = $fRow["check_out_date"];
      $room_number = $fRow["room_number"];

   $room = $db->prepare("SELECT * FROM room WHERE number = $room_number");
   $room->execute();
        while ($fRow = $room->fetch(PDO::FETCH_ASSOC))
        {
             $number = $fRow["number"];
             $roomType = $db->prepare("SELECT * FROM roomType WHERE number = $number");
             $roomType->execute();
            while ($rRow = $roomType->fetch(PDO::FETCH_ASSOC))
            {
             $price = $rRow["price"];
             $room_type = $rRow["room_type"];
             $description = $rRow["description"];
            }
         }

    
         $diff = abs(strtotime($check_in_date) - strtotime($check_out_date));

         $years = floor($diff / (365*60*60*24));
         $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
         $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));


    $total = $price * $days;
    echo "<tr>";
   echo "<td class='center'>$reservation_id</td>";
  echo "<td class='left strong'>$room_type</td>";
  echo "<td class='left'>$check_in_date</td>";
  echo "<td class='left'>$check_out_date</td>";
   echo "<td class='right'>$$price</td>";
    echo "<td class='center'>$days</td>";
   echo "<td class='right'>$$total</td>";
   echo "</tr>";
  }


echo "</tbody>";
echo "</table>";
           echo "<div class='col-lg-4 col-sm-5 ml-auto'>";
echo "<table class='table table-clear'>";
echo "<tbody>";
echo "<tr>";
echo "<td class='left'>";
echo "<strong>Subtotal</strong>";
echo "</td>";
echo "<td class='right'>$$total</td>";
echo "</tr>";
echo "<tr>";
echo "<td class='left'>";
echo "<strong>Sales Tax (6%)</strong>";
echo "</td>";
$tax = $total * (0.06);
echo "<td class='right'>$$tax</td>";
$newTotal = $tax + $total;
echo "</tr>
<tr>
<td class='left'>
<strong>Total</strong>
</td>
<td class='right'>
<strong>$$newTotal</strong>";
?>
</td>
</tr>


</tbody>
</table>

</div>


</div>
</div>
</div>
<br>
<div class="print">
             <button class="btn btn-primary hidden-print" onclick="myFunction()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>
	    </div>
        <br>
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
         <a href="#">Pines Inn</a>.
            </p>     
        </div>
      </div>
</footer>
  </body>
</html>