<?php
  require 'vendor/autoload.php'; //composer
  use Vidamrr\Poo\modelos\Post;
  use Vidamrr\Poo\modelos\ImagePost;
  use Vidamrr\Poo\modelos\User;
use Vidamrr\Poo\modelos\VideoPost;

  $marcos= new User("marcos", "vidamrr","asdasd@gmail.com", "vida123");
  $andrea= new User("marcos", "Perez","rtty@gmail.com", "vida123");
  $sofia= new User("marcos", "Caceres","uuuu@gmail.com", "vida123");
  $maria= new User("marcos", "Perro","iiii@gmail.com", "vida123");
  

  $marcosPost= new ImagePost("Domingo con mamá", "fotofamiliar.jpg");
  $andreaPost= new VideoPost("Comiendo huevito", "cena.jpg");
  $sofiaPost= new VideoPost("Orinando", "vida123.jpg");
  $mariaPost= new ImagePost("Jugando con perros", "IMG.jpg");

  $marcos->publish($marcosPost);
  $andrea->publish($andreaPost);
  $sofia->publish($sofiaPost);
  $maria->publish($mariaPost);

  $marcosPost->addLikes($marcos);
  $marcosPost->addLikes($andrea);

  $andreaPost->addLikes($marcos);

  $sofiaPost->addLikes($marcos);
  $sofiaPost->addLikes($andrea);
  $sofiaPost->addLikes($sofia);

  $mariaPost->addLikes($sofia); 
  $mariaPost->addLikes($marcos);

  $marcos->addFollower($sofia);
  $marcos->addFollower($andrea);
  $marcos->addFollower($maria);

  $maria->addFollower($marcos);

  $sofia->addFollower($marcos);
  $sofia->addFollower($andrea);
  $sofia->addFollower($maria);


  print_r(User::showProfile($marcos));
  print_r(User::showProfile($andrea));
  print_r(User::showProfile($sofia));
  print_r(User::showProfile($maria));
?>