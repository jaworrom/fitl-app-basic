<?php

$id = $_REQUEST['id'];

// $daycare = array(
// 		'business_name' => '',
// 		'care_type' => '',
// 		'street_address' => '',
// 		'street_address2' => '',
// 		'city' => '',
// 		'state' => '',
// 		'zip' => '',
// 		'contact_person' => '',
// 		'phone' => '',
// 		'contact_email' => '',
// 		'business_description' => '',
// 		'logo' => '',

// 	);

// Database connection credentials
$servername = 'localhost';
$username = 'homestead';
$password = 'secret';


// Create connection
$connection = new mysqli($servername, $username, $password);

// Check for an error
if ($connection->connect_error){
	echo 'Connection failed: ' . $connection->connect_error;
	exit;
}

// Connect to the "fitl" database
$connection->select_db('fitl');

// Query to select the object
$sql = 'SELECT * FROM daycares WHERE id = ' . $id;

// Execute the query
$result = $connection->query($sql);

// Check for and retrieve the object
if ($result->num_rows > 0) {
	$daycare = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $daycare['business_name'] . ' - ' . $daycare['care_type'] . ' on Daycare Hero.' ?></title>
	</head>
	<body>

		<h1><?php echo $daycare['business_name']; ?></h1>
		<p><strong>Care Type:</strong> <?php echo $daycare['care_type']; ?></p>
		<p><strong>Description:</strong> <?php echo $daycare['business_description']; ?></p>
		<hr>
		<h3>Location Information:</h3>
		<p><strong>Address:</strong> <?php echo $daycare['street_address']; ?></p>
		<p><strong>Address 2:</strong> <?php echo $daycare['street_address2']; ?></p>
		<p><strong>City:</strong> <?php echo $daycare['city']; ?></p>
		<p><strong>State:</strong> <?php echo $daycare['state']; ?></p>
		<p><strong>Zip:</strong> <?php echo $daycare['zip']; ?></p>
		<p><strong>Administrator:</strong> <?php echo $daycare['contact_person']; ?></p>
		<p><strong>Call Now:</strong> <?php echo $daycare['phone']; ?></p>
	</body>
</html>