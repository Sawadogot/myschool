<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/stylA.css">
    <!-- <link rel="stylesheet" href="../style/bootstrap-5.2.3-dist/css/bootstrap.min.css"> -->
    <title>Administrateur</title>
    <style>
      .classe{
        width: 100%;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        margin-bottom: 10px;
        border-radius: 10px;
        border-bottom: 1px solid #fff;
        outline: none;
        background:rgb(119, 155, 239);
        border-top: 2px solid black;
        border-left: 2px solid black;
        border-right: 1px solid #4f4d4d;
      }
    </style>
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
     <input type="date" name="datenaissance" id="datenaissance" required style="color:white;">
    </div>
    <div class="user-box">
   <select name="usertype" class="classe"required>
     <option value="">--sélectionnez la classe--</option>
     <option value="6ème">6ème</option>
     <option value="5ème">5ème</option>
     <option value="4ème">4ème</option>
     <option value="3ème">3ème</option>
   </select>
   </div>
    <div class="user-box">
      <input type="text" name="nomparent" id="nomparent" required="">
      <label>Nom du parent</label>
    </div>
    <center>
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
