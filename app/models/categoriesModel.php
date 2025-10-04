<?php
namespace App\Models\CategoriesModel;
function findAll(\PDO $connexion):array{
    $sql="SELECT *
    FROM categories 
    ORDER BY name ASC ";
    return $connexion->query($sql)->fetchAll(\PDO::FETCH_ASSOC);
}