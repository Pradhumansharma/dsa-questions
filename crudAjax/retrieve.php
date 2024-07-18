<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('dbConnection.php');

$sql = "SELECT * FROM student ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}
//Returning JSON formating data as Response to Ajax call

echo json_encode($data);
