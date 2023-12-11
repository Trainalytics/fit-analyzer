<?php

// Open file and get data
$filename = 'activity/vma-s5-4_data_lap.csv';
$data = [];

$f = fopen($filename, 'r');

while (($row = fgetcsv($f)) !== false) {
	$data[] = $row;
}

fclose($f);

echo '<pre>';
var_dump($data[0]);

echo "<table><tbody>";
foreach ($data as $values) {
	foreach ($values as $v) {
		echo "<td>$v</td>";
	}
	echo "</tr>";
}
echo "</tbody></table>";

$lap_timestamp = [];
$lap_startTime = [];
$lap_startPositionLat = [];
$lap_startPositionLong = [];
$lap_endPositionLat = [];
$lap_endPositionLong = [];
$lap_totalElapsedTime = [];
$lap_totalDistance = [];

parseLapData($data);

/**
 * Function to parse lap data
 * @param array $data - array of data
 */
function parseLapData($data)
{
	$datetimeFormat = 'H:i:s';
	global
		$lap_timestamp,
		$lap_startTime,
		$lap_startPositionLat,
		$lap_startPositionLong,
		$lap_endPositionLat,
		$lap_endPositionLong,
		$lap_totalElapsedTime,
		$lap_totalDistance;

	$date = new DateTime();

	for ($i = 0; $i < count($data); $i++) {
		if (isset($data[$i])) {
			if (isset($data[$i][0]) && is_numeric($data[$i][0])) {
				$date->setTimestamp($data[$i][0]);
				$lap_timestamp[] = $date->format($datetimeFormat);
			}
			if (isset($data[$i][1]) && is_numeric($data[$i][1])) {
				$date->setTimestamp($data[$i][1]);
				$lap_startTime[] = $date->format($datetimeFormat);
			}
			if (isset($data[$i][2]) && is_numeric($data[$i][2])) {
				$lap_startPositionLat[] = semicirclesToDegrees($data[$i][2]);
			}
			if (isset($data[$i][3]) && is_numeric($data[$i][3])) {
				$lap_startPositionLong[] = semicirclesToDegrees($data[$i][3]);
			}
			if (isset($data[$i][4]) && is_numeric($data[$i][4])) {
				$lap_endPositionLat[] = semicirclesToDegrees($data[$i][4]);
			}
			if (isset($data[$i][5]) && is_numeric($data[$i][5])) {
				$lap_endPositionLong[] = semicirclesToDegrees($data[$i][5]);
			}
			if (isset($data[$i][6]) && is_numeric($data[$i][6])) {
				$lap_totalElapsedTime[] = $data[$i][6];
			}
			if (isset($data[$i][8]) && is_numeric($data[$i][8])) {
				$lap_totalDistance[] = $data[$i][8];
			}
		} else {
			return;
		}
	}
}

var_dump($lap_totalElapsedTime);
var_dump($lap_totalDistance);

/**
 * Function to convert semicircles to degrees
 * @param string $semicircles - semicircles value
 * @return float semicircles converted in degrees
 */
function semicirclesToDegrees($semicircles)
{
	$degrees = ($semicircles * 180) / pow(2, 31);
	return $degrees;
}
