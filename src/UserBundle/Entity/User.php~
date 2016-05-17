<?php
// src/UserBundle/Entity/User.php

namespace UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $telephone;

    /**
     * @var string
     */
    private $regimeAlimentaire;

    /**
     * @var string
     */
    private $allergie;

    /**
     * @var string
     */
    private $photo;


    /**
     * Set nom
     *
     * @param string $nom
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return User
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set regimeAlimentaire
     *
     * @param string $regimeAlimentaire
     * @return User
     */
    public function setRegimeAlimentaire($regimeAlimentaire)
    {
        $this->regimeAlimentaire = $regimeAlimentaire;

        return $this;
    }

    /**
     * Get regimeAlimentaire
     *
     * @return string 
     */
    public function getRegimeAlimentaire()
    {
        return $this->regimeAlimentaire;
    }

    /**
     * Set allergie
     *
     * @param string $allergie
     * @return User
     */
    public function setAllergie($allergie)
    {
        $this->allergie = $allergie;

        return $this;
    }

    /**
     * Get allergie
     *
     * @return string 
     */
    public function getAllergie()
    {
        return $this->allergie;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return User
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }
}
