<?php
namespace App\Models\PostsModel;
    function findAll(\PDO $connexion):array{
        $sql="SELECT p.id AS post_id, p.title AS post_title, p.created_at AS post_created_at, p.text AS post_text, 
        c.name AS category_name
            FROM posts p
            LEFT JOIN categories c ON p.category_id = c.id
            ORDER BY p.created_at DESC
            LIMIT 10";
        return $connexion->query($sql)->fetchAll(\PDO::FETCH_ASSOC);
    }
    function findOneById(\PDO $connexion, $id):array{
        $sql="SELECT *,p.image AS post_image,p.id AS post_id, p.title AS post_title, p.created_at AS post_created_at, p.text AS post_text, p.quote AS post_quote,
        c.name AS category_name 
            FROM posts p
            LEFT JOIN categories c ON p.category_id = c.id
            WHERE p.id =:id";
            $rs = $connexion->prepare($sql);
            $rs -> bindValue(':id',$id,\PDO::PARAM_INT);
            $rs->execute();
        return $rs->fetch(\PDO::FETCH_ASSOC);
    }
    function insertOne(\PDO $connexion, array $data):int {
        $sql = "INSERT INTO posts
        SET title =:title,
        text=:text,
        quote=:quote,
        category_id=:category_id,
        created_at=NOW(),
        image=:image";
        
        $rs = $connexion->prepare($sql);
        $rs->bindValue(':title',$data['title'],\PDO::PARAM_STR);
        $rs->bindValue(':text',$data['text'],\PDO::PARAM_STR);
        $rs->bindValue(':quote',$data['quote'],\PDO::PARAM_STR);
        $rs->bindValue(':category_id',$data['category_id'],\PDO::PARAM_INT);
        $rs->bindValue(':image',$data['image'],\PDO::PARAM_STR);
        $rs->execute();
        return $connexion->lastInsertId();
    }
        function deletePostById(\PDO $connexion,int $id):bool{
        $sql="DELETE FROM posts
        WHERE id=:id";
        $rs=$connexion->prepare($sql);
        $rs->bindValue(':id',$id, \PDO::PARAM_INT);
        return $rs->execute();
        }

    function updateOneById(\PDO $connexion, int $id,array $data):bool {
        $sql="UPDATE posts
            SET title = :title,
                text= :text,
                image=:image,
                quote = :quote,
                category_id=:category_id
            WHERE id = :id";
        $rs = $connexion->prepare($sql);
        $rs ->bindValue(':id',$id,\PDO::PARAM_INT);
        $rs->bindValue(':title',$data['title'],\PDO::PARAM_STR);
        $rs->bindValue(':text',$data['text'],\PDO::PARAM_STR);
        $rs->bindValue(':quote',$data['quote'],\PDO::PARAM_STR);
        $rs->bindValue(':category_id',$data['category_id'],\PDO::PARAM_INT);
        $rs->bindValue(':image',$data['image'],\PDO::PARAM_STR);
        return $rs->execute();
    }