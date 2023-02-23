<?php

namespace App\Model;

use Core\App;

class ProduitModel extends BaseModel
{

    protected static $table = 'products';
    protected $id;
    protected $titre;
    protected $reference;
    protected $description;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @return mixed
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    public static function insert($post)
    {
        App::getDatabase()->prepareInsert(
            "INSERT INTO " . self::$table . " (titre,description,reference) VALUES (?,?,?)",
            array( $post['titre'],$post['description'],$post['reference'])
        );
    }


    public static function update($id,$post)
    {
        App::getDatabase()->prepareInsert(
            "UPDATE " . self::$table . " SET titre = ?, description = ?, reference = ?   WHERE id = ?",
            array($post['titre'], $post['description'],$post['reference'],$id)
        );
    }

}