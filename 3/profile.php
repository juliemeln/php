<?php
function clear($value = "") {
    $value = trim($value);
    $value = strip_tags($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);

    return $value;
}

?>


<html>
<head>
    <meta charset="UTF-8">
    <title>регистрация</title>
</head>
<body>
    <form action="" method="POST">

        <label for="name">Имя</label><input type="text" name="name" id="name"></br>
        <label for="age">Возраст</label><input type="text" name="age" id="age"></br>
        <label for="about">О себе</label>    <textarea name="about"></textarea></br>
        <input type="submit">
        <label for="img">Фотография</label><input type="file" name="img" id="img"></br>

    </form>

</body>
</html>


