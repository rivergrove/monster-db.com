<?

	/* File purpose: Connect to a database using db credentials. Actual db login information obscured. File stored in a private folder for security. */

	$host = "host";
	$username = "username";
	$user_pass = "password";
	$database_in_use = "db";

	$conn = new mysqli($host, $username, $user_pass, $database_in_use);

	if ($conn->connect_errno) {
	    echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
	}

?>