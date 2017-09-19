<?php
	session_start();
	
	require_once 'functions.php';
  
	echo <<<_END
		<!DOCTYPE html>\n
		<html>
			<head>
				<style>
					@import url('styles.css');
				</style>
				<script>
					function validate(form) 
					{
						fail = validateLogin(form.login.value);
						fail += validatePassword(form.password.value);
						if(fail == "")
						{
							return true;
						}
						else
						{
							alert(fail);
							return false;
						}
					}
					function validateLogin(field)
					{
						if (field == ""      ||
						    field.length < 5 ||
							/[^a-zA-Z0-9_-]/.test(field))
						{						
							return "Login is not correct. ";
						}
						return "";
					}
					function validatePassword(field) 
					{
						if (field == ""      ||
						    field.length < 6 ||
							/[^a-zA-Z0-9_-]/.test(field))
						{						
							return "Password is not correct.";
						}
						return "";
					}
				 </script>
			</head>
			<body>
_END;
?>