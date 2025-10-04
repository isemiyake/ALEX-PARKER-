<?php
namespace App\Controllers\PagesController;
use \App\Models\PostsModel;
function  blogAction(\PDO $connexion){
   // je demande les data au modeles
     include_once '../app/models/postsModel.php';
     $posts = PostsModel\findAll($connexion);
   // je charge la vue 'blog' dans $content
   global $content,$title;
   $title = "Blog";
   ob_start();
   include '../app/views/pages/blog.php';
   $content=ob_get_clean();
}