<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dispdetalle
 *
 * @ORM\Table(name="dispdetalle", indexes={@ORM\Index(name="fk_dispdetalle_fuente1_idx", columns={"fuente"}), @ORM\Index(name="fk_dispdetalle_solicitud1_idx", columns={"solicitud"})})
 * @ORM\Entity
 */
class Dispdetalle
{
    /**
     * @var string
     *
     * @ORM\Column(name="numerop", type="string", length=45, nullable=true)
     */
    private $numerop;

    /**
     * @var string
     *
     * @ORM\Column(name="denominacionp", type="string", length=45, nullable=true)
     */
    private $denominacionp;

    /**
     * @var string
     *
     * @ORM\Column(name="montop", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $montop;

    /**
     * @var integer
     *
     * @ORM\Column(name="iddispdetalle", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddispdetalle;

    /**
     * @var \principal\principalBundle\Entity\Fuente
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Fuente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fuente", referencedColumnName="idfuente")
     * })
     */
    private $fuente;

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
     * Set numerop
     *
     * @param string $numerop
     *
     * @return Dispdetalle
     */
    public function setNumerop($numerop)
    {
        $this->numerop = $numerop;

        return $this;
    }

    /**
     * Get numerop
     *
     * @return string
     */
    public function getNumerop()
    {
        return $this->numerop;
    }

    /**
     * Set denominacionp
     *
     * @param string $denominacionp
     *
     * @return Dispdetalle
     */
    public function setDenominacionp($denominacionp)
    {
        $this->denominacionp = $denominacionp;

        return $this;
    }

    /**
     * Get denominacionp
     *
     * @return string
     */
    public function getDenominacionp()
    {
        return $this->denominacionp;
    }

    /**
     * Set montop
     *
     * @param string $montop
     *
     * @return Dispdetalle
     */
    public function setMontop($montop)
    {
        $this->montop = $montop;

        return $this;
    }

    /**
     * Get montop
     *
     * @return string
     */
    public function getMontop()
    {
        return $this->montop;
    }

    /**
     * Get iddispdetalle
     *
     * @return integer
     */
    public function getIddispdetalle()
    {
        return $this->iddispdetalle;
    }

    /**
     * Set fuente
     *
     * @param \principal\principalBundle\Entity\Fuente $fuente
     *
     * @return Dispdetalle
     */
    public function setFuente(\principal\principalBundle\Entity\Fuente $fuente = null)
    {
        $this->fuente = $fuente;

        return $this;
    }

    /**
     * Get fuente
     *
     * @return \principal\principalBundle\Entity\Fuente
     */
    public function getFuente()
    {
        return $this->fuente;
    }

    /**
     * Set solicitud
     *
     * @param \principal\principalBundle\Entity\Solicitud $solicitud
     *
     * @return Dispdetalle
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
}
