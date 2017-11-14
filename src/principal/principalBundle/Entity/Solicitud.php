<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Solicitud
 *
 * @ORM\Table(name="solicitud", indexes={@ORM\Index(name="fk_solicitud_entesolicitante_idx", columns={"entesolicitante"}), @ORM\Index(name="fk_solicitud_usuarios1_idx", columns={"usuarios_idusuarios"})})
 * @ORM\Entity
 */
class Solicitud
{
    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="objeto", type="text", nullable=true)
     */
    private $objeto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="adjudicacion", type="string", length=7, nullable=true)
     */
    private $adjudicacion;

    /**
     * @var string
     *
     * @ORM\Column(name="actividad", type="string", length=8, nullable=true)
     */
    private $actividad;

    /**
     * @var string
     *
     * @ORM\Column(name="procedencia", type="string", length=12, nullable=true)
     */
    private $procedencia;

    /**
     * @var string
     *
     * @ORM\Column(name="presupuestobase", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $presupuestobase;

    /**
     * @var string
     *
     * @ORM\Column(name="disponibilidadtotal", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $disponibilidadtotal;

    /**
     * @var string
     *
     * @ORM\Column(name="modalidadestimada", type="string", length=7, nullable=true)
     */
    private $modalidadestimada;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecharecibida", type="date", nullable=true)
     */
    private $fecharecibida;

    /**
     * @var string
     *
     * @ORM\Column(name="nroofico", type="string", length=45, nullable=true)
     */
    private $nroofico;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaoficio", type="date", nullable=true)
     */
    private $fechaoficio;

    /**
     * @var integer
     *
     * @ORM\Column(name="periodosol", type="integer", nullable=true)
     */
    private $periodosol;

    /**
     * @var integer
     *
     * @ORM\Column(name="idsolicitud", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsolicitud;

    /**
     * @var \principal\principalBundle\Entity\Entesolicitante
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Entesolicitante")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="entesolicitante", referencedColumnName="identesolicitante")
     * })
     */
    private $entesolicitante;

    /**
     * @var \principal\principalBundle\Entity\Usuarios
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuarios_idusuarios", referencedColumnName="idusuarios")
     * })
     */
    private $usuariosusuarios;



    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Solicitud
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set objeto
     *
     * @param string $objeto
     *
     * @return Solicitud
     */
    public function setObjeto($objeto)
    {
        $this->objeto = $objeto;

        return $this;
    }

    /**
     * Get objeto
     *
     * @return string
     */
    public function getObjeto()
    {
        return $this->objeto;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Solicitud
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set adjudicacion
     *
     * @param string $adjudicacion
     *
     * @return Solicitud
     */
    public function setAdjudicacion($adjudicacion)
    {
        $this->adjudicacion = $adjudicacion;

        return $this;
    }

    /**
     * Get adjudicacion
     *
     * @return string
     */
    public function getAdjudicacion()
    {
        return $this->adjudicacion;
    }

    /**
     * Set actividad
     *
     * @param string $actividad
     *
     * @return Solicitud
     */
    public function setActividad($actividad)
    {
        $this->actividad = $actividad;

        return $this;
    }

    /**
     * Get actividad
     *
     * @return string
     */
    public function getActividad()
    {
        return $this->actividad;
    }

    /**
     * Set procedencia
     *
     * @param string $procedencia
     *
     * @return Solicitud
     */
    public function setProcedencia($procedencia)
    {
        $this->procedencia = $procedencia;

        return $this;
    }

    /**
     * Get procedencia
     *
     * @return string
     */
    public function getProcedencia()
    {
        return $this->procedencia;
    }

    /**
     * Set presupuestobase
     *
     * @param string $presupuestobase
     *
     * @return Solicitud
     */
    public function setPresupuestobase($presupuestobase)
    {
        $this->presupuestobase = $presupuestobase;

        return $this;
    }

    /**
     * Get presupuestobase
     *
     * @return string
     */
    public function getPresupuestobase()
    {
        return $this->presupuestobase;
    }

    /**
     * Set disponibilidadtotal
     *
     * @param string $disponibilidadtotal
     *
     * @return Solicitud
     */
    public function setDisponibilidadtotal($disponibilidadtotal)
    {
        $this->disponibilidadtotal = $disponibilidadtotal;

        return $this;
    }

    /**
     * Get disponibilidadtotal
     *
     * @return string
     */
    public function getDisponibilidadtotal()
    {
        return $this->disponibilidadtotal;
    }

    /**
     * Set modalidadestimada
     *
     * @param string $modalidadestimada
     *
     * @return Solicitud
     */
    public function setModalidadestimada($modalidadestimada)
    {
        $this->modalidadestimada = $modalidadestimada;

        return $this;
    }

    /**
     * Get modalidadestimada
     *
     * @return string
     */
    public function getModalidadestimada()
    {
        return $this->modalidadestimada;
    }

    /**
     * Set fecharecibida
     *
     * @param \DateTime $fecharecibida
     *
     * @return Solicitud
     */
    public function setFecharecibida($fecharecibida)
    {
        $this->fecharecibida = $fecharecibida;

        return $this;
    }

    /**
     * Get fecharecibida
     *
     * @return \DateTime
     */
    public function getFecharecibida()
    {
        return $this->fecharecibida;
    }

    /**
     * Set nroofico
     *
     * @param string $nroofico
     *
     * @return Solicitud
     */
    public function setNroofico($nroofico)
    {
        $this->nroofico = $nroofico;

        return $this;
    }

    /**
     * Get nroofico
     *
     * @return string
     */
    public function getNroofico()
    {
        return $this->nroofico;
    }

    /**
     * Set fechaoficio
     *
     * @param \DateTime $fechaoficio
     *
     * @return Solicitud
     */
    public function setFechaoficio($fechaoficio)
    {
        $this->fechaoficio = $fechaoficio;

        return $this;
    }

    /**
     * Get fechaoficio
     *
     * @return \DateTime
     */
    public function getFechaoficio()
    {
        return $this->fechaoficio;
    }

    /**
     * Set periodosol
     *
     * @param integer $periodosol
     *
     * @return Solicitud
     */
    public function setPeriodosol($periodosol)
    {
        $this->periodosol = $periodosol;

        return $this;
    }

    /**
     * Get periodosol
     *
     * @return integer
     */
    public function getPeriodosol()
    {
        return $this->periodosol;
    }

    /**
     * Get idsolicitud
     *
     * @return integer
     */
    public function getIdsolicitud()
    {
        return $this->idsolicitud;
    }

    /**
     * Set entesolicitante
     *
     * @param \principal\principalBundle\Entity\Entesolicitante $entesolicitante
     *
     * @return Solicitud
     */
    public function setEntesolicitante(\principal\principalBundle\Entity\Entesolicitante $entesolicitante = null)
    {
        $this->entesolicitante = $entesolicitante;

        return $this;
    }

    /**
     * Get entesolicitante
     *
     * @return \principal\principalBundle\Entity\Entesolicitante
     */
    public function getEntesolicitante()
    {
        return $this->entesolicitante;
    }

    /**
     * Set usuariosusuarios
     *
     * @param \principal\principalBundle\Entity\Usuarios $usuariosusuarios
     *
     * @return Solicitud
     */
    public function setUsuariosusuarios(\principal\principalBundle\Entity\Usuarios $usuariosusuarios = null)
    {
        $this->usuariosusuarios = $usuariosusuarios;

        return $this;
    }

    /**
     * Get usuariosusuarios
     *
     * @return \principal\principalBundle\Entity\Usuarios
     */
    public function getUsuariosusuarios()
    {
        return $this->usuariosusuarios;
    }
}
