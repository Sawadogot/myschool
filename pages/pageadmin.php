<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../style/styleC.css"> -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"/>
    <title>Document</title>
    <style>
      .p1{
    color: #e0dede;
  }
  .login-box2 {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    text-align: center;
    width: 500px;
    margin-top:50px;
    margin-left: 400px;
    margin-bottom:50px;
    background-color: #0b0a0a;
    padding: 50px;
    border-radius: 10px;
  }
  
  .user-box3 {
    width: 100%;
    padding: 10px;
    display: inline-block;
    box-sizing: border-box;
  }
  .logo{
    border-radius: 75px;
    position: relative;
    left: 5px;
    bottom:90px;
  }
  .ad:nth-child(1){
    position: relative;
    bottom: 50px;
    color: #ffbc04;
    text-align: center;
    background: linear-gradient(90deg, transparent,);
    animation: btn-anim1 linear infinite;
    /* border-radius: 5px; */
    box-shadow: 0 0 5px #fffffe,
                /* 0 0 25px #ffbc04, */
                /* 0 0 50px #ffbc04, */
                0 0 100px #fdfdfd;
  }
  header {
  background-color: yellow;
  padding: 10px;
}

nav {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.logo img {
  height: 80px;
  width: 80px;
}

.menu {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.menu li {
  display: inline-block;
  margin-left: 10px;
}

.menu li a {
  color: black;
  text-decoration: none;
  padding: 5px 10px;
  border: 1px solid black;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.menu li a:hover {
  background-color: #ccc;
}


    </style>
</head>
<header>
  <nav>
    <div class="logo">
      <img src="../images/MySchool.png" alt="" height="120" width="120">
    </div>
    <ul class="menu">
      <li><a href="listeeleve.php">Ajouter une moyenne</a></li>
      <li><a href="administrateur.php">Déconnexion</a></li>
    </ul>
  </nav>
</header>

<body>
<div class="login-box2">
  <form>
  <div>
    <img class="logo" src="../images/MySchool.png" alt="" heigth="120" width="120">
    </div>
    <div>
        <h2 class="ad">
        WELCOME TO MYSCHOOL ADMIN
        </h2>
      </div>
    <div class="user-box3">
    <a href="inscriptioneleve.php" class="btn btn-warning">Inscription élève</a>
    </div>
    <div class="user-box3">
    <a href="inscriptionparent.php" class="btn btn-warning">Inscription parent</a>
    </div>
    <div class="user-box3">
    <a href="listeeleve.php" class="btn btn-warning">Liste élève</a>
    </div>
    <div class="user-box3">
    <a href="Listesparent.php" class="btn btn-warning">Liste parent</a>
    </div>
    <div class="user-box3">
    <a href="../administrateur.php" class="btn btn-warning">Ajouter une sécrétaire</a>
    </div>
  </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>
</html>
