<?php
$type = $_REQUEST['type'];

// set the vehicle variables
// based on the type value from the URL
if ($type == 'car') {
	$vehicle = array(
		'make' => 'Volkswagen',
		'model' => 'Jetta SE',
		'year' => '2012',
	);
} 
elseif ($type == 'truck') {
	$vehicle = array(
		'make' => 'Cheverolet',
		'model' => 'Silverado 1500',
		'year' => '2015',
	);
}

else {
	$vehicle = array(
		'make' => '',
		'model' => '',
		'year' => '',
	);
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $vehicle['year'] .' '. $vehicle['make'] .' '. $vehicle['model']; ?></title>
	</head>
	<body>

		<h1>Vehicle Information for <?php echo $vehicle['year'] .' '. $vehicle['make'] .' '. $vehicle['model']; ?></h1>
		<p><strong>Type:</strong> <?php echo ucfirst($type); ?></p>
		<p><strong>Make:</strong> <?php echo $vehicle['make']; ?></p>
		<p><strong>Model:</strong> <?php echo $vehicle['model']; ?></p>
		<p><strong>Year:</strong> <?php echo $vehicle['year']; ?></p>
	</body>
</html>