
<?php
session_start();
require_once("database.php");
require_once("clean.php");

//проверка submit
if (isset($_POST['submit'])) {
    if (!empty($_POST['user']) && !empty($_POST['psw'])) {
    
    $name = clean($_POST['user']);
    $psw = clean($_POST['psw']);
    
    //проверка ввода данных

        if (!preg_match("/^[a-zA-Z]+$/",$name)) 
        {
            $error = true;
            $nameErr = "Только латинские буквы";
        }
        if (!$error) 
        {
        //вносим данные
        try {
            $sql = 'INSERT INTO users (name, password) VALUES (?, ?)';
            $s = $pdo->prepare($sql);
            $s->bindParam(1, $name);
            $s->bindParam(2, $psw);
            $s->execute();
           // Проверяем, есть ли ошибки
            if ($s)
            {
                echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a>";
            } else {
                echo "Ошибка! Вы не зарегистрированы.";
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit;
        }
    }else{
        $nameErr="Только латинские буквы";
    }
        
    } else {
     $emptyErr = "Все поля должны быть заполнены";
    }
}

?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>

<h2>Регистрация</h2>
<form action="" method="POST" enctype="multipart/form-data">
    <p style="color:red">
        <?php print $emptyErr; ?>
        <?php print $errorMsg; ?>
        <?php print $nameErr; ?>
    </p>
   
        <label>Пользователь </label><input name="user" type="text"></br>
        <label>Пароль </label><input type="password" name="psw"></br>
        <input type="submit" value="Зарегистрироваться" name="submit">
    
</form>
<p>На главную <a href="index.php">войти</a>.</p>

</body>
</html>

