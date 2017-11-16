<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Permisologia
 *
 * @ORM\Table(name="permisologia", indexes={@ORM\Index(name="fk_permisologia_modulos1_idx", columns={"idmodulos"})})
 * @ORM\Entity
 */
class Permisologia
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="incluir", type="boolean", nullable=true)
     */
    private $incluir;

    /**
     * @var boolean
     *
     * @ORM\Column(name="consultar", type="boolean", nullable=true)
     */
    private $consultar;

    /**
     * @var boolean
     *
     * @ORM\Column(name="modificar", type="boolean", nullable=true)
     */
    private $modificar;

    /**
     * @var boolean
     *
     * @ORM\Column(name="eliminar", type="boolean", nullable=true)
     */
    private $eliminar;

    /**
     * @var integer
     *
     * @ORM\Column(name="idpermisologia", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpermisologia;

    /**
     * @var \principal\principalBundle\Entity\Modulos
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Modulos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idmodulos", referencedColumnName="idmodulos")
     * })
     */
    private $idmodulos;



    /**
     * Set incluir
     *
     * @param boolean $incluir
     *
     * @return Permisologia
     */
    public function setIncluir($incluir)
    {
        $this->incluir = $incluir;

        return $this;
    }

    /**
     * Get incluir
     *
     * @return boolean
     */
    public function getIncluir()
    {
        return $this->incluir;
    }

    /**
     * Set consultar
     *
     * @param boolean $consultar
     *
     * @return Permisologia
     */
    public function setConsultar($consultar)
    {
        $this->consultar = $consultar;

        return $this;
    }

    /**
     * Get consultar
     *
     * @return boolean
     */
    public function getConsultar()
    {
        return $this->consultar;
    }

    /**
     * Set modificar
     *
     * @param boolean $modificar
     *
     * @return Permisologia
     */
    public function setModificar($modificar)
    {
        $this->modificar = $modificar;

        return $this;
    }

    /**
     * Get modificar
     *
     * @return boolean
     */
    public function getModificar()
    {
        return $this->modificar;
    }

    /**
     * Set eliminar
     *
     * @param boolean $eliminar
     *
     * @return Permisologia
     */
    public function setEliminar($eliminar)
    {
        $this->eliminar = $eliminar;

        return $this;
    }

    /**
     * Get eliminar
     *
     * @return boolean
     */
    public function getEliminar()
    {
        return $this->eliminar;
    }

    /**
     * Get idpermisologia
     *
     * @return integer
     */
    public function getIdpermisologia()
    {
        return $this->idpermisologia;
    }

    /**
     * Set idmodulos
     *
     * @param \principal\principalBundle\Entity\Modulos $idmodulos
     *
     * @return Permisologia
     */
    public function setIdmodulos(\principal\principalBundle\Entity\Modulos $idmodulos = null)
    {
        $this->idmodulos = $idmodulos;

        return $this;
    }

    /**
     * Get idmodulos
     *
     * @return \principal\principalBundle\Entity\Modulos
     */
    public function getIdmodulos()
    {
        return $this->idmodulos;
    }
}
