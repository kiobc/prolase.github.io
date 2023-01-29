<?php
 if( isset( $_POST['condiciones'] ) ) {
    $hostname_desarrolloweb = "localhost";
    $database_desarrolloweb = "prolasaf";
    $username_desarrolloweb = "root";
    $password_desarrolloweb = "";
    $desarrolloweb = mysql_pconnect($hostname_desarrolloweb, $username_desarrolloweb, $password_desarrolloweb) or trigger_error(mysql_error(),E_USER_ERROR);
    $insertSQL = sprintf("INSERT INTO `usuario`(`id_usuario`, `user`, `password1`,`email` ) VALUES (%s,'%s','%s','%s')",$_POST['id'],$_POST['user'],md5($_POST['password1']),$_POST['email']);
    mysql_select_db($database_desarrolloweb, $desarrolloweb);
    $Result1 = mysql_query($insertSQL, $desarrolloweb) or die(mysql_error());
        echo"<script>alert('Usuario registrado');</script>";
    header('Location:../login1/usuario_registrado.php');
     echo"<script> window.location= 'registro_usuario.php'</script>";
}else{
    echo"<script>alert('No acepto terminos y condiciones datos no guardados');</script>";

    echo"<script> window.location= 'registro_usuario.php'</script>";
}
 
?>









