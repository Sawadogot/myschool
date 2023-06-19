<?php
include('connexion_base.php');
$sql = "SELECT email, mot_passe FROM secretaire";
$result = $conn->query($sql);  // Utilisez la méthode "query" au lieu de "->query()"

if(isset($_POST['connecter'])){
    if(!empty($_POST['email']) && !empty($_POST['mot_passe'])){  // Utilisez "mot_pass" au lieu de "mot_de_passe"
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $email_defaut = $row["email"];
        $mot_de_passe_defaut = $row["mot_passe"];  // Utilisez "mot_pass" au lieu de "mot_de_passe"
        $email_saisi = htmlspecialchars($_POST['email']);
        $mot_de_passe_saisi = htmlspecialchars($_POST['mot_passe']);  // Utilisez "mot_pass" au lieu de "mot_de_passe"

        if($mot_de_passe_defaut == $mot_de_passe_saisi && $email_defaut == $email_saisi){
            header('Location:index.php');
        } else {
            echo '<h6>votre mot de passe est incorrect!</h6>';  // Supprimez le guillemet supplémentaire à la fin de la balise h6
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styl.css">
    <title>login</title>
</head>
<body>
    <div class="container">
        <div class="login-box">
            <form method="POST">  <!-- Ajoutez l'attribut method="POST" pour envoyer les données du formulaire -->
                <div>
                    <img class="logo" src="images/MySchool.png" alt="" height="120" width="120">
                </div>
                <div class="user-box">
                    <input type="text" name="email" required="">  <!-- Ajoutez le nom de champ "email" pour capturer la valeur -->
                    <label>E-mail</label>
                </div>
                <div class="user-box">
                    <input type="password" name="mot_pass" required="">  <!-- Ajoutez le nom de champ "mot_pass" pour capturer la valeur -->
                    <label>Password</label>
                </div>
                <center>
                    <button type="submit" name="connecter">Se connecter</button>  <!-- Utilisez un bouton de type "submit" avec le nom "connecter" -->
                </center>
            </form>
        </div>
    </div>
</body>
</html>
