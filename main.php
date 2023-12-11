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

// Base data about lap
$lap_timestamp = [];
$lap_startTime = [];
$lap_startPositionLat = [];
$lap_startPositionLong = [];
$lap_endPositionLat = [];
$lap_endPositionLong = [];
$lap_totalElapsedTime = [];
$lap_totalDistance = [];
$lap_totalStrides = [];
$lap_avgSpeed = [];
$lap_maxSpeed = [];
$lap_minAltitude = [];
$lap_maxAltitude = [];
$lap_totalAscent = [];
$lap_totalDescent = [];
$lap_avgHeartRate = [];
$lap_maxHeartRate = [];
$lap_avgTemperature = [];
$lap_maxTemperature = [];

// Other properties

parseLapData($data);

/**
 * Function to parse lap data
 * @param array $data - array of data
 */
function parseLapData($data)
{
	$datetimeFormat = 'H:i:s';
	global
		$lap_timestamp, $lap_startTime, $lap_startPositionLat, $lap_startPositionLong, $lap_endPositionLat, $lap_endPositionLong,
		$lap_totalElapsedTime, $lap_totalDistance, $lap_totalStrides, $lap_avgSpeed, $lap_maxSpeed, $lap_minAltitude, $lap_maxAltitude,
		$lap_totalAscent, $lap_totalDescent, $lap_avgHeartRate, $lap_maxHeartRate, $lap_avgTemperature, $lap_maxTemperature;

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
			if (isset($data[$i][9]) && is_numeric($data[$i][9])) {
				$lap_totalStrides[] = $data[$i][9];
			}
			if (isset($data[$i][10]) && is_numeric($data[$i][10])) {
				$lap_avgSpeed[] = $data[$i][10];
			}
			if (isset($data[$i][11]) && is_numeric($data[$i][11])) {
				$lap_maxSpeed[] = $data[$i][11];
			}
			if (isset($data[$i][12]) && is_numeric($data[$i][12])) {
				$lap_minAltitude[] = $data[$i][12];
			}
			if (isset($data[$i][13]) && is_numeric($data[$i][13])) {
				$lap_maxAltitude[] = $data[$i][12];
			}
		} else {
			return;
		}
	}
}

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
