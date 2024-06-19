<?php

session_start();

if(isset($_POST['login'])){
$user = $_POST["uname"];
$password = $_POST["psw"];
$erreur= "erreur d'user ou mdp";



if ($user === "Ssnash" && $password === "pass"){
    
    $_SESSION['user'] = $user;
    
}

else print $erreur ;


}
session_destroy()
  






?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


<?php if(!isset($_POST['login'])) {?>
    <form action="" method="post">
    
        <div class="container">
            <label for="user"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" >

            <label for="pass"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" >

            <button type="submit" name="login">Login</button>

        </div>
        <?php if(isset($_POST['login'])) {?>
    Bonjour <?php echo $_SESSION['user']; ?> et bienvenue sur le site !
    <?php }
        ?>

        <?php }
        ?>
        
    </form>
    <?php if(isset($_POST['login'])) {?>
    Bonjour <?php echo $_SESSION['user']; ?> et bienvenue sur le site !
    <?php }
        ?>

<?php if(!isset($_POST['logout'])) {?>

    <form action="" method="post">
     <button type="submit" name="logout">logout</button>
    
        <?php }
        ?>
</body>

</html>