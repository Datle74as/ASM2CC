<?php
$conn_string="ec2-34-206-31-217.compute-1.amazonaws.com port=5432 dbname=d81o9gt93onhjj user=ojutjxfsqlhlxg password=efc63bdbdfdbe48ed3ddc4c926f02a5ebe9fdf6cbbfe08fa7340e1a61982a049";
$dbconn= pg_connect($conn_string);
if (isset($_POST['username'])) {
	# code...
	$username = $_POST['username'];
}

if (isset($_POST['pass'])) {
	# code...
	$pass = $_POST['pass'];
}
$sql = "SELECT * FROM tblAccount WHERE _user='".$username."' AND _pass='".$pass."'";
$result =pg_query($dbconn, $sql);
$row = pg_num_rows($result);
if ($row==1)
{
	header('location: product/index.html');
}
else
{
	echo "Login failed";
}
?>
