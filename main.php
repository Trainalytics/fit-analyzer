<?php
$filename = 'activity/vma-s5-4_data_lap.csv';
$data = [];

$f = fopen($filename, 'r');

while (($row = fgetcsv($f)) !== false) {
	$data[] = $row;
}

fclose($f);

echo '<pre>';
var_dump($data[0]);

$datetimeFormat = 'H:i:s';
$date = new DateTime();
$date->setTimestamp('1070881939');
echo ($date->format($datetimeFormat));

echo "<table><tbody>";
foreach ($data as $values) {
	foreach ($values as $v) {
		echo "<td>$v</td>";
	}
	echo "</tr>";
}
echo "</thead></table>";

$lap_timestamp = [];
$lap_startTime = [];
$lap_startPositionLat = [];
$lap_startPositionLong = [];
$lap_endPositionLat = [];
$lap_endPositionLong = [];

function parseLapData($data)
{
	global $lap_timestamp, $lap_startTime, $lap_startPositionLat, $lap_startPositionLong, $lap_endPositionLat, $lap_endPositionLong;

	for ($i = 0; $i < count($data); $i++) {
		if (isset($data[$i])) {
			if (isset($data[$i][0]) && is_numeric($data[$i][0])) {
				$lap_timestamp[] = $data[$i][0];
			}
			if (isset($data[$i][1]) && is_numeric($data[$i][1])) {
				$lap_startTime[] = $data[$i][1];
			}
			if (isset($data[$i][2]) && is_numeric($data[$i][2])) {
				$lap_startPositionLat[] = $data[$i][2];
			}
		} else {
			return;
		}
	}
}

var_dump($lap_timestamp);

var_dump($lap_startTime);
var_dump($lap_startPositionLat);


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

$latitudeSemicircles = 554902588;
$latitudeDegrees = semicirclesToDegrees($latitudeSemicircles);
echo "Latitude in degrees : " . $latitudeDegrees . "<br>";

$longitudeSemicircles = 75227728;
$longitudeDegrees = semicirclesToDegrees($longitudeSemicircles);
echo "Longitude in degrees : " . $longitudeDegrees;
