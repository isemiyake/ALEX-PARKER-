<?php
// Router principal

// Route par defaut
// Pattern: /
// Controleur: pagesController
// Action: blogAction
include_once '../app/controllers/pagesControllers.php';
\App\Controllers\PagesController\blogAction($connexion);