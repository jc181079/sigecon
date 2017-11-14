<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adttipo
 *
 * @ORM\Table(name="adttipo")
 * @ORM\Entity
 */
class Adttipo
{
    /**
     * @var string
     *
     * @ORM\Column(name="descripcionadt", type="string", length=45, nullable=true)
     */
    private $descripcionadt;

    /**
     * @var integer
     *
     * @ORM\Column(name="idadttipo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idadttipo;



    /**
     * Set descripcionadt
     *
     * @param string $descripcionadt
     *
     * @return Adttipo
     */
    public function setDescripcionadt($descripcionadt)
    {
        $this->descripcionadt = $descripcionadt;

        return $this;
    }

    /**
     * Get descripcionadt
     *
     * @return string
     */
    public function getDescripcionadt()
    {
        return $this->descripcionadt;
    }

    /**
     * Get idadttipo
     *
     * @return integer
     */
    public function getIdadttipo()
    {
        return $this->idadttipo;
    }
}
