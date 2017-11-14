<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Garantiaoferta
 *
 * @ORM\Table(name="garantiaoferta", indexes={@ORM\Index(name="fk_garantiaoferta_empresas1_idx", columns={"idempresas"}), @ORM\Index(name="fk_garantiaoferta_pliego1_idx", columns={"idpliego"}), @ORM\Index(name="fk_garantiaoferta_solicitud1_idx", columns={"idsolicitud"})})
 * @ORM\Entity
 */
class Garantiaoferta
{
    /**
     * @var string
     *
     * @ORM\Column(name="emisor", type="string", length=45, nullable=true)
     */
    private $emisor;

    /**
     * @var string
     *
     * @ORM\Column(name="monto", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $monto;

    /**
     * @var string
     *
     * @ORM\Column(name="tipogarantia", type="string", length=45, nullable=true)
     */
    private $tipogarantia;

    /**
     * @var string
     *
     * @ORM\Column(name="codigogarantia", type="string", length=45, nullable=true)
     */
    private $codigogarantia;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=45, nullable=true)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="enteemisor", type="string", length=45, nullable=true)
     */
    private $enteemisor;

    /**
     * @var string
     *
     * @ORM\Column(name="montogarantia", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $montogarantia;

    /**
     * @var integer
     *
     * @ORM\Column(name="idgarantiaoferta", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idgarantiaoferta;

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
     * @var \principal\principalBundle\Entity\Pliego
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Pliego")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idpliego", referencedColumnName="idpliego")
     * })
     */
    private $idpliego;

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
     * Set emisor
     *
     * @param string $emisor
     *
     * @return Garantiaoferta
     */
    public function setEmisor($emisor)
    {
        $this->emisor = $emisor;

        return $this;
    }

    /**
     * Get emisor
     *
     * @return string
     */
    public function getEmisor()
    {
        return $this->emisor;
    }

    /**
     * Set monto
     *
     * @param string $monto
     *
     * @return Garantiaoferta
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
     * Set tipogarantia
     *
     * @param string $tipogarantia
     *
     * @return Garantiaoferta
     */
    public function setTipogarantia($tipogarantia)
    {
        $this->tipogarantia = $tipogarantia;

        return $this;
    }

    /**
     * Get tipogarantia
     *
     * @return string
     */
    public function getTipogarantia()
    {
        return $this->tipogarantia;
    }

    /**
     * Set codigogarantia
     *
     * @param string $codigogarantia
     *
     * @return Garantiaoferta
     */
    public function setCodigogarantia($codigogarantia)
    {
        $this->codigogarantia = $codigogarantia;

        return $this;
    }

    /**
     * Get codigogarantia
     *
     * @return string
     */
    public function getCodigogarantia()
    {
        return $this->codigogarantia;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     *
     * @return Garantiaoferta
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set enteemisor
     *
     * @param string $enteemisor
     *
     * @return Garantiaoferta
     */
    public function setEnteemisor($enteemisor)
    {
        $this->enteemisor = $enteemisor;

        return $this;
    }

    /**
     * Get enteemisor
     *
     * @return string
     */
    public function getEnteemisor()
    {
        return $this->enteemisor;
    }

    /**
     * Set montogarantia
     *
     * @param string $montogarantia
     *
     * @return Garantiaoferta
     */
    public function setMontogarantia($montogarantia)
    {
        $this->montogarantia = $montogarantia;

        return $this;
    }

    /**
     * Get montogarantia
     *
     * @return string
     */
    public function getMontogarantia()
    {
        return $this->montogarantia;
    }

    /**
     * Get idgarantiaoferta
     *
     * @return integer
     */
    public function getIdgarantiaoferta()
    {
        return $this->idgarantiaoferta;
    }

    /**
     * Set idempresas
     *
     * @param \principal\principalBundle\Entity\Empresas $idempresas
     *
     * @return Garantiaoferta
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

    /**
     * Set idpliego
     *
     * @param \principal\principalBundle\Entity\Pliego $idpliego
     *
     * @return Garantiaoferta
     */
    public function setIdpliego(\principal\principalBundle\Entity\Pliego $idpliego = null)
    {
        $this->idpliego = $idpliego;

        return $this;
    }

    /**
     * Get idpliego
     *
     * @return \principal\principalBundle\Entity\Pliego
     */
    public function getIdpliego()
    {
        return $this->idpliego;
    }

    /**
     * Set idsolicitud
     *
     * @param \principal\principalBundle\Entity\Solicitud $idsolicitud
     *
     * @return Garantiaoferta
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
}
