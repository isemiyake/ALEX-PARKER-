<?php 
namespace App\Controllers\PostsController;
use \App\Models\PostsModel;
include_once '../app/models/postsModel.php';

function showAction(\PDO $connexion ,int $id){
   // je demande les data au modeles
   $post = PostsModel\findOneById($connexion, $id);
   // je charge la vue 'Post' dans $content
   global $content,$title;
   $title = "Title du post";
   ob_start();
   include '../app/views/pages/show.php';
   $content=ob_get_clean();
}

function addAction(\PDO $connexion){
   // Je charge la vue 'form ' dans $content
   global $content,$title;
   $title = "Add a post";
   ob_start();
   include '../app/views/pages/addForm.php';
   $content=ob_get_clean();
}


function addInsert(\PDO $connexion, array $data){
 // Je demande au modele d'ajouter le post
 $id=PostsModel\insertOne($connexion,$data);
 // Je redirige vers la liste des posts
 header('location:index.php');
}
function deleteAction(\PDO $connexion,int $id){
    //Je demande au modele de supprimer le posts
      $return=PostsModel\deletePostById($connexion,$id);
    //Je redigire vers la liste des posts
     header('location:index.php');
}
function editFormAction(\PDO $connexion,int $id){
    //Je demande au modele le post a afficher dans le form
      $post=PostsModel\findOneById($connexion,$id);
    //Je charge la vue editForm dans $content1
    global $content,$title;
    $title = "Edit a post";
    ob_start();
    include '../app/views/pages/editForm.php';
    $content=ob_get_clean();
   
}
function editUpdateAction(\PDO $connexion,int $post_id){
    //Je demande au modele de modifier le post
    $return= PostsModel\updateOneById($connexion,$post_id,$_POST);
    //Je redigire vers la liste des posts
     header('location:index.php');
}