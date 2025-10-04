<?php
// Router principal
// ROUTE DU DETAIL D'UN POST
// Pattern: /?post_id=id
// Controleur: postController
// Action: showAction
if(isset($_GET['post_id'])):
include_once '../app/controllers/postsController.php';
\App\Controllers\PostsController\showAction($connexion, $_GET['post_id']);
// Route par defaut
// Pattern: /
// Controleur: pagesController
// Action: blogAction
else:
include_once '../app/controllers/pagesController.php';
\App\Controllers\PagesController\blogAction($connexion);
endif;
