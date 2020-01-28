<?php 
  session_start(); 
  $address = htmlspecialchars($_POST["address"]);
  $username = htmlspecialchars($_POST["uname"]);
  $zip = htmlspecialchars($_POST["zip"]);
  $total = 0;

  $products = array("Snow Thrower", "Queen-Sheets", "Router", "Echo Show 5", "Camara", "Ankle Brace");
$amounts = array("103.08", "27.99", "51.99", "69.99", "22.20", "17.99");
$description = array("GreenWorks 2600402 Pro 80V 20-Inch Cordless Snow Thrower", 
"400-Thread-Count 100% Cotton Sheet Pure White Queen-Sheets", "TP-Link AC1750 Smart WiFi Router - Dual Band Gigabit Router",
 "Echo Show 5 – Compact smart display with Alexa - Charcoal", "AbergBest 21 Mega Pixels 2.7 LCD Rechargeable HD Digital Camera", 
"TechWare Pro Ankle Brace Compression Sleeve");
$image = array("1.jpg", "2.jpg", "3.jpg", "4.jpg", "5.jpg", "6.jpg");

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Comfirmation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="week03.css">
    <script src="week03.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>

  <div class="jumbotron text-center">
        <h1>Welcome to Amazom.com</h1>
        <p>We do everything that Amazon does, but in a simple way!</p> 
    </div>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-end">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="BrowseItem.php">Amazom</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">About Us</a>
            </li>
        </ul>
        <form class="form-inline" action="">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-success" type="submit">Search</button>
        </form>
    </nav>
    <br>

    <div class="container">
  <h2>Congratulations, <?=$username ?>! Your order has been processed.</h2> 
  <p>The following items will be shipped to <?php echo($address)?>, <?php echo($zip)?>.<p>        
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>Item Name</th>
        <th>Picture</th>
        <th>Description</th>
        <th>Price</th>
        <th>Quantity</th>
      </tr>
    </thead>
    <tbody>

<?php foreach ( $_SESSION["cart"] as $i ){ ?>
            <tr>
                <td><?php echo($products][$i])?></td>
                <td><img src="<?php echo($image[$i]); ?>" alt="1" width="100" height="100"></td>
                <td><p><?php echo($description[$i]); ?></p></td>
                <td>$<?php echo($_SESSION["amounts"][$i])?></td>
                <td><?php echo( $_SESSION["qty"][$i] ); ?></td>
            </tr>

                <?php $total = $total + $_SESSION["amounts"][$i]; } 
                $_SESSION["total"] = $total;
            ?>

            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>Total: $<?php echo $total?></td>
                <td></td>
            </tbody>
  </table>
</div>

  <!-- Site footer -->
  <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">Amazom.com <i>MAKES SHOPPING SIMPLE AGAIN </i> is an fictional multinational technology company based in Rexburg, ID that focuses on e-commerce, cloud computing, digital streaming, and artificial intelligence.</p>
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
         <a href="#">Amazom</a>.
            </p>     
        </div>
      </div>
</footer>
  </body>
</html>
