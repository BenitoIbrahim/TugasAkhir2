<?php

// Database connection settings
$host = 'localhost';
$username = '';
$password = '';
$dbname = 'TugasAkhir';

// Connect to database
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define the variables to calculate partial correlation
$x = 'pekerjaan'; // column name for variable X
$y = 'pendapatan'; // column name for variable Y
$z = 'pendidikan'; // column name for variable Z (partialling out)

// Define the table name
$table = 'your_table';

// Query to retrieve data
$query = "SELECT $x, $y, $z FROM $table";
$result = $conn->query($query);

// Check if query was successful
if (!$result) {
    die("Query failed: " . $conn->error);
}

// Initialize arrays to store data
$data_x = array();
$data_y = array();
$data_z = array();

// Fetch data and store in arrays
while ($row = $result->fetch_assoc()) {
    $data_x[] = $row[$x];
    $data_y[] = $row[$y];
    $data_z[] = $row[$z];
}

// Calculate partial correlation using the following formula:
// r_xy.z = (r_xy - r_xz * r_yz) / sqrt((1 - r_xz^2) * (1 - r_yz^2))

// Calculate correlations between variables
$r_xy = correlation($data_x, $data_y);
$r_xz = correlation($data_x, $data_z);
$r_yz = correlation($data_y, $data_z);

// Calculate partial correlation
$r_xy_z = ($r_xy - $r_xz * $r_yz) / sqrt((1 - pow($r_xz, 2)) * (1 - pow($r_yz, 2)));

// Print result
echo "Partial correlation between $x and $y, controlling for $z: " . number_format($r_xy_z, 4) . "\n";

// Close database connection
$conn->close();

// Function to calculate correlation between two arrays
function correlation($arr1, $arr2) {
    $n = count($arr1);
    $sum_x = array_sum($arr1);
    $sum_y = array_sum($arr2);
    $sum_x_squared = array_sum(array_map('pow', $arr1, array_fill(0, $n, 2)));
    $sum_y_squared = array_sum(array_map('pow', $arr2, array_fill(0, $n, 2)));
    $sum_xy = array_sum(array_map(function($x, $y) { return $x * $y; }, $arr1, $arr2));
    $r = ($n * $sum_xy - $sum_x * $sum_y) / sqrt(($n * $sum_x_squared - pow($sum_x, 2)) * ($n * $sum_y_squared - pow($sum_y, 2)));
    return $r;
}

?>