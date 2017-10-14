<?php

class mainController
{

  public function index()
  {
    $user = User::find(2);
    Response::render("home", ['user' => $user,'ruta' => dirname(__DIR__)]);
  }
  public function about()
  {
    echo "Hola desde about";
  }
}
