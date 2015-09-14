<?php
$servername = "localhost";
$username = "mybookab_admin";
$password = '3;Q1h]9$G[G(';
$port= "3306";
$database="mybookab_able";

// Create connection
$conn = new mysqli("localhost", $username,$password, $database);

// Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";



$sql = "SELECT id, name, createdDate FROM eventStatusTypes";

$result = $conn->query($sql);

echo "<br>Test";
echo $result->num_rows;
echo "<br/>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " | Created:" . $row["createdDate"]. "<br>";
    }
} else {
    echo "0 results";
}






//$conn->close();
echo "</body></html>";

 ?> 