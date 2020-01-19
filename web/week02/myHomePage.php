<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fangyi Li's Homepage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="myHomePage.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Hotel Management PHP Project</h1>
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
        <li class="active"><a href="#">Home</a></li>
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
      <div class="myImg"><img src="https://scontent-sea1-1.xx.fbcdn.net/v/t1.0-1/p240x240/78672426_876154679453605_4950469581287194624_o.jpg?_nc_cat=104&_nc_ohc=7t0RY29leQYAX8M9YPc&_nc_ht=scontent-sea1-1.xx&_nc_tp=1002&oh=8915addaba80b288637e94259d9a7cdb&oe=5EDA8D01" alt="Fangyi Li" style="width:430px;height:430px;"></div>
      <h3>Related Links</h3>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="https://www.facebook.com/profile.php?id=100011772437006">My Facebook Page</a></li>
        <li><a href="http://www.byui.edu/">BYU-Idaho</a></li>
      </ul>
      <hr class="hidden-sm hidden-md hidden-lg">
    </div>
    <div class="col-sm-8">
      <h2>Project Proposal</h2>
      <h5>the proposal of the Hotel Management PHP Project, Jan 18, 2020</h5>
      <div class="hotelImg"><img src="A hotel.jpg" alt="hotel" style="width:752px;height:500px;"></div>
      <p>Designing and creating an online hotel management app that allows the hotel administration to add, retrieve, remove, and change the basic information of the hotel guests, such as check-in and check-out dates, their vehicle parking information, and their room numbers.  </p>
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