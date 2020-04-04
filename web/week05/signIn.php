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
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
			<form id="mainForm" action="signIn.php" method="POST">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="txtUser" placeholder="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" name="txtPassword" placeholder="password">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<?php
if ($badLogin)
{
	echo "Incorrect username or password!<br /><br />\n";
}
?>
					<div class="form-group">
						<input type="submit" value="Sign in" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="signUp.php">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
