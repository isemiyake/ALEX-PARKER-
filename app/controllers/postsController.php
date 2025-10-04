<?php 
namespace App\Controllers\PostsController;
use \App\Models\PostsModel;
function showAction(\PDO $connexion ,int $id){
   // je demande les data au modeles
     include_once '../app/models/postsModel.php';
     $post = PostsModel\findOneById($connexion, $id);
   // je charge la vue 'Post' dans $content
   global $content,$title;
   $title = "Title du post";
   ob_start();
   include '../app/views/pages/show.php';
   $content=ob_get_clean();
}
