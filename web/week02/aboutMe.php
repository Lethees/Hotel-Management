<!DOCTYPE html>
<html lang="en">
<head>
  <title>About Fangyi Li</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="myHomePage.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>About Fangyi Li</h1>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="myHomePage.php">Hotel Management</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="myHomePage.php">Home</a></li>
        <li><a href="aboutMe.php">About me</a></li>
        <li><a href="assignment.php">Assignments</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h2>Photo of me:</h2>
      <div class="myImg"><img src="Fangyi Li.jpg" alt="Fangyi Li" style="width:330px;height:430px;"></div>
      <h3>Related Links</h3>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="https://www.facebook.com/profile.php?id=100011772437006">My Facebook Page</a></li>
        <li><a href="http://www.byui.edu/">BYU-Idaho</a></li>
      </ul>
      <hr class="hidden-sm hidden-md hidden-lg">
    </div>
    <div class="col-sm-8">
      <h2>Long in Short</h2>
      <div class="friedChickenImg"><img src="FriedChicken.jpg" alt="FriedChicken" style="width:900px;height:506px;"></div>
      <p>My name is Fangyi Li, a junior in BYU-Idaho. I am currently studying Software Engineering and hoping to find an internship for next semester. Cooking is my most notable talent and I claim myself a chef. Cajun, fried chicken, BBQ, Chinese, Japanese, Korean...You name it, I will make it.</p>
      <p></p>
      <br>
    </div>
  </div>
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
