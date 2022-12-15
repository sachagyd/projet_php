<?php

if(isset($_POST["titre"]) && isset($_POST["message"])){
    session_start();
    $_SESSION['ti'] = $_POST["titre"];
    $_SESSION['msg'] = $_POST["message"];  
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible"
content="IE=edge">
 <meta name="viewport"
content="width=device-width,
initial-scale=1.0">
</head>

<form action="index.php" method="post">
 <p>Titre : <input type="text" name="titre" /></p>
 <p>Message: <input type="text" name="message" /></p>
 <p><input type="submit" value="Entrer"></p>
</form>

<p><?php echo "Titre : ".$_SESSION['ti'];?></p>
<p><?php echo "Message : ".$_SESSION['msg'];?></p>

</html>