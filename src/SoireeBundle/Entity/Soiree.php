<?php

namespace SoireeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Soiree
 */
class Soiree
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $theme;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Soiree
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set theme
     *
     * @param string $theme
     * @return Soiree
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * Get theme
     *
     * @return string 
     */
    public function getTheme()
    {
        return $this->theme;
    }
    /**
     * @var \PlatsBundle\Entity\Plats
     */
    private $adress;


    /**
     * Set adress
     *
     * @param \PlatsBundle\Entity\Plats $adress
     * @return Soiree
     */
    public function setAdress(\PlatsBundle\Entity\Plats $adress = null)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return \PlatsBundle\Entity\Plats 
     */
    public function getAdress()
    {
        return $this->adress;
    }
    /**
     * @var \PlatsBundle\Entity\Plats
     */
    private $plats;


    /**
     * Set plats
     *
     * @param \PlatsBundle\Entity\Plats $plats
     * @return Soiree
     */
    public function setPlats(\PlatsBundle\Entity\Plats $plats = null)
    {
        $this->plats = $plats;

        return $this;
    }

    /**
     * Get plats
     *
     * @return \PlatsBundle\Entity\Plats 
     */
    public function getPlats()
    {
        return $this->plats;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $users;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $soirees;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
        $this->soirees = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add users
     *
     * @param \UserBundle\Entity\User $users
     * @return Soiree
     */
    public function addUser(\UserBundle\Entity\User $users)
    {
        $this->users[] = $users;

        return $this;
    }

    /**
     * Remove users
     *
     * @param \UserBundle\Entity\User $users
     */
    public function removeUser(\UserBundle\Entity\User $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Add soirees
     *
     * @param \SoireeBundle\Entity\Soiree $soirees
     * @return Soiree
     */
    public function addSoiree(\SoireeBundle\Entity\Soiree $soirees)
    {
        $this->soirees[] = $soirees;

        return $this;
    }

    /**
     * Remove soirees
     *
     * @param \SoireeBundle\Entity\Soiree $soirees
     */
    public function removeSoiree(\SoireeBundle\Entity\Soiree $soirees)
    {
        $this->soirees->removeElement($soirees);
    }

    /**
     * Get soirees
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSoirees()
    {
        return $this->soirees;
    }
}
