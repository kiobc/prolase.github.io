<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact V18</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
  <link rel="icon" type="image/png" href="images/icons/prolase.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>


  <div class="container-contact100">
    <div class="wrap-contact100">
      <form action="validar.php" method="post"class="contact100-form validate-form">
        <span class="contact100-form-title">
          Registro de clientes
        </span>
        <span class="contact100-form-title">
         
        </span>

        <div class="wrap-input100 validate-input" data-validate="Numero de cedula">
          <label class="label-input100" for="name">Cedula</label>
          <input id="name" class="input100" type="number" name="id" placeholder="Ingrese el numero de cedula...">
          <span class="focus-input100"></span>
        </div>


        <div class="wrap-input100 validate-input" data-validate = "Ingrese usuario">
          <label class="label-input100" for="email">Usuario</label>
          <input id="email" class="input100" type="text" name="user" placeholder="Ingrese el usuario...">
          <span class="focus-input100"></span>
        </div>
          
        <div class="wrap-input100 validate-input" data-validate = "Ingrese la contraseña">
          <label class="label-input100" for="message">Contraseña</label>
          <input id="email" class="input100" type="password" name="password1" placeholder="Ingrese la contraseña..."> 
          <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Ingrese email">
          <label class="label-input100" for="email">Email</label>
          <input id="email" class="input100" type="mail" name="email" placeholder="Ingrese el email...">
          <span class="focus-input100"></span>
        </div>
        <div class="wrap-input100 validate-input" data-validate = "Ingrese la url de la hoja de la url">
          <label class="label-input100" for="email">Acepta termino y condiciones  </label>
          <input id="email" class="input100"  type="checkbox" name="condiciones"  requiredata-validate = "Seleccione acepta terminos y condiciónes" >
          <span class="focus-input100"></span>
        </div>
       

       
        <div class="container-contact100-form-btn" >
          <input class="contact100-form-btn"value="Registrarse" type="submit" /> 
        
        </div>
        <div class="container-contact100-form-btn" >
          <button>
          <a  class="contact100-form-btn" href=".../prolasef/index.html" class="contact100-form-btn" > Cancelar</a>
         
        </div>

        <div class="contact100-form-social flex-c-m">
          <a href="#" class="contact100-form-social-item flex-c-m bg1 m-r-5">
            <i class="fa fa-facebook-f" aria-hidden="true"></i>
          </a>

          <a href="#" class="contact100-form-social-item flex-c-m bg2 m-r-5">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </a>

          <a href="#" class="contact100-form-social-item flex-c-m bg3">
            <i class="fa fa-youtube-play" aria-hidden="true"></i>
          </a>
        </div>
      </form>

      <div class="contact100-more flex-col-c-m" style="background-image: url('images/bg-01.jpg');">
      </div>
    </div>
  </div>





<!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
  <script>
    $(".js-select2").each(function(){
      $(this).select2({
        minimumResultsForSearch: 20,
        dropdownParent: $(this).next('.dropDownSelect2')
      });
    })
    $(".js-select2").each(function(){
      $(this).on('select2:open', function (e){
        $(this).parent().next().addClass('eff-focus-selection');
      });
    });
    $(".js-select2").each(function(){
      $(this).on('select2:close', function (e){
        $(this).parent().next().removeClass('eff-focus-selection');
      });
    });

  </script>
<!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>
</body>
</html>



