<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipoestatus
 *
 * @ORM\Table(name="tipoestatus")
 * @ORM\Entity
 */
class Tipoestatus
{
    /**
     * @var string
     *
     * @ORM\Column(name="descripcionestatus", type="string", length=45, nullable=true)
     */
    private $descripcionestatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtipoestatus", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtipoestatus;



    /**
     * Set descripcionestatus
     *
     * @param string $descripcionestatus
     *
     * @return Tipoestatus
     */
    public function setDescripcionestatus($descripcionestatus)
    {
        $this->descripcionestatus = $descripcionestatus;

        return $this;
    }

    /**
     * Get descripcionestatus
     *
     * @return string
     */
    public function getDescripcionestatus()
    {
        return $this->descripcionestatus;
    }

    /**
     * Get idtipoestatus
     *
     * @return integer
     */
    public function getIdtipoestatus()
    {
        return $this->idtipoestatus;
    }
}
