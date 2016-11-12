<?php
    require_once login.php;
?>


<html>
<head>
    <meta charset="UTF-8">
    <title>регистрация</title>
</head>
<body>
<form action="" method="POST">
    <?php echo $msg ?>
    <label>Name</label><input type="text" name="name">
    <label>Password</label><input type="password" name="psw">
    <input type="submit">
</form>

</body>
</html>
