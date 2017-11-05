<!DOCTYPE html>
<html lang="en">
	<head>
		<title>CHEF</title>
	</head>

	<body>
		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$logid = $_POST['logid'];
			$logpw = $_POST['logpw'];
		}
		$filename = file("id.txt");
		$check = TRUE;

		// Confirm the registered ID and password
		foreach ($filename as $info){
			$information = explode(";" , $info);
			if ($information[0] == $logid && $information[1] == $logpw){
				$check = FALSE;
			}
		}

		// Check Blank
		if (!isset($logid) || $logid=='' || !isset($logpw) || $logpw==''){
		?>
		<h1>Sorry</h1>
		<p>You didn't fill out the form completely. <a href="/login/login.html">Try again?</a></p>
		
		<?php 	// Confirm the registered ID and password. If not...
		} else if ($check){
		?>
		<h1>Sorry</h1>
		<p>Check your ID and PW. <a href="/login/login.html">Try again?</a></p>
		
		<?php
		} else {
		?>
		<ul> 
			<li>ID: <?= $logid ?></li>
			<li>PW: <?= $logpw ?></li>
		</ul>
		<?php
		}
		?>

	</body>
</html>