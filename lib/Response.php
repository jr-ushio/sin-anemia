<?php

/**
 *
 */
class Response
{

  private function __construct(){}

  public static function render($view, $vars = [])
  {
    foreach ($vars as $key => $value) {
      // INSTANCIAR UNA VARIABLE ES CON $$
      $$key = $value;
    }
    require SRC_PATH."views/".$view.".php";
  }
}
