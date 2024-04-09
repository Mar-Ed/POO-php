<?php
namespace Vidamrr\Poo\modelos;

use IPost;

//Herencia en POO
class ImagePost extends Post implements IPost{
  public function __construct(private string $mensaje, private string $imagen){
    //Se debe llamar al constrctor padre
    print_r("Se creó un nuevo objeto ImagePost \n");
    parent::__construct($mensaje);
  }
  public function getImagen():string{
    return $this->imagen;
  }
  public function toString():string{
    $info= "Id: $this->getId()\n";
    $info.="Mensaje: ". $this->getMensaje() . "\n";
    $info.="Imagen: ". $this->getImagen() . "\n";
    $info.= "Likes: ". $this->posts . "\n\n";
    return $info;
  }
}

?>