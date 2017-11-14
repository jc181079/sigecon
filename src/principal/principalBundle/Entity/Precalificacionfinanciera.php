<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Precalificacionfinanciera
 *
 * @ORM\Table(name="precalificacionfinanciera", indexes={@ORM\Index(name="fk_precalificacionfinanciera_empresas1_idx", columns={"idempresas"}), @ORM\Index(name="fk_precalificacionfinanciera_solicitud1_idx", columns={"idsolicitud"}), @ORM\Index(name="fk_precalificacionfinanciera_libroproceso1_idx", columns={"idlibroproceso"})})
 * @ORM\Entity
 */
class Precalificacionfinanciera
{
    /**
     * @var string
     *
     * @ORM\Column(name="cfec", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $cfec;

    /**
     * @var string
     *
     * @ORM\Column(name="nfec", type="string", length=7, nullable=true)
     */
    private $nfec;

    /**
     * @var integer
     *
     * @ORM\Column(name="idprecalificacionfinanciera", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprecalificacionfinanciera;

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
     *   @ORM\JoinColumn(name="idsolicitud", referencedColumnName="idsolicitud")
     * })
     */
    private $idsolicitud;



    /**
     * Set cfec
     *
     * @param string $cfec
     *
     * @return Precalificacionfinanciera
     */
    public function setCfec($cfec)
    {
        $this->cfec = $cfec;

        return $this;
    }

    /**
     * Get cfec
     *
     * @return string
     */
    public function getCfec()
    {
        return $this->cfec;
    }

    /**
     * Set nfec
     *
     * @param string $nfec
     *
     * @return Precalificacionfinanciera
     */
    public function setNfec($nfec)
    {
        $this->nfec = $nfec;

        return $this;
    }

    /**
     * Get nfec
     *
     * @return string
     */
    public function getNfec()
    {
        return $this->nfec;
    }

    /**
     * Get idprecalificacionfinanciera
     *
     * @return integer
     */
    public function getIdprecalificacionfinanciera()
    {
        return $this->idprecalificacionfinanciera;
    }

    /**
     * Set idempresas
     *
     * @param \principal\principalBundle\Entity\Empresas $idempresas
     *
     * @return Precalificacionfinanciera
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
     * Set idlibroproceso
     *
     * @param \principal\principalBundle\Entity\Libroproceso $idlibroproceso
     *
     * @return Precalificacionfinanciera
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
     * Set idsolicitud
     *
     * @param \principal\principalBundle\Entity\Solicitud $idsolicitud
     *
     * @return Precalificacionfinanciera
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
