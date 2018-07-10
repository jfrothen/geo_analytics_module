<?php
$dbhost = 'localhost:3036';
$dbuser = 'root';
$dbpass = '';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, "geo_data");

if(! $conn ) {
    die('Could not connect: ' . mysqli_error());
}

$sql = 'SELECT amount, latitude, longitude FROM donations';
$retval = mysqli_query( $sql, $conn );

if(! $retval ) {
    die('Could not get data: ' . mysqli_error());
}


while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {

}

echo "Fetched data successfully\n";

mysqli_close($conn);
?>