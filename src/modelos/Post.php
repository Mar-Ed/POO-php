<?php
namespace Vidamrr\Poo\modelos;
use Vidamrr\Poo\Utils\uuid;

class Post{
  private string  $id;
  private array $likes;
  public function __construct(private string $mensaje){
    print_r("Se creó un nuevo objeto POST \n");
    $this->id = UUID::generate();
  }
  protected function saludo(){
    return "Hola dese este post, con id $this->id";
  }
  public function getId():string {
    return $this->id;
  }
  public function setId(string $id) {
    $this-> id= $id;
  }
  public function getMensaje(){ //dependencia del valor
    return $this->mensaje;
  }
}
