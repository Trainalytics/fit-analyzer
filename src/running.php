<?php

use fitparse\FITFile;

require __DIR__ . 'FITFile.php';

try {
	$file = '../activity/running.fit';
	$options = [
		// Just using the defaults so no need to provide
		//		'fix_data'	=> [],
		//		'units'		=> 'metric',
		//		'pace'		=> false
	];

	$fitFile = new FITFile(__DIR__ . $file, $options);
} catch (\Exception $e) {
	echo ('Caught exception: ' . $e->getMessage());
	die();
}

// Create an array of lat/long coordiantes for the map
$position_lat = $fitFile->data_mesgs['record']['position_lat'];
$position_long = $fitFile->data_mesgs['record']['position_long'];
$lat_long_combined = [];
foreach ($position_lat as $key => $value) {  // Assumes every lat has a corresponding long
	$lat_long_combined[] = '[' . $position_lat[$key] . ',' . $position_long[$key] . ']';
}

echo ($position_lat);

// Date with Google timezoneAPI removed
$date = new DateTime('now', new DateTimeZone('UTC'));
$date_s = $fitFile->data_mesgs['session']['start_time'];
$date->setTimestamp($date_s);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trainalytics - Running</title>
</head>

<body>

</body>

</html>