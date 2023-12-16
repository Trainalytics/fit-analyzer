<?php

use fitparse\FITFile;

require __DIR__ . '\FITFile.php';

try {
	$file = '/running.fit';
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
	<style>
		table {
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}

		td,
		th {
			border: 1px solid #dddddd;
			text-align: left;
			padding: 8px;
		}

		tr:nth-child(even) {
			background-color: #dddddd;
		}
	</style>
</head>

<body>
	<table>
		<tr>
			<th>Device</th>
			<th>Sport</th>
			<th>Recorded</th>
			<th>Duration</th>
			<th>Distance</th>
		</tr>
		<tr>
			<td><?= $fitFile->manufacturer() . ' ' . $fitFile->product(); ?></td>
			<td><?= $fitFile->sport(); ?></td>
			<td><?= $date->format('D, d-M-y H:i:s'); ?></td>
			<td><?= gmdate('H:i:s', $fitFile->data_mesgs['session']['total_elapsed_time']); ?></td>
			<td><?= max($fitFile->data_mesgs['record']['distance']); ?> km</td>
		</tr>
	</table>
</body>

</html>