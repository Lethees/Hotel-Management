<?php session_start(); 

$total = 0;

//Load up session
if ( !isset($_SESSION["total"]) ) {
  $_SESSION["total"] = 0;
  for ($i=0; $i< count($products); $i++) {
   $_SESSION["qty"][$i] = 0;
  $_SESSION["amounts"][$i] = 0;
 }
}

//---------------------------
//Reset
if ( isset($_GET['reset']) )
{
if ($_GET["reset"] == 'true')
  {
  unset($_SESSION["qty"]); //The quantity for each product
  unset($_SESSION["amounts"]); //The amount from each product
  unset($_SESSION["total"]); //The total cost
  unset($_SESSION["cart"]); //Which item has been chosen
  }
}

//---------------------------
//Add
if ( isset($_GET["add"]) )
  {
  $i = $_GET["add"];
  $qty = $_SESSION["qty"][$i] + 1;
  $_SESSION["amounts"][$i] = $amounts[$i] * $qty;
  $_SESSION["cart"][$i] = $i;
  $_SESSION["qty"][$i] = $qty;
}

 //---------------------------
 //Delete
 if ( isset($_GET["delete"]) )
  {
  $i = $_GET["delete"];
  $qty = $_SESSION["qty"][$i];
  $qty--;
  $_SESSION["qty"][$i] = $qty;
  //remove item if quantity is zero
  if ($qty == 0) {
   $_SESSION["amounts"][$i] = 0;
   unset($_SESSION["cart"][$i]);
 }
else
 {
  $_SESSION["amounts"][$i] = $amounts[$i] * $qty;
 }
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Browse items</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="week03.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="week03.js"></script>
  </head>
  <body>
    <div class="jumbotron text-center">
        <h1>Welcome to Amazom.com</h1>
        <p>We do everything that Amazon does, but in a simple way!</p> 
    </div>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-end">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Amazom</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="BrowseItem.php">Keep Shopping</a>
            </li>
        </ul>
        <form class="form-inline" action="">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-success" type="submit">Search</button>
        </form>
    </nav>
    <br>

    <div class="container">
  <h2>Your Shopping Cart</h2>         
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
                <td><?php echo($_SESSION["products"][$i])?></td>
                <td><img src="<?php echo($_SESSION["image"][$i]); ?>" alt="1" width="100" height="100"></td>
                <td><p><?php echo($_SESSION["description"][$i]); ?></p></td>
                <td>$<?php echo($_SESSION["amounts"][$i])?></td>
                <td><?php echo( $_SESSION["qty"][$i] ); ?></td>
                <td><a href="?delete=<?php echo($i); ?>"><img src="delete-icn.svg." alt="delete"></a></td>
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
                <td>
                <button type="button" class="btn btn-success">
                    <a class="nav-link" id="checkout" href="Checkout.php">Check out</a>
                    </button>
</td>
</tr>
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