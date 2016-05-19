<?php

namespace SoireeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participation
 */
class Participation
{
    /**
     * @var int
     */
    private $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
