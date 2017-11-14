<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trabajoasignado
 *
 * @ORM\Table(name="trabajoasignado", indexes={@ORM\Index(name="fk_trabajoasignado_usuarios1_idx", columns={"usuarios"}), @ORM\Index(name="fk_trabajoasignado_solicitud1_idx", columns={"solicitud"})})
 * @ORM\Entity
 */
class Trabajoasignado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idtrabajoasignado", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtrabajoasignado;

    /**
     * @var \principal\principalBundle\Entity\Solicitud
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Solicitud")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="solicitud", referencedColumnName="idsolicitud")
     * })
     */
    private $solicitud;

    /**
     * @var \principal\principalBundle\Entity\Usuarios
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuarios", referencedColumnName="idusuarios")
     * })
     */
    private $usuarios;



    /**
     * Get idtrabajoasignado
     *
     * @return integer
     */
    public function getIdtrabajoasignado()
    {
        return $this->idtrabajoasignado;
    }

    /**
     * Set solicitud
     *
     * @param \principal\principalBundle\Entity\Solicitud $solicitud
     *
     * @return Trabajoasignado
     */
    public function setSolicitud(\principal\principalBundle\Entity\Solicitud $solicitud = null)
    {
        $this->solicitud = $solicitud;

        return $this;
    }

    /**
     * Get solicitud
     *
     * @return \principal\principalBundle\Entity\Solicitud
     */
    public function getSolicitud()
    {
        return $this->solicitud;
    }

    /**
     * Set usuarios
     *
     * @param \principal\principalBundle\Entity\Usuarios $usuarios
     *
     * @return Trabajoasignado
     */
    public function setUsuarios(\principal\principalBundle\Entity\Usuarios $usuarios = null)
    {
        $this->usuarios = $usuarios;

        return $this;
    }

    /**
     * Get usuarios
     *
     * @return \principal\principalBundle\Entity\Usuarios
     */
    public function getUsuarios()
    {
        return $this->usuarios;
    }
}
