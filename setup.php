<?php
	require_once 'functions.php';
	
	createTable('Profiles',
              'Login VARCHAR(16),
              Password VARCHAR(4096)');
?>