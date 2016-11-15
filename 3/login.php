<?php
require_once "func.php";
$name = $psw = "";

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = clear($_POST["name"]);
    $psw = clear($_POST["psw"]);
}

//if (isset($_POST)) {
//
//    if (!empty($name)&& (!empty($psw))) {
//        echo "не пустые";
//        $name = clear($_POST['name']);
//        $psw = clear($_POST['psw']);
//        $servername = "localhost";
//        $username = "root";
//        $password = "root";
//        $dbname = "members";
//        echo $psw;
//// Create connection
//        $conn = new mysqli($servername, $username, $password, $dbname);
//// Check connection
//        if ($conn->connect_error) {
//            die("Connection failed: " . $conn->connect_error);
//        }
//
//        $sql = "INSERT INTO users (id, name, password)
//VALUES ('', '$name', '$psw')";
//
//        if ($conn->query($sql) === TRUE) {
//            echo "New record created successfully";
//        } else {
//            echo "Error: " . $sql . "<br>" . $conn->error;
//        }
//
//        $conn->close();
//
//
//    } else {
//        $_SESSION['msg'] = 'error';
//        echo "заполните поля";
//    }
//    session_write_close();
//} else {
//    $msg = $_SESSION['msg'];
//    header('Location: ' . $_SERVER['SCRIPT_NAME'], true, 302);
//}
//
//
//?>

<html>
<head>
    <meta charset="UTF-8">
    <title>регистрация</title>
</head>
<body>
<form action="" method="POST">

    <label for="name">Name</label><input type="text" name="name" id="name">
    <label for="psw">Password</label><input type="password" name="psw" id="psw">
    <input type="submit" name="submit" value="Submit">
</form>
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $psw;
echo "<br>";

?>
</body>
</html>
