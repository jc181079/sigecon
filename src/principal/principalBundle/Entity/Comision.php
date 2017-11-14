<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comision
 *
 * @ORM\Table(name="comision")
 * @ORM\Entity
 */
class Comision
{
    /**
     * @var string
     *
     * @ORM\Column(name="decreto", type="string", length=45, nullable=true)
     */
    private $decreto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechadecreto", type="date", nullable=true)
     */
    private $fechadecreto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="decretoactivo", type="boolean", nullable=true)
     */
    private $decretoactivo;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcomision", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcomision;



    /**
     * Set decreto
     *
     * @param string $decreto
     *
     * @return Comision
     */
    public function setDecreto($decreto)
    {
        $this->decreto = $decreto;

        return $this;
    }

    /**
     * Get decreto
     *
     * @return string
     */
    public function getDecreto()
    {
        return $this->decreto;
    }

    /**
     * Set fechadecreto
     *
     * @param \DateTime $fechadecreto
     *
     * @return Comision
     */
    public function setFechadecreto($fechadecreto)
    {
        $this->fechadecreto = $fechadecreto;

        return $this;
    }

    /**
     * Get fechadecreto
     *
     * @return \DateTime
     */
    public function getFechadecreto()
    {
        return $this->fechadecreto;
    }

    /**
     * Set decretoactivo
     *
     * @param boolean $decretoactivo
     *
     * @return Comision
     */
    public function setDecretoactivo($decretoactivo)
    {
        $this->decretoactivo = $decretoactivo;

        return $this;
    }

    /**
     * Get decretoactivo
     *
     * @return boolean
     */
    public function getDecretoactivo()
    {
        return $this->decretoactivo;
    }

    /**
     * Get idcomision
     *
     * @return integer
     */
    public function getIdcomision()
    {
        return $this->idcomision;
    }
}
