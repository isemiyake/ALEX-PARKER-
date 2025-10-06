<?php
// Router principal
// ROUTE DU DETAIL D'UN POST
// Pattern: /?post_id=id
// Controleur: postsController
// Action: showAction
if(isset($_GET['post_id'])):
include_once '../app/controllers/postsController.php';
\App\Controllers\PostsController\showAction($connexion, $_GET['post_id']);

// ROUTE D'AJOUT D'UN POST
// Pattern: /?addForm
// Controleur: postsController
// Action: AddAction
elseif(isset($_GET['addForm'])):
include_once '../app/controllers/postsController.php';
\App\Controllers\PostsController\addAction($connexion);
// ROUTE D'insert D'UN POST
// Pattern: /?insert
// Controleur: postsController
// Action: insert
elseif(isset($_GET['insert'])):
include_once '../app/controllers/postsController.php';
\App\Controllers\PostsController\addInsert($connexion,[
    'title' => $_POST['title'] ,
    'text' => $_POST['text'] ,
    'quote' => $_POST['quote'] ,
    'category_id' => $_POST['category_id'],
    'image'=>$_POST['image']]);
// Route de delete d'un post
// Pattern: /?delete&id=id
// Controleur: postsController
// Action: deletAction
elseif (isset($_GET['delete'])):
    include_once '../app/controllers/postsController.php';
    \App\Controllers\PostsController\deleteAction($connexion,$_GET['id']);
// Route de delete d'un post
// Pattern:?edit&id=id
// Controleur: postsController
// Action: editFormAction
elseif (isset($_GET['edit'])):
    include_once '../app/controllers/postsController.php';
    \App\Controllers\PostsController\editFormAction($connexion,$_GET['id']);
// Route par defaut
// Pattern: ?update&id=id
// Controleur: postsController
// Action: blogAction 
elseif (isset($_GET['update'])):
    include_once '../app/controllers/postsController.php';
    \App\Controllers\PostsController\editUpdateAction($connexion,$_GET['id']);
// Route par defaut
// Pattern: /
// Controleur: pagesController 
// Action: blogAction 
else:
include_once '../app/controllers/pagesController.php';
\App\Controllers\PagesController\blogAction($connexion);
endif;
