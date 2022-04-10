<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "dbklinikfitria";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

/*
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

//insert data 
$query= "INSERT INTO dokter VALUES ('D5', 'Dr.E')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
*/

$query = "select * from dokter";
$res = mysqli_query($conn, $query);
while ($data = mysqli_fetch_array($res)){
  echo $data ['IDDOkter']. "-". $data ['Nama']."<br>";
}
?>