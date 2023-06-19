<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/stylA.css">
    <!-- <link rel="stylesheet" href="../style/bootstrap-5.2.3-dist/css/bootstrap.min.css"> -->
    <title>Administrateur</title>
</head>
<body>
    <div class="container">
    <div class="login-box" style="margin-top: 30px;">
 <form method='Pageadmin.php' action='POST'>
    <div>
    <img class="logo" src="../images/MySchool.png" alt="" heigth="120" width="120">
    </div>
    <div>
        <h2 class="ad">
        INSCRIRE UN ELEVE
        </h2>
    </div>
   <div class="user-box">
     <input type="text" name="nom" id="nom" required="">
     <label>Nom</label>
   </div>
   <div class="user-box">
     <input type="text" name="prenom" id="prenom" required="">
     <label>Prenom(s)</label>
   </div>
   <div class="user-box">
     <input type="date" name="datenaissance" id="datenaissance" required="">
   </div>
   <div class="user-box">
     <input type="number" name="classe" id="classe" required="">
     <label>Classe</label>
   </div>
   <div class="user-box">
     <input type="text" name="idparent" id="idparent" required="">
     <label>ID Parent</label>
   </div><center>
     <a href="pageadmin.php"> <span></span>
      <span></span>
      <span></span>
      <span></span>
      Inscrire
     </a>
   </center>
 </form>
</div>
    </div>
</body>
</html>
