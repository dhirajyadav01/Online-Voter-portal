<?php
header('Content-Type: application/json');

$conn = mysqli_connect("localhost","root","","voterportal");

$sqlQuery = "SELECT Party, SUM(Votes) as TotalVotes FROM candidatedetails GROUP BY Party;";


$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>