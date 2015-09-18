<?php

	$link = mysqli_connect("localhost","cl31-example-swp", "MrT!qB6WM", "cl31-example-swp");
	if (mysqli_connect_error()) {
		die("Could not connect to database"); // Kill the code here and show the message
	}

	// $query = "INSERT INTO `users` (`name`,`email`,`password`) VALUES('Ian','test@test.com','fasd')";
	//$query = "UPDATE `users` SET `email` = 'ian@hotmail.com' WHERE `id` = 3 LIMIT 1 ";
	//$query = "UPDATE `users` SET `name` = 'Tj1' WHERE `name` = 'Ian'";

	//mysqli_query($link, $query);
	
	//$query = "SELECT * FROM users WHERE name ='TJ'";
	//$query = "SELECT * FROM users WHERE name LIKE '%1'"; // name containing 1 after that 
	//$query = "SELECT * FROM users WHERE name ='TJ' AND password != '' "; // AND and OR
	//$query = "SELECT `name` FROM users";
	$query = "UPDATE `users` SET name='Ian O\'Neil' WHERE id = 3 LIMIT 1";

	mysqli_query($link, $query);



	/*
	if ($result = mysqli_query($link, $query)) {
		//echo "It worked";
		while ($row = mysqli_fetch_array($result)) {
		//$row = mysqli_fetch_array($result); // It is mysqli not mysql
		print_r($row);
		}

	} else {
		echo "It failed";
	}
	*/
?>
