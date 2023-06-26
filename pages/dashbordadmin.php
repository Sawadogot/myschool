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
      body{
        background-color: #ebe1e1;
        border: 1px solid red;
        box-sizing: border-box;
        font-family: 'Roboto', sans-serif;
      }
      .p1{
    color: #e0dede;
  }
  .ad{
    color: rgb(119, 155, 239);
    text-align:center;
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
    background-color: white;
    padding: 50px;
    border-radius: 10px;
  }
  
  .user-box3 {
    width: 100%;
    padding: 10px;
    /* display: inline-block; */
    box-sizing: border-box;
    display: flex;
    justify-content: space-between;
  }
  header img{
    border-radius: 0px;
    left: 5px;
  }
 
  header {
  background-color: rgb(119, 155, 239);
  padding: 10px;
  z-index: 1;
}

nav {
  display: flex;
  align-items: center;
  justify-content: space-between;
  
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
  color: white;
  text-decoration: none;
  padding: 5px 10px;
  border: 1px solid black;
  border-radius: 5px;
  background: rgb(1, 6, 10);

}

.menu li a:hover {
  background-color: blue;
}
/*FOOTER*/

footer {
    background: blue;
    background: -webkit-linear-gradient(59deg, #0024f0, #2fd7f1);
    background: linear-gradient(59deg, #0024f0, #3ed1fe);
    color: white;
    margin-top:100px;
    width: 100%;
    height: 100%;
  } 
  .foot{
    text-align: center;
  }
    </style>
</head>
<header>
  <nav>
    <div>
      <img src="../images/MySchool.png" alt="" height="100" width="100">
    </div>
    <ul class="menu">
      <li><a  href="inscriptionadmin.php">Ajouter une sécrétaire</a></li>
      <li><a  href="listeeleve.php">Ajouter une moyenne</a></li>
      <li><a  href="authentification.php">Déconnexion</a></li>
      
    </ul>
  </nav>
</header>

<body>
<div class="login-box2">
  <form>
    <div>
        <h4 class="ad">
        WELCOME TO MYSCHOOL
        </h4>
      </div>
  <div class="user-box3 mt-3">
      <a href="inscriptioneleve.php" class="btn btn-warning ">Inscription élève</a>
      <a href="listeeleve.php" class="btn btn-warning  ">Liste élève</a>
    </div>
    <div class="user-box3">
      <a href="inscriptionparent.php" class="btn btn-warning ">Inscription parent</a>
      <a href="Listesparent.php" class="btn btn-warning ">Liste parent</a>
  </div>
  </div>
</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<footer class="mainfooter" role="contentinfo">
  <div class="footer-down">
	<div class="row">
		<div class="col-md-12 copy">
			<p class="foot">&copy; Copyright 2023 - Gestions des moyennes 
   |Tous droits réservés.</p>
		</div>
	</div>
  </div>
  </div>
</footer>
</body>
</html>
