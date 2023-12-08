<?php
$filename = 'activity/running_data.csv';
$data = [];

$f = fopen($filename, 'r');

while (($row = fgetcsv($f)) !== false) {
	$data[] = $row;
}

fclose($f);

// echo '<pre>';
// var_dump($data[0]);

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
