<?php
	require_once 'header.php';
	
	$login = $password = "";

	if (isset($_POST['login']))
	{
		$login = $_POST['login'];
		$password = $_POST['password'];

		$result = queryMySQL("SELECT Login, Password FROM Profiles 
							  WHERE Login='$login' AND Password='$password'");

		if ($result->num_rows != 0)
		{
			$_SESSION['Login'] = $login;
			$_SESSION['Password'] = $password;
		}
	}
	
	echo <<<_END
	<ul>
	  <li><a href='index.php'>Home</a></li>
	  <li><a href='signup.php'>Sign up</a></li>
	  <li><a class='active' href='login.php'>Log in</a></li>
	</ul>
_END;
	
	echo <<<_END
	<div>
		<form method='post' action='login.php'>
			<label>Login</label>
				<input type='text' name='login' value='$login'>

			<label>Password</label>
				<input type='text' name='password' value='$password'>
	  
			<input type='submit' value='submit'>
		</form>
	</div>
_END;
	
	echo <<<_END
		</body>
	</html>
_END;
?>