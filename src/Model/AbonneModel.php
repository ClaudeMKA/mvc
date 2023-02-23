<?php

namespace App\Model;

use Core\App;
use Core\Kernel\AbstractModel;

class AbonneModel extends BaseModel
{
    protected static $table = 'abonnes';
    protected $id;
    protected $email;
    protected $nom;
    protected $prenom;
    protected $age;
    protected $created_at;

    /**
     * @return string
     */
    public static function getTable(): string
    {
        return self::$table;
    }

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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }


    public static function insert($post)
    {
        App::getDatabase()->prepareInsert(
            "INSERT INTO " . self::$table . " (nom,prenom,email,age, created_at) VALUES (?,?,?,?, NOW())",
            array($post['nom'], $post['prenom'],$post['email'],$post['age'])
        );
    }


    public static function update($id,$post)
    {
        App::getDatabase()->prepareInsert(
            "UPDATE " . self::$table . " SET nom = ?, prenom = ?, email = ?, age = ? WHERE id = ?",
            array($post['nom'], $post['prenom'],$post['email'],$post['age'],$id)
        );
    }



}