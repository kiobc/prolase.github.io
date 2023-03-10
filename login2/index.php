 <!DOCTYPE>

 <head>




   <title>Login de usuario</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!--===============================================================================================-->
   <link rel="icon" type="image/png" href="images/icons/prolase.ico" />
   <!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/login/bootstrap/css/bootstrap.min.css">
   <!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="fonts/login/font-awesome-4.7.0/css/font-awesome.min.css">
   <!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="fonts/login/Linearicons-Free-v1.0.0/icon-font.min.css">
   <!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/login/animate/animate.css">
   <!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/login/css-hamburgers/hamburgers.min.css">
   <!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/login/animsition/css/animsition.min.css">
   <!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/login/select2/select2.min.css">
   <!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/login/daterangepicker/daterangepicker.css">
   <!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="css/util1.css">
   <link rel="stylesheet" type="text/css" href="css/main1.css">
   <!--===============================================================================================-->
 </head>
 <body>
   <div class="limiter">
     <div class="container-login100">
       <div class="wrap-login100">
         <div class="login100-form-title" style="background-image: url(images/bg-011.jpg);">
           <span class="login100-form-title-1">
             Ingreso para postulante para la empresa
           </span>
         </div>
         <form action="../login2/loguear.php" method="post" class="login100-form validate-form">
           <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
             <span class="label-input100">Cedula</span>
             <input class="input100" type="number" name="id_aspirante" placeholder="Numero de cedula" required>
             <span class="focus-input100"></span>
           </div>
           <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
             <span class="label-input100">Contrase??a</span>
             <input class="input100" type="password" name="password1" placeholder="Contrase??a" required>
             <span class="focus-input100"></span>
           </div>
           <div class="container-login100-form-btn">
             <button class="btn btn-success">
               Acceder
             </button>
           </div>
         </form>
       </div>
     </div>
   </div>

   <!--===============================================================================================-->
   <script src="vendor/login/jquery/jquery-3.2.1.min.js"></script>
   <!--===============================================================================================-->
   <script src="vendor/login/animsition/js/animsition.min.js"></script>
   <!--===============================================================================================-->
   <script src="vendor/login/bootstrap/js/popper.js"></script>
   <script src="vendor/login/bootstrap/js/bootstrap.min.js"></script>
   <!--===============================================================================================-->
   <script src="vendor/login/select2/select2.min.js"></script>
   <!--===============================================================================================-->
   <script src="vendor/login/daterangepicker/moment.min.js"></script>
   <script src="vendor/login/daterangepicker/daterangepicker.js"></script>
   <!--===============================================================================================-->
   <script src="vendor/login/countdowntime/countdowntime.js"></script>
   <!--===============================================================================================-->
   <script src="js/main1.js"></script>


 </body>

 </html>