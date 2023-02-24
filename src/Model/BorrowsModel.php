<?php

namespace App\Model;

use Core\App;
use Core\Kernel\AbstractModel;
class BorrowsModel extends BaseModel
{

    protected static $table = 'borrows';

    protected $id;
    protected $id_abonne;
    protected $id_product;
    protected $date_start;
    protected $date_end;
    protected $titre;
    protected $email;
    protected $nom;

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
    protected $prenom;
    protected $age;
    protected $created_at;

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
    public function getIdAbonne()
    {
        return $this->id_abonne;
    }

    /**
     * @return mixed
     */
    public function getIdProduct()
    {
        return $this->id_product;
    }

    /**
     * @return mixed
     */
    public function getDate_start()
    {
        return $this->date_start;
    }

    /**
     * @return mixed
     */
    public function getDateEnd()
    {
        return $this->date_end;
    }


    public static function insert($post)
    {
        App::getDatabase()->prepareInsert(
            "INSERT INTO " . self::$table . " (id_abonne, id_product, date_start) VALUES (?,?,NOW())",
            array( $post['select-abonne'],$post['select-produits'])
        );
    }

    public static function getAllBorrowsOrderBy($column = 'date_end', $Sorder = 'ASC')
    {
        return App::getDatabase()->query("
        SELECT b.id, b.date_start, a.email, a.nom, a.prenom, a.age, p.titre 
        FROM " . self::$table . " AS b
        LEFT JOIN abonnes AS a ON a.id = b.id_abonne
        LEFT JOIN products AS p ON p.id = b.id_product
        WHERE b.date_end IS NULL
        ORDER BY $column $Sorder",
            get_called_class()
        );
    }



    public static function updateendDate($id)
    {
        App::getDatabase()->prepareInsert(
            "UPDATE " . self::$table . " SET date_end = NOW() WHERE id = ?",
            array($id)
        );
    }

    public static function findById($id,$columId = 'id')
    {
        return App::getDatabase()->prepare("SELECT * FROM  borrows WHERE ".$columId." = ?",[$id],get_called_class());
    }




}