<?php
//include('connexion_base.php');
$msg_success = "";
$msg = "";

if(isset($_POST['administrer'])){
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $mot_passe = $_POST['mot_passe'];

    $query = "INSERT INTO administrateur (nom, email, mot_passe) VALUES (:nom,:email, :mot_passe)";
    $query_run = $conn->prepare($query);
    $query_run->bindParam(':nom', $nom);
    $query_run->bindParam(':email', $email);
    $query_run->bindParam(':mot_passe', $mot_passe);

    if($query_run->execute()){
        $msg_success = "Vos données ont été bien enregistrées!";
    }
    else{
        $msg = "Erreur d'enregistrement";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <title>Administrateur</title>
    <style>
        .logo{
    border-radius: 50%;
    position: relative;
    left: 100px;
    /* bottom: 100px; */
    top: 5px;
  }
    </style>
</head>
<body>
  <form>
      <img class="logo" src="images/MySchool.png" alt="" height="160" width="160">
    <h1>Inscription administrateur</h1>
    <div class="social-media">
      <p><i class="fab fa-google"></i></p>
      <p><i class="fab fa-facebook-f"></i></p>
      <p><i class="fab fa-twitter"></i></p>
    </div>
    <p class="choose-email">ou utiliser mon adresse e-mail :</p>
    
    <div class="inputs">
      <input type="text" name="nom" placeholder="Nom_complet">
      <input type="email" placeholder="Email" />
      <input type="password" placeholder="Mot de passe">
      <div >
                        <input type="usertype" name="-" placeholder="--sélectionnez le type--">
                        <option value="user">utilisateur</option>
                        <option value="admin">administrateur</option>
            
                </div>
    </div>
    
    <p class="inscription">Je n'ai pas de <span>compte</span>. Je m'en <span>crée</span> un.</p>
    <div align="center">
      <button class=button-connect type="submit">S'inscrire</button>
    </div>
  </form>
  
    <?php
        if($msg_success != "") {
            echo '<p>'.$msg_success.'</p>';
        }
        if($msg != "") {
            echo '<p>'.$msg.'</p>';
        }
    ?>
</body>
<!-- <footer class="mainfooter" role="contentinfo">
  <div class="footer-down">
	<div class="row">
		<div class="col-md-12 copy">
			<p class="text-center2">&copy; Copyright 2023 - Gestions des moyennes 
   |Tous droits réservés.</p>
		</div>
	</div>
  </div>
  </div>
</footer> -->
</html>
