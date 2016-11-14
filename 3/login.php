<?php
function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);

    return $value;
}
    session_start();


if (isset($_POST)) {
    $name = clean($_POST['name']);
    $psw = clean($_POST['psw']);
    if (!empty($name)&& (!empty($psw))) {
        echo "не пустые";

    } else {
        $_SESSION['msg'] = 'error';
    }
    session_write_close();
} else {
    $msg = $_SESSION['msg'];
    header('Location: ' . $_SERVER['SCRIPT_NAME'], true, 302);
}

?>



<html>
<head>
    <meta charset="UTF-8">
    <title>регистрация</title>
</head>
<body>
<form action="" method="POST">
    <p><?php echo $msg; ?></p>
    <label for="name">Name</label><input type="text" name="name" id="name">
    <label for="psw">Password</label><input type="password" name="psw" id="psw">
    <input type="submit">
</form>

</body>
</html>
