<?php
namespace Vidamrr\Poo\modelos;
//Herencia en POO
class ImagePost extends Post{
  public function __construct(private string $mensaje, private string $imagen){
    //Se debe llamar al constrctor padre
    print_r("Se creó un nuevo objeto ImagePost \n");
    parent::__construct($mensaje);
  }
  public function getImagen():string{
    return $this->imagen;
  }
}

?>