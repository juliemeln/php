<?php
    session_start();


if (isset($_POST)) {
    if (!empty($_POST['name'])&& (!empty($_POST['psw']))) {
        $name = htmlspecialchars($_POST['name']);
        $psw = htmlspecialchars($_POST['psw']);
    } else {
        $_SESSION['msg'] = 'error';
    }
    session_write_close();
} else {
    $msg = $_SESSION['msg'];
}

?>



<html>
<head>
    <meta charset="UTF-8">
    <title>регистрация</title>
</head>
<body>
<form action="" method="POST">
    <?php echo $msg ?>
    <label for="name">Name</label><input type="text" name="name" id="name">
    <label for="psw">Password</label><input type="password" name="psw" id="psw">
    <input type="submit">
</form>

</body>
</html>
