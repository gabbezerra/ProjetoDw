<?php
  require_once "usuariosdb.php";

  session_start();
  $login = $_POST['login'];
  $senha = $_POST['senha'];
  $userdb = new UsuarioDB();
  $result = $userdb->readByLoginSenha($login, $senha);
  // var_dump($result);
  // var_dump($result !== false);
   if($result !== false){
     $_SESSION["user_id"] = $login;
    header("Location: home.php");
  } else {
    header("Location: ../public/login.html");
  }

  // $connect = mysql_connect('nome_do_servidor','nome_de_usuario','senha');
  // $db = mysql_select_db('nome_do_banco_de_dados');
  //   if (isset($entrar)) {
  //
  //     $verifica = mysql_query("SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");
  //       if (mysql_num_rows($verifica)<=0){
  //         echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
  //         die();
  //       }else{
  //         setcookie("login",$login);
  //         header("Location:index.php");
  //       }
  //   }
?>
