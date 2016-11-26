
<?php
session_start();
require_once("database.php");
require_once("clean.php");


//проверка submit
if (isset($_POST['submit'])) 
{
    //проверка полей
    if (!empty($_POST['user']) && !empty($_POST['psw'])) 
    {
        //очистка
        $name = clean($_POST['user']);
        $psw = clean($_POST['psw']);
        
            //выборка имени и пароля из БД
            try {
                $stmt = $pdo->prepare("SELECT name,password FROM users WHERE name=:name AND password=:password ");
                $stmt->bindParam(':name',$name);
                $stmt->bindParam(':password',$psw);
                $stmt->execute();
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $row = $stmt->fetch();
            
            } catch (PDOException $e) {
                echo $e->getMessage();
                exit;
            }
            //если совпадает, то переход в профиль
            if (!empty($row)) {
                $_SESSION['user'] = $name;
                header('Location: profile.php');
            }else {
                $authErr = "НЕ верно заполнены логин или пароль";
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
<h2>Войти:</h2>
<form action="" method="POST">
    <p style="color:red">
    <?php print $emptyErr; ?>
    <?php print $authErr; ?>

    </p>
        <label>Пользователь </label><input name="user" type="text"></br>
        <label>Пароль </label><input type="password" name="psw"></br>
        <input type="submit" value="Войти" name="submit">
</form>
<p>Не являетесь зарегистрированным пользователем? Пожалуйста <a href="register.php">зарегистрируйтесь</a>.</p>

</body>
</html>

