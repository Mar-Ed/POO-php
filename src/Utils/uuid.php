<?php

namespace Vidamrr\Poo\Utils;
class UUID{
  public static function generate(){
    return uniqid();//no necesitas generar un objeto para generar id
  }
}

?>