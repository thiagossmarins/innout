<?php
loadModel('Login');

if(count($_POST) > 0) {
  $login = new Login($_POST);
  try{
    $user = $login->checkLogin();
    echo "Usuário {$user->name} logado \o/";
  } catch(Exception $e) {
    echo 'Fala no login :P';
  }
}

loadView('login', $_POST);