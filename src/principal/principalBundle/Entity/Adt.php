<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adt
 *
 * @ORM\Table(name="adt", indexes={@ORM\Index(name="fk_adjudicaciones_empresas1_idx", columns={"idempresas"}), @ORM\Index(name="fk_adt_adttipo1_idx", columns={"idadttipo"}), @ORM\Index(name="fk_adt_libroproceso1_idx", columns={"idlibroproceso"}), @ORM\Index(name="fk_adt_solicitud1_idx", columns={"solicitud_idsolicitud"})})
 * @ORM\Entity
 */
class Adt
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idadt", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idadt;

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
     * @var \principal\principalBundle\Entity\Adttipo
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Adttipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idadttipo", referencedColumnName="idadttipo")
     * })
     */
    private $idadttipo;

    /**
     * @var \principal\principalBundle\Entity\Libroproceso
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Libroproceso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idlibroproceso", referencedColumnName="idlibroproceso")
     * })
     */
    private $idlibroproceso;

    /**
     * @var \principal\principalBundle\Entity\Solicitud
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Solicitud")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="solicitud_idsolicitud", referencedColumnName="idsolicitud")
     * })
     */
    private $solicitudsolicitud;



    /**
     * Get idadt
     *
     * @return integer
     */
    public function getIdadt()
    {
        return $this->idadt;
    }

    /**
     * Set idempresas
     *
     * @param \principal\principalBundle\Entity\Empresas $idempresas
     *
     * @return Adt
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
     * Set idadttipo
     *
     * @param \principal\principalBundle\Entity\Adttipo $idadttipo
     *
     * @return Adt
     */
    public function setIdadttipo(\principal\principalBundle\Entity\Adttipo $idadttipo = null)
    {
        $this->idadttipo = $idadttipo;

        return $this;
    }

    /**
     * Get idadttipo
     *
     * @return \principal\principalBundle\Entity\Adttipo
     */
    public function getIdadttipo()
    {
        return $this->idadttipo;
    }

    /**
     * Set idlibroproceso
     *
     * @param \principal\principalBundle\Entity\Libroproceso $idlibroproceso
     *
     * @return Adt
     */
    public function setIdlibroproceso(\principal\principalBundle\Entity\Libroproceso $idlibroproceso = null)
    {
        $this->idlibroproceso = $idlibroproceso;

        return $this;
    }

    /**
     * Get idlibroproceso
     *
     * @return \principal\principalBundle\Entity\Libroproceso
     */
    public function getIdlibroproceso()
    {
        return $this->idlibroproceso;
    }

    /**
     * Set solicitudsolicitud
     *
     * @param \principal\principalBundle\Entity\Solicitud $solicitudsolicitud
     *
     * @return Adt
     */
    public function setSolicitudsolicitud(\principal\principalBundle\Entity\Solicitud $solicitudsolicitud = null)
    {
        $this->solicitudsolicitud = $solicitudsolicitud;

        return $this;
    }

    /**
     * Get solicitudsolicitud
     *
     * @return \principal\principalBundle\Entity\Solicitud
     */
    public function getSolicitudsolicitud()
    {
        return $this->solicitudsolicitud;
    }
}
