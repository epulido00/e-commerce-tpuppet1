<?php
    require 'conexion.php';
    $message = '';
    
    if(!empty($_POST['name']) && !empty($_POST['user']) && !empty($_POST['email']) && !empty($_POST['pass'])){
        /*$sql = "INSERT INTO usuario (name, user, email, pass) VALUES (:name, :user, :email, :pass)";
        $stmt = $conn->prepare($sql);
        $stmt->bindparam(':name',$_POST['name']);
        $stmt->bindparam(':user',$_POST['user']);
        $stmt->bindparam(':email',$_POST['email']);
        $password = password_hash($_POST['pass'], PASSWORD_BCRYPT);
        $stmt->bindparam(':pass',$password);

        

        if ($stmt->execute()) {
            $message = 'se registro el usuario de manera exitosa';

        } else {
            $message = 'ya te la pelaste';
        }
        */
        $AD=0;
        $var = "INSERT INTO usuario (name, user, email, pass, admin) VALUES ('".$_POST['name']."','".$_POST['user']."', '".$_POST['email']."', '".$_POST['pass']."','$AD')";
        
        try {
            if (mysqli_query($connection, $var)) {
                $message = 'se registro el usuario de manera exitosa';
    
            } else {
                print_r(mysqli_error($connection));
            }    
            
        } catch (Exception $e) {
            print_r($e);
        }


    }  
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Signup</title>
    <link href-"https://fonts.googleapis.com/css2? familia:Roboto:wght@300&display-swap" rel-"stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php require 'partials/header.php'?>


    <?php if(!empty($message)): ?>
        <p><?= $message ?></p>
    <?php endif; ?>

    <h1>SignUp</h1>
    <span>or <a href="login.php">Login</a></span>

        <form action="signup.php" method="post">
            <input type="text" name="name" placeholder="ingresa tu nombre">
            <input type="text" name="user" placeholder="ingresa tu usuario">
            <input type="text" name="email" placeholder="ingresa tu correo">
            <input type="password" name="pass" placeholder="ingresa tu contraseña">
            <input type="password" name="confirm_password" placeholder="confirma tu contraseña">
            <input type="submit" value="send">
        </form>

    
</body>
</html>