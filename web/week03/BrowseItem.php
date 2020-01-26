<?php session_start(); ?>
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
  </head>
  <body>
    <div class="jumbotron text-center">
        <h1>Welcome to Amazom.com</h1>
        <p>We do everything that Amazon does, but in a simplified way!</p> 
    </div>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-end">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Amazom</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cart.php">Shopping Cart</a>
            </li>
        </ul>
        <form class="form-inline" action="">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-success" type="submit">Search</button>
        </form>
    </nav>
    <br>

    <form method="post" action="cart.php">
        <div class="container">
        <p>Showing 1-6 of 1000 results<p>
            <div class="row">
                <div class="col-sm-3 p-3 my-3 text-black">
                    <img src="1.jpg" alt="1" width="260" height="260">
                    <p>GreenWorks 2600402 Pro 80V 20-Inch Cordless Snow Thrower</p>
                    <hr>
                    <p>$103.08</p>
                    <input type="checkbox" name="item[]" value="Snow Thrower"> Add it to the cart<br>
                </div>
                <div class="col-sm-3 p-3 my-3 text-black">
                    <img src="2.jpg" alt="2" width="260" height="260">
                    <p>400-Thread-Count 100% Cotton Sheet Pure White Queen-Sheets</p>
                    <hr>
                    <p>$27.99</p>
                    <input type="checkbox" name="item[]" value="Queen-Sheets"> Add it to the cart<br>
                </div>
                <div class="col-sm-3 p-3 my-3 text-black">
                    <img src="3.jpg" alt="3" width="260" height="260">     
                    <p>TP-Link AC1750 Smart WiFi Router - Dual Band Gigabit Router</p>
                    <hr>
                    <p>$51.99</p>
                    <input type="checkbox" name="item[]" value="Router"> Add it to the cart<br>
                </div>
                <div class="col-sm-3 p-3 my-3 text-black">
                    <img src="4.jpg" alt="4" width="260" height="260">        
                    <p>Echo Show 5 – Compact smart display with Alexa - Charcoal</p>
                    <hr>
                    <p>$69.99</p>
                    <input type="checkbox" name="item[]" value="Echo Show 5"> Add it to the cart<br>
                </div>
                <div class="col-sm-3 p-3 my-3 text-black">
                    <img src="5.jpg" alt="5" width="260" height="260">        
                    <p>AbergBest 21 Mega Pixels 2.7" LCD Rechargeable HD Digital Camera</p>
                    <hr>
                    <p>$22.20</p>
                    <input type="checkbox" name="item[]" value="Camera"> Add it to the cart<br>
                </div>
                <div class="col-sm-3 p-3 my-3 text-black">
                    <img src="6.jpg" alt="6" width="260" height="260">        
                    <p>TechWare Pro Ankle Brace Compression Sleeve</p>
                    <hr>
                    <p>$17.99</p>
                    <input type="checkbox" name="item[]" value="Ankle Brace"> Add it to the cart<br>
                </div>    
            </div>
        </div>
    </form>
    
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