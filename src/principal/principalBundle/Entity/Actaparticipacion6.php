<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actaparticipacion6
 *
 * @ORM\Table(name="actaparticipacion6", indexes={@ORM\Index(name="fk_actaparticipacion7_empresas1_idx", columns={"idempresas"}), @ORM\Index(name="fk_actaparticipacion6_solicitud1_idx", columns={"idsolicitud"})})
 * @ORM\Entity
 */
class Actaparticipacion6
{
    /**
     * @var string
     *
     * @ORM\Column(name="monto", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $monto;

    /**
     * @var integer
     *
     * @ORM\Column(name="anticipo", type="integer", nullable=true)
     */
    private $anticipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="tiempoentrega", type="integer", nullable=true)
     */
    private $tiempoentrega;

    /**
     * @var integer
     *
     * @ORM\Column(name="tiempogarantia", type="integer", nullable=true)
     */
    private $tiempogarantia;

    /**
     * @var string
     *
     * @ORM\Column(name="tipooferta", type="string", length=7, nullable=true)
     */
    private $tipooferta;

    /**
     * @var string
     *
     * @ORM\Column(name="renglones", type="string", length=45, nullable=true)
     */
    private $renglones;

    /**
     * @var integer
     *
     * @ORM\Column(name="idactaparticipacion7", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idactaparticipacion7;

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
     * @var \principal\principalBundle\Entity\Empresas
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Empresas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idempresas", referencedColumnName="idempresas")
     * })
     */
    private $idempresas;



    /**
     * Set monto
     *
     * @param string $monto
     *
     * @return Actaparticipacion6
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;

        return $this;
    }

    /**
     * Get monto
     *
     * @return string
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * Set anticipo
     *
     * @param integer $anticipo
     *
     * @return Actaparticipacion6
     */
    public function setAnticipo($anticipo)
    {
        $this->anticipo = $anticipo;

        return $this;
    }

    /**
     * Get anticipo
     *
     * @return integer
     */
    public function getAnticipo()
    {
        return $this->anticipo;
    }

    /**
     * Set tiempoentrega
     *
     * @param integer $tiempoentrega
     *
     * @return Actaparticipacion6
     */
    public function setTiempoentrega($tiempoentrega)
    {
        $this->tiempoentrega = $tiempoentrega;

        return $this;
    }

    /**
     * Get tiempoentrega
     *
     * @return integer
     */
    public function getTiempoentrega()
    {
        return $this->tiempoentrega;
    }

    /**
     * Set tiempogarantia
     *
     * @param integer $tiempogarantia
     *
     * @return Actaparticipacion6
     */
    public function setTiempogarantia($tiempogarantia)
    {
        $this->tiempogarantia = $tiempogarantia;

        return $this;
    }

    /**
     * Get tiempogarantia
     *
     * @return integer
     */
    public function getTiempogarantia()
    {
        return $this->tiempogarantia;
    }

    /**
     * Set tipooferta
     *
     * @param string $tipooferta
     *
     * @return Actaparticipacion6
     */
    public function setTipooferta($tipooferta)
    {
        $this->tipooferta = $tipooferta;

        return $this;
    }

    /**
     * Get tipooferta
     *
     * @return string
     */
    public function getTipooferta()
    {
        return $this->tipooferta;
    }

    /**
     * Set renglones
     *
     * @param string $renglones
     *
     * @return Actaparticipacion6
     */
    public function setRenglones($renglones)
    {
        $this->renglones = $renglones;

        return $this;
    }

    /**
     * Get renglones
     *
     * @return string
     */
    public function getRenglones()
    {
        return $this->renglones;
    }

    /**
     * Get idactaparticipacion7
     *
     * @return integer
     */
    public function getIdactaparticipacion7()
    {
        return $this->idactaparticipacion7;
    }

    /**
     * Set idsolicitud
     *
     * @param \principal\principalBundle\Entity\Solicitud $idsolicitud
     *
     * @return Actaparticipacion6
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
     * Set idempresas
     *
     * @param \principal\principalBundle\Entity\Empresas $idempresas
     *
     * @return Actaparticipacion6
     */
    public function setIdempresas(\principal\principalBundle\Entity\Empresas $idempresas = null)
    {
        $this->idempresas = $idempresas;

        return $this;
    }

    /**
     * Get idempresas
     *
     * @return \principal\principalBundle\Entity\Empresas
     */
    public function getIdempresas()
    {
        return $this->idempresas;
    }
}
