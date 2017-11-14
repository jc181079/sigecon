<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entesolicitante
 *
 * @ORM\Table(name="entesolicitante")
 * @ORM\Entity
 */
class Entesolicitante
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombreente", type="text", nullable=true)
     */
    private $nombreente;

    /**
     * @var integer
     *
     * @ORM\Column(name="identesolicitante", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $identesolicitante;



    /**
     * Set nombreente
     *
     * @param string $nombreente
     *
     * @return Entesolicitante
     */
    public function setNombreente($nombreente)
    {
        $this->nombreente = $nombreente;

        return $this;
    }

    /**
     * Get nombreente
     *
     * @return string
     */
    public function getNombreente()
    {
        return $this->nombreente;
    }

    /**
     * Get identesolicitante
     *
     * @return integer
     */
    public function getIdentesolicitante()
    {
        return $this->identesolicitante;
    }
}
