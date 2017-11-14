<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pliego
 *
 * @ORM\Table(name="pliego", indexes={@ORM\Index(name="fk_pliego_libroproceso1_idx", columns={"libroproceso"}), @ORM\Index(name="fk_pliego_solicitud1_idx", columns={"idsolicitud"})})
 * @ORM\Entity
 */
class Pliego
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="frpinicio", type="date", nullable=true)
     */
    private $frpinicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="frpfin", type="date", nullable=true)
     */
    private $frpfin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fapinicio", type="date", nullable=true)
     */
    private $fapinicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fapfin", type="date", nullable=true)
     */
    private $fapfin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="frap", type="date", nullable=true)
     */
    private $frap;

    /**
     * @var string
     *
     * @ORM\Column(name="hrap", type="string", length=7, nullable=true)
     */
    private $hrap;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fvt", type="date", nullable=true)
     */
    private $fvt;

    /**
     * @var string
     *
     * @ORM\Column(name="lvt", type="text", nullable=true)
     */
    private $lvt;

    /**
     * @var string
     *
     * @ORM\Column(name="hvt", type="string", length=7, nullable=true)
     */
    private $hvt;

    /**
     * @var string
     *
     * @ORM\Column(name="prvt", type="string", length=45, nullable=true)
     */
    private $prvt;

    /**
     * @var string
     *
     * @ORM\Column(name="tprvt", type="string", length=45, nullable=true)
     */
    private $tprvt;

    /**
     * @var string
     *
     * @ORM\Column(name="hrpam", type="string", length=45, nullable=true)
     */
    private $hrpam;

    /**
     * @var string
     *
     * @ORM\Column(name="hrppm", type="string", length=45, nullable=true)
     */
    private $hrppm;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fap", type="date", nullable=true)
     */
    private $fap;

    /**
     * @var string
     *
     * @ORM\Column(name="hrsap", type="string", length=45, nullable=true)
     */
    private $hrsap;

    /**
     * @var string
     *
     * @ORM\Column(name="hasap", type="string", length=7, nullable=true)
     */
    private $hasap;

    /**
     * @var string
     *
     * @ORM\Column(name="mecanismo", type="text", nullable=true)
     */
    private $mecanismo;

    /**
     * @var integer
     *
     * @ORM\Column(name="pfmin", type="integer", nullable=true)
     */
    private $pfmin;

    /**
     * @var integer
     *
     * @ORM\Column(name="pfmax", type="integer", nullable=true)
     */
    private $pfmax;

    /**
     * @var integer
     *
     * @ORM\Column(name="ptmin", type="integer", nullable=true)
     */
    private $ptmin;

    /**
     * @var integer
     *
     * @ORM\Column(name="ptmax", type="integer", nullable=true)
     */
    private $ptmax;

    /**
     * @var integer
     *
     * @ORM\Column(name="idpliego", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpliego;

    /**
     * @var \principal\principalBundle\Entity\Libroproceso
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Libroproceso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="libroproceso", referencedColumnName="idlibroproceso")
     * })
     */
    private $libroproceso;

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
     * Set frpinicio
     *
     * @param \DateTime $frpinicio
     *
     * @return Pliego
     */
    public function setFrpinicio($frpinicio)
    {
        $this->frpinicio = $frpinicio;

        return $this;
    }

    /**
     * Get frpinicio
     *
     * @return \DateTime
     */
    public function getFrpinicio()
    {
        return $this->frpinicio;
    }

    /**
     * Set frpfin
     *
     * @param \DateTime $frpfin
     *
     * @return Pliego
     */
    public function setFrpfin($frpfin)
    {
        $this->frpfin = $frpfin;

        return $this;
    }

    /**
     * Get frpfin
     *
     * @return \DateTime
     */
    public function getFrpfin()
    {
        return $this->frpfin;
    }

    /**
     * Set fapinicio
     *
     * @param \DateTime $fapinicio
     *
     * @return Pliego
     */
    public function setFapinicio($fapinicio)
    {
        $this->fapinicio = $fapinicio;

        return $this;
    }

    /**
     * Get fapinicio
     *
     * @return \DateTime
     */
    public function getFapinicio()
    {
        return $this->fapinicio;
    }

    /**
     * Set fapfin
     *
     * @param \DateTime $fapfin
     *
     * @return Pliego
     */
    public function setFapfin($fapfin)
    {
        $this->fapfin = $fapfin;

        return $this;
    }

    /**
     * Get fapfin
     *
     * @return \DateTime
     */
    public function getFapfin()
    {
        return $this->fapfin;
    }

    /**
     * Set frap
     *
     * @param \DateTime $frap
     *
     * @return Pliego
     */
    public function setFrap($frap)
    {
        $this->frap = $frap;

        return $this;
    }

    /**
     * Get frap
     *
     * @return \DateTime
     */
    public function getFrap()
    {
        return $this->frap;
    }

    /**
     * Set hrap
     *
     * @param string $hrap
     *
     * @return Pliego
     */
    public function setHrap($hrap)
    {
        $this->hrap = $hrap;

        return $this;
    }

    /**
     * Get hrap
     *
     * @return string
     */
    public function getHrap()
    {
        return $this->hrap;
    }

    /**
     * Set fvt
     *
     * @param \DateTime $fvt
     *
     * @return Pliego
     */
    public function setFvt($fvt)
    {
        $this->fvt = $fvt;

        return $this;
    }

    /**
     * Get fvt
     *
     * @return \DateTime
     */
    public function getFvt()
    {
        return $this->fvt;
    }

    /**
     * Set lvt
     *
     * @param string $lvt
     *
     * @return Pliego
     */
    public function setLvt($lvt)
    {
        $this->lvt = $lvt;

        return $this;
    }

    /**
     * Get lvt
     *
     * @return string
     */
    public function getLvt()
    {
        return $this->lvt;
    }

    /**
     * Set hvt
     *
     * @param string $hvt
     *
     * @return Pliego
     */
    public function setHvt($hvt)
    {
        $this->hvt = $hvt;

        return $this;
    }

    /**
     * Get hvt
     *
     * @return string
     */
    public function getHvt()
    {
        return $this->hvt;
    }

    /**
     * Set prvt
     *
     * @param string $prvt
     *
     * @return Pliego
     */
    public function setPrvt($prvt)
    {
        $this->prvt = $prvt;

        return $this;
    }

    /**
     * Get prvt
     *
     * @return string
     */
    public function getPrvt()
    {
        return $this->prvt;
    }

    /**
     * Set tprvt
     *
     * @param string $tprvt
     *
     * @return Pliego
     */
    public function setTprvt($tprvt)
    {
        $this->tprvt = $tprvt;

        return $this;
    }

    /**
     * Get tprvt
     *
     * @return string
     */
    public function getTprvt()
    {
        return $this->tprvt;
    }

    /**
     * Set hrpam
     *
     * @param string $hrpam
     *
     * @return Pliego
     */
    public function setHrpam($hrpam)
    {
        $this->hrpam = $hrpam;

        return $this;
    }

    /**
     * Get hrpam
     *
     * @return string
     */
    public function getHrpam()
    {
        return $this->hrpam;
    }

    /**
     * Set hrppm
     *
     * @param string $hrppm
     *
     * @return Pliego
     */
    public function setHrppm($hrppm)
    {
        $this->hrppm = $hrppm;

        return $this;
    }

    /**
     * Get hrppm
     *
     * @return string
     */
    public function getHrppm()
    {
        return $this->hrppm;
    }

    /**
     * Set fap
     *
     * @param \DateTime $fap
     *
     * @return Pliego
     */
    public function setFap($fap)
    {
        $this->fap = $fap;

        return $this;
    }

    /**
     * Get fap
     *
     * @return \DateTime
     */
    public function getFap()
    {
        return $this->fap;
    }

    /**
     * Set hrsap
     *
     * @param string $hrsap
     *
     * @return Pliego
     */
    public function setHrsap($hrsap)
    {
        $this->hrsap = $hrsap;

        return $this;
    }

    /**
     * Get hrsap
     *
     * @return string
     */
    public function getHrsap()
    {
        return $this->hrsap;
    }

    /**
     * Set hasap
     *
     * @param string $hasap
     *
     * @return Pliego
     */
    public function setHasap($hasap)
    {
        $this->hasap = $hasap;

        return $this;
    }

    /**
     * Get hasap
     *
     * @return string
     */
    public function getHasap()
    {
        return $this->hasap;
    }

    /**
     * Set mecanismo
     *
     * @param string $mecanismo
     *
     * @return Pliego
     */
    public function setMecanismo($mecanismo)
    {
        $this->mecanismo = $mecanismo;

        return $this;
    }

    /**
     * Get mecanismo
     *
     * @return string
     */
    public function getMecanismo()
    {
        return $this->mecanismo;
    }

    /**
     * Set pfmin
     *
     * @param integer $pfmin
     *
     * @return Pliego
     */
    public function setPfmin($pfmin)
    {
        $this->pfmin = $pfmin;

        return $this;
    }

    /**
     * Get pfmin
     *
     * @return integer
     */
    public function getPfmin()
    {
        return $this->pfmin;
    }

    /**
     * Set pfmax
     *
     * @param integer $pfmax
     *
     * @return Pliego
     */
    public function setPfmax($pfmax)
    {
        $this->pfmax = $pfmax;

        return $this;
    }

    /**
     * Get pfmax
     *
     * @return integer
     */
    public function getPfmax()
    {
        return $this->pfmax;
    }

    /**
     * Set ptmin
     *
     * @param integer $ptmin
     *
     * @return Pliego
     */
    public function setPtmin($ptmin)
    {
        $this->ptmin = $ptmin;

        return $this;
    }

    /**
     * Get ptmin
     *
     * @return integer
     */
    public function getPtmin()
    {
        return $this->ptmin;
    }

    /**
     * Set ptmax
     *
     * @param integer $ptmax
     *
     * @return Pliego
     */
    public function setPtmax($ptmax)
    {
        $this->ptmax = $ptmax;

        return $this;
    }

    /**
     * Get ptmax
     *
     * @return integer
     */
    public function getPtmax()
    {
        return $this->ptmax;
    }

    /**
     * Get idpliego
     *
     * @return integer
     */
    public function getIdpliego()
    {
        return $this->idpliego;
    }

    /**
     * Set libroproceso
     *
     * @param \principal\principalBundle\Entity\Libroproceso $libroproceso
     *
     * @return Pliego
     */
    public function setLibroproceso(\principal\principalBundle\Entity\Libroproceso $libroproceso = null)
    {
        $this->libroproceso = $libroproceso;

        return $this;
    }

    /**
     * Get libroproceso
     *
     * @return \principal\principalBundle\Entity\Libroproceso
     */
    public function getLibroproceso()
    {
        return $this->libroproceso;
    }

    /**
     * Set idsolicitud
     *
     * @param \principal\principalBundle\Entity\Solicitud $idsolicitud
     *
     * @return Pliego
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
