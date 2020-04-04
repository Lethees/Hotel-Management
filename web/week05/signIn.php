<?php
session_start();

$badLogin = false;

// First check to see if we have post variables, if not, just
// continue on as always.

if (isset($_POST['txtUser']) && isset($_POST['txtPassword']))
{
	// they have submitted a username and password for us to check
	$username = $_POST['txtUser'];
	$password = $_POST['txtPassword'];

	// Connect to the DB
	require("connection.php");
	$db = get_db();

	$query = 'SELECT password FROM admin WHERE username=:username';

	$statement = $db->prepare($query);
	$statement->bindValue(':username', $username);

	$result = $statement->execute();

	if ($result)
	{
		$row = $statement->fetch();
		$hashedPasswordFromDB = $row['password'];

		// now check to see if the hashed password matches
		if (password_verify($password, $hashedPasswordFromDB))
		{
			// password was correct, put the user on the session, and redirect to home
			$_SESSION['username'] = $username;
			header("Location: management.php");
			die(); // we always include a die after redirects.
		}
		else
		{
			$badLogin = true;
		}

	}
	else
	{
		$badLogin = true;
	}
}

// If we get to this point without having redirected, then it means they
// should just see the login form.
?>

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
        <p>Sign in to Access the Admin Panel</p> 
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
<?php
if ($badLogin)
{
	echo "Incorrect username or password!<br /><br />\n";
}
?>

<h1>Please sign in below:</h1>

<form id="mainForm" action="signIn.php" method="POST" class="was-validated">
	<div class="form-group form-check">
		<input type="text" id="txtUser" class="form-control" name="txtUser" placeholder="Username" required>
		<label class="form-check-label" for="txtUser">Username</label>
		<div class="valid-feedback">Valid.</div>
    	<div class="invalid-feedback">Username can't be blank!</div>
	</div>
	<br>
	<div class="form-group form-check">
		<input type="password" id="txtPassword" class="form-control" name="txtPassword" placeholder="Password" required>
		<label class="form-check-label" for="txtPassword">Password</label>
		<div class="valid-feedback">Valid.</div>
   	 	<div class="invalid-feedback">Password can't be blank!</div>
	</div>
	<br>
	<div class="form-group justify-content-end" style="float: right;">
	<label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
	</div>
	<div class="form-group">
	<button type="submit" class="btn btn-primary">Sign In</button>
	</div>
</form>

<br /><br />
<div>
Don't have an account yet? <a href="signUp.php">Sign up</a> for a new account.
</div>

</div>
<?
	require("footer.php");
?>
</body>
</html>