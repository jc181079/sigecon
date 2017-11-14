<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estatus
 *
 * @ORM\Table(name="estatus", indexes={@ORM\Index(name="fk_estatus_tipoestatus1_idx", columns={"idtipoestatus"}), @ORM\Index(name="fk_estatus_solicitud1_idx", columns={"idsolicitud"})})
 * @ORM\Entity
 */
class Estatus
{
    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="text", nullable=true)
     */
    private $observacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaestatus", type="date", nullable=true)
     */
    private $fechaestatus;

    /**
     * @var boolean
     *
     * @ORM\Column(name="puntero", type="boolean", nullable=true)
     */
    private $puntero;

    /**
     * @var integer
     *
     * @ORM\Column(name="idestatus", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idestatus;

    /**
     * @var \principal\principalBundle\Entity\Solicitud
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Solicitud")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idsolicitud", referencedColumnName="idsolicitud")
     * })
     */
    private $idsolicitud;

    /**
     * @var \principal\principalBundle\Entity\Tipoestatus
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Tipoestatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idtipoestatus", referencedColumnName="idtipoestatus")
     * })
     */
    private $idtipoestatus;



    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return Estatus
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set fechaestatus
     *
     * @param \DateTime $fechaestatus
     *
     * @return Estatus
     */
    public function setFechaestatus($fechaestatus)
    {
        $this->fechaestatus = $fechaestatus;

        return $this;
    }

    /**
     * Get fechaestatus
     *
     * @return \DateTime
     */
    public function getFechaestatus()
    {
        return $this->fechaestatus;
    }

    /**
     * Set puntero
     *
     * @param boolean $puntero
     *
     * @return Estatus
     */
    public function setPuntero($puntero)
    {
        $this->puntero = $puntero;

        return $this;
    }

    /**
     * Get puntero
     *
     * @return boolean
     */
    public function getPuntero()
    {
        return $this->puntero;
    }

    /**
     * Get idestatus
     *
     * @return integer
     */
    public function getIdestatus()
    {
        return $this->idestatus;
    }

    /**
     * Set idsolicitud
     *
     * @param \principal\principalBundle\Entity\Solicitud $idsolicitud
     *
     * @return Estatus
     */
    public function setIdsolicitud(\principal\principalBundle\Entity\Solicitud $idsolicitud = null)
    {
        $this->idsolicitud = $idsolicitud;

        return $this;
    }

    /**
     * Get idsolicitud
     *
     * @return \principal\principalBundle\Entity\Solicitud
     */
    public function getIdsolicitud()
    {
        return $this->idsolicitud;
    }

    /**
     * Set idtipoestatus
     *
     * @param \principal\principalBundle\Entity\Tipoestatus $idtipoestatus
     *
     * @return Estatus
     */
    public function setIdtipoestatus(\principal\principalBundle\Entity\Tipoestatus $idtipoestatus = null)
    {
        $this->idtipoestatus = $idtipoestatus;

        return $this;
    }

    /**
     * Get idtipoestatus
     *
     * @return \principal\principalBundle\Entity\Tipoestatus
     */
    public function getIdtipoestatus()
    {
        return $this->idtipoestatus;
    }
}
