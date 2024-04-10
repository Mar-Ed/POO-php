<?php
  require 'vendor/autoload.php'; //composer
  use Vidamrr\Poo\modelos\Post;
  use Vidamrr\Poo\modelos\ImagePost;
  use Vidamrr\Poo\modelos\User;
  use Vidamrr\Poo\modelos\VideoPost;

  $rebeca= new User("Valdez", "Rebeca","asdasd@gmail.com", "vida123");
  $sofia= new User("Melendez", "Sofia","rtty@gmail.com", "vida123");
  $kim= new User("Gomez", "Kim","uuuu@gmail.com", "vida123");
  $marcelo= new User("Bilbao", "Marcelo","iiii@gmail.com", "vida123");
  

  $rebecaPost= new ImagePost("Domingo con mamá", "fotofamiliar.jpg");
  $sofiaPost= new VideoPost("Comiendo huevito", "cena.mov");
  $kimPost= new VideoPost("Orinando", "vida123.mov");
  $marceloPost= new ImagePost("Jugando con perros", "IMG.jpg");

  $rebeca->publish($rebecaPost);
  $sofia->publish($sofiaPost);
  $kim->publish($kimPost);
  $marcelo->publish($marceloPost);
  $marcelo->publish($marceloPost);
  $marcelo->publish($marceloPost);



  $rebecaPost->addLikes($marcelo);
  $rebecaPost->addLikes($rebeca);

  $sofiaPost->addLikes($kim);

  $kimPost->addLikes($rebeca);
  $kimPost->addLikes($kim);
  $kimPost->addLikes($sofia);

  $marceloPost->addLikes($sofia); 
  $marceloPost->addLikes($marcelo);

  $rebeca->addFollower($sofia);
  $rebeca->addFollower($kim);
  $rebeca->addFollower($marcelo);

  $sofia->addFollower($kim);

  $kim->addFollower($marcelo);
  $kim->addFollower($sofia);

  $marcelo->addFollower($kim);
  $marcelo->addFollower($rebeca);
  $marcelo->addFollower($sofia);


  print_r(User::showProfile($rebeca));
  print_r(User::showProfile($marcelo));
  print_r(User::showProfile($sofia));
  print_r(User::showProfile($kim));

  print_r($rebecaPost->toString());
  print_r($marceloPost->toString());
  print_r($sofiaPost->toString());
  print_r($kimPost->toString());


?>