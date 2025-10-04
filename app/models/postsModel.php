<?php
namespace App\Models\PostsModel;
function findAll(\PDO $connexion):array{
    $sql="SELECT p.id AS post_id, p.title AS post_title, p.created_at AS post_created_at, p.text AS post_text, 
       c.name AS category_name
        FROM posts p
        LEFT JOIN categories c ON p.category_id = c.id
        ORDER BY p.created_at DESC
        LIMIT 10;";
    return $connexion->query($sql)->fetchAll(\PDO::FETCH_ASSOC);}
   
    function findOneById(\PDO $connexion, $id):array{
    $sql="SELECT p.id AS post_id, p.title AS post_title, p.created_at AS post_created_at, p.text AS post_text, p.quote AS post_quote,
       c.name AS category_name
        FROM posts p
        LEFT JOIN categories c ON p.category_id = c.id
        WHERE p.id =:id";
        $rs = $connexion->prepare($sql);
        $rs -> bindValue(':id',$id,\PDO::PARAM_INT);
        $rs->execute();
    return $rs->fetch(\PDO::FETCH_ASSOC);
}
?>