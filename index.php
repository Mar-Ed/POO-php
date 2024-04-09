<?php
  require 'vendor/autoload.php'; //composer
  use Vidamrr\Poo\modelos\Post;
  use Vidamrr\Poo\modelos\ImagePost;
  
  $miObjeto= new Post("Este es mi primer post");
  $postImagen = new ImagePost("Fotos de vacaciones", "playa.jpg");
  echo  $miObjeto->getMensaje() ."\n";
  echo $postImagen->getMensajeImagePost() ."\n";
  echo $postImagen->getMensajeImagePost()."\n";
  // echo $miObjeto->id;
  //$miObjeto->setId('abcd-1234'); //modificars
  //echo $miObjeto->getId();//llamada al método de la clase
  // var_dump($miObjeto);


?>