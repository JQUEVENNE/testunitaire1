<?php


namespace App;


use phpDocumentor\Reflection\Types\Integer;

class User
{
  private $Nom;
  private $prenom;
  private $email;
  private $age;

    public function __construct($Nom,$prenom,$email,$age)
    {
        $this->Nom = $Nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->age = $age;
  }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * @param mixed $Nom
     */
    public function setNom($Nom): void
    {
        $this->Nom = $Nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom) : void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getAge(): Integer
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age) : void
    {
        $this->age = $age;
    }
}