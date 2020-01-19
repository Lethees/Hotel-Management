<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fangyi Li's Assignemnts</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="myHomePage.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Fangyi Li's Assignemnts</h1>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Hotel Management</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="myHomePage.php">Home</a></li>
        <li><a href="aboutMe.php">About me</a></li>
        <li class="active"><a href="#">Assignemnts</a></li>
        <li><a href="#">Page 4</a></li>
        <li><a href="#">Page 5</a></li>
        <li><a href="#">Page 6</a></li>
      </ul>
    </div>
  </div>
</nav>

<div>
    <p>
        Nothing much to say, all the Assignemnts are on the navigation bar.     
    </p>
</div>

<!-- https://mdbootstrap.com/docs/jquery/navigation/footer/ -->
<div class="jumbotron text-center" style="margin-bottom:0">
  <footer class="page-footer font-small special-color-dark pt-4">

    <!-- Footer Elements -->
    <div class="container">
    <?php
        date_default_timezone_set("America/Denver");
        echo "The time is " . date("h:i:sa");
        ?>
      <br>  
       
      <!--Grid row-->
      <div class="row">
  
        <!--Grid column-->
        <div class="col-md-6 mb-4">
  
          <!-- Form -->
          <form class="form-inline">
            <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"
              aria-label="Search">
            <i class="fas fa-search" aria-hidden="true"></i>
          </form>
          <!-- Form -->
  
        </div>
        <!--Grid column-->
  
        <!--Grid column-->
        <div class="col-md-6 mb-4">
  
          <form class="input-group">
            <input type="text" class="form-control form-control-sm" placeholder="Your email"
              aria-label="Your email">
            <div class="input-group-append">
              <button class="btn btn-sm btn-outline-white my-0" type="button"></button>
            </div>
          </form>
  
        </div>
        <!--Grid column-->
  
      </div>
      <!--Grid row-->
  
    </div>
    <!-- Footer Elements -->
  
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->
</div>

</body>
</html>
