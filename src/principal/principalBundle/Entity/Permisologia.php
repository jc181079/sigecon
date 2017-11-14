<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Permisologia
 *
 * @ORM\Table(name="permisologia", indexes={@ORM\Index(name="fk_permosologia_perfil1_idx", columns={"perfil"})})
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
     * @ORM\Column(name="modificar", type="boolean", nullable=true)
     */
    private $modificar;

    /**
     * @var boolean
     *
     * @ORM\Column(name="consultar", type="boolean", nullable=true)
     */
    private $consultar;

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
     * @var \principal\principalBundle\Entity\Perfil
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Perfil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="perfil", referencedColumnName="idperfil")
     * })
     */
    private $perfil;



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
     * Set perfil
     *
     * @param \principal\principalBundle\Entity\Perfil $perfil
     *
     * @return Permisologia
     */
    public function setPerfil(\principal\principalBundle\Entity\Perfil $perfil = null)
    {
        $this->perfil = $perfil;

        return $this;
    }

    /**
     * Get perfil
     *
     * @return \principal\principalBundle\Entity\Perfil
     */
    public function getPerfil()
    {
        return $this->perfil;
    }
}
