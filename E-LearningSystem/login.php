<?php 
require_once ("include/initialize.php");   
if (isset($_SESSION['StudentID'])) {
  # code...
  redirect('index.php');
}
?> 
  
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<link href="<?php echo web_root; ?>css/bootstrap.min.css" rel="stylesheet"> 
<link href="<?php echo web_root; ?>fonts/font-awesome.min.css" rel="stylesheet" media="screen">  
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo web_root; ?>css/util.css">
  <link rel="stylesheet" type="text/css" href="<?php echo web_root; ?>css/main.css">
  <link rel="stylesheet" type="text/css" href="css/newstyle.css">
<!--===============================================================================================-->
</head>
<body>
  
  <div class="limiter">
    <div class="container-login100">
           <?php check_message(); ?>
      <div class="wrap-login100">
        <div class="login100-pic" data-tilte>
          <img src="images/Poli.png"  alt="IMG">
        </div>
         
        <form class="login100-form" action="" method="POST"> 
          <span class="login100-form-title">
            Bienvenidos al politécnico Internacional
          </span>

          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="user_email" placeholder="Usuario">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-user" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Contraseña es requerida">
            <input class="input100" type="password" name="user_pass" placeholder="Contraseña">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
          </div>
          
          <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit" name="btnLogin">
              Ingresar
            </button>
          </div>
 
          <div class="text-center p-t-136" id="crear">
            <a class="txt2" href="register.php">
              CREAR CUENTA         
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  

  <?php 

if(isset($_POST['btnLogin'])){
  $email = trim($_POST['user_email']);
  $upass  = trim($_POST['user_pass']);
  $h_upass = sha1($upass);
  
   if ($email == '' OR $upass == '') {

      message("Usuario y contraseña invalida!", "error");
      redirect (web_root."login.php");
         
    } else {  
      //it creates a new objects of member
        $student = new Student();
        //make use of the static function, and we passed to parameters
        $res = $student::studentAuthentication($email, $h_upass);
        if ($res==true) {  
             // redirect(web_root."index.php"); 

          echo $_SESSION['StudentID'];
        }else{
          message("Esta cuenta no existe! Por favor contactarse con el administrador.", "error");
          redirect (web_root."login.php");
        }
   }
 } 
 ?> 

<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>js/jquery.js"></script>
<script src="<?php echo web_root; ?>js/bootstrap.min.js"></script> 
<!--===============================================================================================-->
  <script src="<?php echo web_root; ?>vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo web_root; ?>vendor/tilt/tilt.jquery.min.js"></script>
  <script >
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>

</body>
</html>