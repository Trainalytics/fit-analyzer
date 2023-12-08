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

echo "<table><tbody>";
foreach ($data as $values) {
	foreach ($values as $v) {
		echo "<td>$v</td>";
	}
	echo "</tr>";
}
echo "</thead></table>";
