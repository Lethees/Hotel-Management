<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sign in</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="week05.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>    
    <div class="jumbotron text-center">
        <h1>Welcome to Pines Inn, Annandale, VA</h1>
        <p>Register to be an Admin below</p> 
    </div>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-end">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Pines Inn</a>
            </li>
        </ul>
        <form class="form-inline" action="">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-success" type="submit">Search</button>
        </form>
    </nav>
    <br>


	<div class="container">

<form id="mainForm" action="createAccount.php" method="POST">
	<div class="form-group form-check">
		<input type="text" id="txtUser" class="form-control form-check-input" name="txtUser" placeholder="Username" required>
		<label class="form-check-label" for="txtUser">Username</label>
		<div class="valid-feedback">Valid.</div>
    	<div class="invalid-feedback">Username can't be blank!</div>
	</div>
	<br>
	<div class="form-group form-check">
		<input type="password" id="txtPassword" class="form-control form-check-input" name="txtPassword" placeholder="Password" required>
		<label class="form-check-label" for="txtPassword">Password</label>
		<div class="valid-feedback">Valid.</div>
   	 	<div class="invalid-feedback">Password can't be blank!</div>
	</div>
	<br>
	<div class="form-group form-check" style="float: right;">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required>I agree the <a href="#">Pine Inn Security Agreement</a>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div>
	<button type="submit" class="btn btn-primary">Create Account</button>
	<button class="btn btn-secondary" onclick="window.location.href = 'management.php';">Return to the Menu</button> 
</form>


</div>
<?
	require("footer.php");
?>
</body>
</html>
</html>