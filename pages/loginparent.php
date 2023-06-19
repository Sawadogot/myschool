<!-- <?php
// include('connexion_base.php');
// $sql="SELECT  email, mot_pass FROM administrateur";
// $result=$conn->$query($sql)
// if(isset($_POST['connecter'])){
// if(!empty($_POST['email'])AND !empty($_POST['mot_pass'])){
//     $row=$result->fetch(PDO::FETCH_ASSOC);
//     $email_defaut=$row["email"];
//     $mot_de_passe_defaut=$row["mot_de_passe"];
//     $email_saisi=htmlspecialchars($_POST['email']);
//     $mot_de_passe_saisi=htmlspecialchars($_POST['mot_de_passe']);
// }
// if($mot_de_passe==$mot_de_passe_saisi AND $email_defaut==$email_saisi){
// header('Location:index.php');
// }else{
// echo'<h6 ">votre mot de passe est incorrect!</h6>';
// }
// } 
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loginparent</title>
    <style>
      .login-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(0, 2, 29, 0.987);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0, 2, 29, 0.987);
  border-radius: 10px;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 10px;
  border-radius: 10px;
  border-bottom: 1px solid #fff;
  outline: none;
  background: rgb(209, 201, 201);
}


.login-box .user-box label {
  position: absolute;
  top: 0;
  left: 10px;
  padding: 10px 0;
  font-size: 17px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #bdb8b8;
  font-size: 12px;
}

.login-box form a {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: #ffffff;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 4px
}

.login-box a:hover {
  background: #ffbc04;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #ffbc04,
              0 0 25px #ffbc04,
              0 0 50px #ffbc04,
              0 0 100px #ffbc04;
}

.login-box a span {
  position: absolute;
  display: block;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }

  50%,100% {
    left: 100%;
  }
}

.login-box a span:nth-child(1) {
  bottom: 2px;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(360deg, transparent, #ffbc04);
  animation: btn-anim1 2s linear infinite;
  animation-delay: 1.125s
  
}
/* .ins{
  color: #ffbc04;
  background-color: white;
  text-align: center;
} */
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
.logo{
  border-radius: 75px;
  position: relative;
  left: 100px;
  bottom: 90px;
}
    </style>
</head>
<body>
    <div class="container">
    <div class="login-box">
    
 <form>
    <div>
    <img class="logo" src="../images/MySchool.png" alt="" heigth="120" width="120">
    </div>
   <div class="user-box">
     <input type="text" name="" required="">
     <label>E-mail</label>
   </div>
   <div class="user-box">
     <input type="password" name="" required="">
     <label>Password</label>
   </div><center>
   <a href="#">
          Se connecter
      <span></span>
   </a></center>
 </form>
</div>
    </div>
</body>
</html>