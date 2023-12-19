<?php

use fitparse\FITFile;

require __DIR__ . '\FITFile.php';

try {
	// $file = 'running/running17_12.fit';
	$file = 'cycling/FTP-S1-1.fit';
	$options = [
		// Just using the defaults so no need to provide
		//		'fix_data'	=> [],
		//		'units'		=> 'metric',
		//		'pace'		=> false
	];

	$filePath = 'd:\\Git\\github\\Trainalytics\\fit-analyzer\\activity\\';
	$fitFile = new FITFile($filePath . $file, $options);
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
	<title>Trainalytics - Analyzer</title>
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
			<th>Allure</th>
			<th>Total Ascent</th>
			<th>Avg Temperature</th>
			<th>Avg Vertical Oscillation</th>
			<th>Workout Name</th>
			<th>Average Heart Rate</th>
			<th>Calories</th>
		</tr>
		<tr>
			<td><?= $fitFile->manufacturer() . ' ' . $fitFile->product(); ?></td>
			<td><?= $fitFile->sport(); ?></td>
			<td><?= $date->format('D, d-M-y H:i:s'); ?></td>
			<td><?= gmdate('H:i:s', $fitFile->data_mesgs['session']['total_elapsed_time']) ?></td>
			<td>
				<?=
				max($fitFile->data_mesgs['record']['distance'])
				?>
				km
			</td>
			<td><?= $fitFile->data_mesgs['session']['enhanced_avg_speed'] ?> km/h</td>
			<td><?= $fitFile->data_mesgs['session']['total_ascent'] ?> m</td>
			<td><?= $fitFile->data_mesgs['session']['avg_temperature'] ?>°C</td>
			<td><?= $fitFile->data_mesgs['session']['avg_vertical_oscillation'] / 10 ?> cm</td>
			<td><?= $fitFile->data_mesgs['workout']['wkt_name'] ?></td>
			<td><?= $fitFile->data_mesgs['session']['avg_heart_rate'] ?> bpm</td>
			<td><?= $fitFile->data_mesgs['session']['total_calories'] ?> kcal</td>
		</tr>

		<?php

		echo '<pre>';
		echo '<h2>session :</h2>';
		var_dump($fitFile->data_mesgs['session']);
		// echo '<h2>activity :</h2>';
		// var_dump($fitFile->data_mesgs['activity']);
		// echo '<h2>workout :</h2>';
		// var_dump($fitFile->data_mesgs['workout']);
		// echo '<h2>split :</h2>';
		// var_dump($fitFile->data_mesgs['split']);
		// echo '<h2>split_summary :</h2>';
		// var_dump($fitFile->data_mesgs['split_summary']);
		// echo '<h2>file_id :</h2>';
		// var_dump($fitFile->data_mesgs['file_id']);
		// echo '<h2>device_info :</h2>';
		// var_dump($fitFile->data_mesgs['device_info']);
		// echo '<h2>user_profile :</h2>';
		// var_dump($fitFile->data_mesgs['user_profile']);
		// echo '<h2>record HR :</h2>';
		// var_dump($fitFile->data_mesgs['record']['heart_rate']);
		// $fitFile->showDebugInfo();
		?>
	</table>
</body>

</html>