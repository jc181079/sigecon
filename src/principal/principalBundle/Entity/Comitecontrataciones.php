<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comitecontrataciones
 *
 * @ORM\Table(name="comitecontrataciones", indexes={@ORM\Index(name="fk_comitecontrataciones_funcionaros1_idx", columns={"idfuncionaros"}), @ORM\Index(name="fk_comitecontrataciones_comision1_idx", columns={"idcomision"})})
 * @ORM\Entity
 */
class Comitecontrataciones
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=true)
     */
    private $activo;

    /**
     * @var string
     *
     * @ORM\Column(name="tipomiembro", type="string", length=9, nullable=true)
     */
    private $tipomiembro;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcomisioncontrataciones", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcomisioncontrataciones;

    /**
     * @var \principal\principalBundle\Entity\Comision
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Comision")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idcomision", referencedColumnName="idcomision")
     * })
     */
    private $idcomision;

    /**
     * @var \principal\principalBundle\Entity\Funcionaros
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Funcionaros")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idfuncionaros", referencedColumnName="idfuncionaros")
     * })
     */
    private $idfuncionaros;



    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Comitecontrataciones
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set tipomiembro
     *
     * @param string $tipomiembro
     *
     * @return Comitecontrataciones
     */
    public function setTipomiembro($tipomiembro)
    {
        $this->tipomiembro = $tipomiembro;

        return $this;
    }

    /**
     * Get tipomiembro
     *
     * @return string
     */
    public function getTipomiembro()
    {
        return $this->tipomiembro;
    }

    /**
     * Get idcomisioncontrataciones
     *
     * @return integer
     */
    public function getIdcomisioncontrataciones()
    {
        return $this->idcomisioncontrataciones;
    }

    /**
     * Set idcomision
     *
     * @param \principal\principalBundle\Entity\Comision $idcomision
     *
     * @return Comitecontrataciones
     */
    public function setIdcomision(\principal\principalBundle\Entity\Comision $idcomision = null)
    {
        $this->idcomision = $idcomision;

        return $this;
    }

    /**
     * Get idcomision
     *
     * @return \principal\principalBundle\Entity\Comision
     */
    public function getIdcomision()
    {
        return $this->idcomision;
    }

    /**
     * Set idfuncionaros
     *
     * @param \principal\principalBundle\Entity\Funcionaros $idfuncionaros
     *
     * @return Comitecontrataciones
     */
    public function setIdfuncionaros(\principal\principalBundle\Entity\Funcionaros $idfuncionaros = null)
    {
        $this->idfuncionaros = $idfuncionaros;

        return $this;
    }

    /**
     * Get idfuncionaros
     *
     * @return \principal\principalBundle\Entity\Funcionaros
     */
    public function getIdfuncionaros()
    {
        return $this->idfuncionaros;
    }
}
