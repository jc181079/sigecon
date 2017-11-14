<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Retiropliego
 *
 * @ORM\Table(name="retiropliego", indexes={@ORM\Index(name="fk_retiropliego_empresas1_idx", columns={"idempresas"}), @ORM\Index(name="fk_retiropliego_pliego1_idx", columns={"idpliego"}), @ORM\Index(name="fk_retiropliego_solicitud1_idx", columns={"idsolicitud"})})
 * @ORM\Entity
 */
class Retiropliego
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecharetiro", type="date", nullable=true)
     */
    private $fecharetiro;

    /**
     * @var integer
     *
     * @ORM\Column(name="idretiropliego", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idretiropliego;

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
     * Set fecharetiro
     *
     * @param \DateTime $fecharetiro
     *
     * @return Retiropliego
     */
    public function setFecharetiro($fecharetiro)
    {
        $this->fecharetiro = $fecharetiro;

        return $this;
    }

    /**
     * Get fecharetiro
     *
     * @return \DateTime
     */
    public function getFecharetiro()
    {
        return $this->fecharetiro;
    }

    /**
     * Get idretiropliego
     *
     * @return integer
     */
    public function getIdretiropliego()
    {
        return $this->idretiropliego;
    }

    /**
     * Set idempresas
     *
     * @param \principal\principalBundle\Entity\Empresas $idempresas
     *
     * @return Retiropliego
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
     * @return Retiropliego
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
     * @return Retiropliego
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
