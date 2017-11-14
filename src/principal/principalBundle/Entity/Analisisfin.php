<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Analisisfin
 *
 * @ORM\Table(name="analisisfin", indexes={@ORM\Index(name="fk_analisisfin_empresas1_idx", columns={"idempresas"}), @ORM\Index(name="fk_analisisfin_solicitud1_idx", columns={"idsolicitud"})})
 * @ORM\Entity
 */
class Analisisfin
{
    /**
     * @var integer
     *
     * @ORM\Column(name="periodo", type="integer", nullable=true)
     */
    private $periodo;

    /**
     * @var string
     *
     * @ORM\Column(name="cxc", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $cxc;

    /**
     * @var string
     *
     * @ORM\Column(name="ac", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $ac;

    /**
     * @var string
     *
     * @ORM\Column(name="at", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $at;

    /**
     * @var string
     *
     * @ORM\Column(name="pc", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $pc;

    /**
     * @var string
     *
     * @ORM\Column(name="pt", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $pt;

    /**
     * @var string
     *
     * @ORM\Column(name="p", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $p;

    /**
     * @var string
     *
     * @ORM\Column(name="it", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $it;

    /**
     * @var string
     *
     * @ORM\Column(name="un", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $un;

    /**
     * @var string
     *
     * @ORM\Column(name="s", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $s;

    /**
     * @var string
     *
     * @ORM\Column(name="su", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $su;

    /**
     * @var string
     *
     * @ORM\Column(name="rotcxc", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $rotcxc;

    /**
     * @var string
     *
     * @ORM\Column(name="rotcxcu", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $rotcxcu;

    /**
     * @var string
     *
     * @ORM\Column(name="redsact", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $redsact;

    /**
     * @var string
     *
     * @ORM\Column(name="redsactu", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $redsactu;

    /**
     * @var string
     *
     * @ORM\Column(name="rentpatri", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $rentpatri;

    /**
     * @var string
     *
     * @ORM\Column(name="rentpatriu", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $rentpatriu;

    /**
     * @var string
     *
     * @ORM\Column(name="endeud", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $endeud;

    /**
     * @var string
     *
     * @ORM\Column(name="endeudu", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $endeudu;

    /**
     * @var string
     *
     * @ORM\Column(name="capnet", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $capnet;

    /**
     * @var string
     *
     * @ORM\Column(name="factrend", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $factrend;

    /**
     * @var string
     *
     * @ORM\Column(name="vipc", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $vipc;

    /**
     * @var string
     *
     * @ORM\Column(name="cfec", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $cfec;

    /**
     * @var string
     *
     * @ORM\Column(name="nfec", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $nfec;

    /**
     * @var integer
     *
     * @ORM\Column(name="idanalisisfin", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idanalisisfin;

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
     * @var \principal\principalBundle\Entity\Solicitud
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Solicitud")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idsolicitud", referencedColumnName="idsolicitud")
     * })
     */
    private $idsolicitud;



    /**
     * Set periodo
     *
     * @param integer $periodo
     *
     * @return Analisisfin
     */
    public function setPeriodo($periodo)
    {
        $this->periodo = $periodo;

        return $this;
    }

    /**
     * Get periodo
     *
     * @return integer
     */
    public function getPeriodo()
    {
        return $this->periodo;
    }

    /**
     * Set cxc
     *
     * @param string $cxc
     *
     * @return Analisisfin
     */
    public function setCxc($cxc)
    {
        $this->cxc = $cxc;

        return $this;
    }

    /**
     * Get cxc
     *
     * @return string
     */
    public function getCxc()
    {
        return $this->cxc;
    }

    /**
     * Set ac
     *
     * @param string $ac
     *
     * @return Analisisfin
     */
    public function setAc($ac)
    {
        $this->ac = $ac;

        return $this;
    }

    /**
     * Get ac
     *
     * @return string
     */
    public function getAc()
    {
        return $this->ac;
    }

    /**
     * Set at
     *
     * @param string $at
     *
     * @return Analisisfin
     */
    public function setAt($at)
    {
        $this->at = $at;

        return $this;
    }

    /**
     * Get at
     *
     * @return string
     */
    public function getAt()
    {
        return $this->at;
    }

    /**
     * Set pc
     *
     * @param string $pc
     *
     * @return Analisisfin
     */
    public function setPc($pc)
    {
        $this->pc = $pc;

        return $this;
    }

    /**
     * Get pc
     *
     * @return string
     */
    public function getPc()
    {
        return $this->pc;
    }

    /**
     * Set pt
     *
     * @param string $pt
     *
     * @return Analisisfin
     */
    public function setPt($pt)
    {
        $this->pt = $pt;

        return $this;
    }

    /**
     * Get pt
     *
     * @return string
     */
    public function getPt()
    {
        return $this->pt;
    }

    /**
     * Set p
     *
     * @param string $p
     *
     * @return Analisisfin
     */
    public function setP($p)
    {
        $this->p = $p;

        return $this;
    }

    /**
     * Get p
     *
     * @return string
     */
    public function getP()
    {
        return $this->p;
    }

    /**
     * Set it
     *
     * @param string $it
     *
     * @return Analisisfin
     */
    public function setIt($it)
    {
        $this->it = $it;

        return $this;
    }

    /**
     * Get it
     *
     * @return string
     */
    public function getIt()
    {
        return $this->it;
    }

    /**
     * Set un
     *
     * @param string $un
     *
     * @return Analisisfin
     */
    public function setUn($un)
    {
        $this->un = $un;

        return $this;
    }

    /**
     * Get un
     *
     * @return string
     */
    public function getUn()
    {
        return $this->un;
    }

    /**
     * Set s
     *
     * @param string $s
     *
     * @return Analisisfin
     */
    public function setS($s)
    {
        $this->s = $s;

        return $this;
    }

    /**
     * Get s
     *
     * @return string
     */
    public function getS()
    {
        return $this->s;
    }

    /**
     * Set su
     *
     * @param string $su
     *
     * @return Analisisfin
     */
    public function setSu($su)
    {
        $this->su = $su;

        return $this;
    }

    /**
     * Get su
     *
     * @return string
     */
    public function getSu()
    {
        return $this->su;
    }

    /**
     * Set rotcxc
     *
     * @param string $rotcxc
     *
     * @return Analisisfin
     */
    public function setRotcxc($rotcxc)
    {
        $this->rotcxc = $rotcxc;

        return $this;
    }

    /**
     * Get rotcxc
     *
     * @return string
     */
    public function getRotcxc()
    {
        return $this->rotcxc;
    }

    /**
     * Set rotcxcu
     *
     * @param string $rotcxcu
     *
     * @return Analisisfin
     */
    public function setRotcxcu($rotcxcu)
    {
        $this->rotcxcu = $rotcxcu;

        return $this;
    }

    /**
     * Get rotcxcu
     *
     * @return string
     */
    public function getRotcxcu()
    {
        return $this->rotcxcu;
    }

    /**
     * Set redsact
     *
     * @param string $redsact
     *
     * @return Analisisfin
     */
    public function setRedsact($redsact)
    {
        $this->redsact = $redsact;

        return $this;
    }

    /**
     * Get redsact
     *
     * @return string
     */
    public function getRedsact()
    {
        return $this->redsact;
    }

    /**
     * Set redsactu
     *
     * @param string $redsactu
     *
     * @return Analisisfin
     */
    public function setRedsactu($redsactu)
    {
        $this->redsactu = $redsactu;

        return $this;
    }

    /**
     * Get redsactu
     *
     * @return string
     */
    public function getRedsactu()
    {
        return $this->redsactu;
    }

    /**
     * Set rentpatri
     *
     * @param string $rentpatri
     *
     * @return Analisisfin
     */
    public function setRentpatri($rentpatri)
    {
        $this->rentpatri = $rentpatri;

        return $this;
    }

    /**
     * Get rentpatri
     *
     * @return string
     */
    public function getRentpatri()
    {
        return $this->rentpatri;
    }

    /**
     * Set rentpatriu
     *
     * @param string $rentpatriu
     *
     * @return Analisisfin
     */
    public function setRentpatriu($rentpatriu)
    {
        $this->rentpatriu = $rentpatriu;

        return $this;
    }

    /**
     * Get rentpatriu
     *
     * @return string
     */
    public function getRentpatriu()
    {
        return $this->rentpatriu;
    }

    /**
     * Set endeud
     *
     * @param string $endeud
     *
     * @return Analisisfin
     */
    public function setEndeud($endeud)
    {
        $this->endeud = $endeud;

        return $this;
    }

    /**
     * Get endeud
     *
     * @return string
     */
    public function getEndeud()
    {
        return $this->endeud;
    }

    /**
     * Set endeudu
     *
     * @param string $endeudu
     *
     * @return Analisisfin
     */
    public function setEndeudu($endeudu)
    {
        $this->endeudu = $endeudu;

        return $this;
    }

    /**
     * Get endeudu
     *
     * @return string
     */
    public function getEndeudu()
    {
        return $this->endeudu;
    }

    /**
     * Set capnet
     *
     * @param string $capnet
     *
     * @return Analisisfin
     */
    public function setCapnet($capnet)
    {
        $this->capnet = $capnet;

        return $this;
    }

    /**
     * Get capnet
     *
     * @return string
     */
    public function getCapnet()
    {
        return $this->capnet;
    }

    /**
     * Set factrend
     *
     * @param string $factrend
     *
     * @return Analisisfin
     */
    public function setFactrend($factrend)
    {
        $this->factrend = $factrend;

        return $this;
    }

    /**
     * Get factrend
     *
     * @return string
     */
    public function getFactrend()
    {
        return $this->factrend;
    }

    /**
     * Set vipc
     *
     * @param string $vipc
     *
     * @return Analisisfin
     */
    public function setVipc($vipc)
    {
        $this->vipc = $vipc;

        return $this;
    }

    /**
     * Get vipc
     *
     * @return string
     */
    public function getVipc()
    {
        return $this->vipc;
    }

    /**
     * Set cfec
     *
     * @param string $cfec
     *
     * @return Analisisfin
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
     * @return Analisisfin
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
     * Get idanalisisfin
     *
     * @return integer
     */
    public function getIdanalisisfin()
    {
        return $this->idanalisisfin;
    }

    /**
     * Set idempresas
     *
     * @param \principal\principalBundle\Entity\Empresas $idempresas
     *
     * @return Analisisfin
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
     * Set idsolicitud
     *
     * @param \principal\principalBundle\Entity\Solicitud $idsolicitud
     *
     * @return Analisisfin
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
