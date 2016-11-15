<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "members";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (id, name, password)
VALUES ('', 'Doe', 'johampom')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


<!--$db_hostname = 'localhost';-->
<!--$db_database = 'members';-->
<!--$db_username = 'root';-->
<!---->
<!--$connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);-->
<!--if ($connection->connect_error) die($connection ->connect_error);-->
<!---->
<!--$stmt = $connection->prepare("INSERT INTO users VALUE ('name')");-->
<!--$stmt = $connection->prepare("SELECT name, password FROM users WHERE name = ? AND password = ?");-->
<!---->
<!--$stmt->bind_param(1, $name);-->
<!--$stmt->bind_param(2, $psw);-->
<!--$stmt->execute();-->
<!--$stmt->close();-->
<!--$stmt->-->
<!--$row = $stmt->fetch();-->
<!---->
<!---->
<!---->
<!--//        $query = "SELECT * FROM users WHERE password='$psw' AND username='$name'";-->
<!--//        $result = $connection>query($query);-->
<!--//        if(!$result) die($connection>error);-->
<!---->
<!---->
<!---->
<!--$connection->close();-->
