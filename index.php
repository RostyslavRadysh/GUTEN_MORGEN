<?php
	require_once 'header.php';
	
	$name = "guest";
	if(isset($_SESSION['login']))
	{
		$name = $_SESSION['login'];
	}
	
	echo <<<_END
	<ul>
	  <li><a class='active' href='index.php'>Home</a></li>
	  <li><a href='signup.php'>Sign up</a></li>
	  <li><a href='login.php'>Log in</a></li>
	</ul>
_END;
	
	echo <<<_END
	<h1>Hello $name. What's up?<h5>
_END;
	
	echo <<<_END
		</body>
	</html>
_END;
?>