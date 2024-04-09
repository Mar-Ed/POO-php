<?php
namespace Vidamrr\Poo\modelos;
use Vidamrr\Poo\Utils\UUID;
class User{

  private string $id;
  private array $posts;
  private array $followers;

  public function __construct(
    private string $name,
    private string $username,
    private string $email,
    private string $password
  ){
    $this->id = UUID::generate();
    $this->posts = [];
    $this->followers = [];
  }
  public function getId(){ 
    return $this->id;
  }
  public function getUsername():string{ 
    return $this->username;
  }

  public function publish(POST $post){
    array_push($this->posts, $post);
  }
  public function getPosts():array{
    return $this->posts;
  }
  public function getFollowers():array{
    return $this->followers;
  }
  public function showPosts(){
    foreach($this->posts as $post){
      var_dump($post->toString());
    }
  }
  private function hasFollowers(User $user){
    $encontrar = array_filter(
      $this->followers, fn(User $follower)=> $follower->id == $user->id
    );
    return count($encontrar)==1;
  }
  public function añadirSeguidor(User $user){
    if($this->hasFollowers($user)){
      if($this->id == $user ->id){
        print_r("No te puedes agregar a ti mismo");
      } else{
        array_push($this->followers, $user);
      }
    }else{
      print_r("El usuario $user->getUsername() ya es un follower \n");
    }
  }
  public static function showProfile (User $user){
    $profile= "Nombre: $user->getUsername()\n";
    $profile.="Followers: ". count($user->followers) . "\n";
    $profile.= "Posts: ". count($user->posts) . "\n\n";
    return $profile;
  }
}
?>