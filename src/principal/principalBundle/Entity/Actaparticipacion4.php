<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actaparticipacion4
 *
 * @ORM\Table(name="actaparticipacion4", indexes={@ORM\Index(name="fk_actaparticipacion4_actaparticipacion11_idx", columns={"idactaparticipacion1"}), @ORM\Index(name="fk_actaparticipacion4_solicitud1_idx", columns={"idsolicitud"})})
 * @ORM\Entity
 */
class Actaparticipacion4
{
    /**
     * @var string
     *
     * @ORM\Column(name="recaudado", type="string", length=3, nullable=true)
     */
    private $recaudado;

    /**
     * @var integer
     *
     * @ORM\Column(name="idactaparticipacion4", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idactaparticipacion4;

    /**
     * @var \principal\principalBundle\Entity\Actaparticipacion1
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Actaparticipacion1")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idactaparticipacion1", referencedColumnName="idactaparticipacion1")
     * })
     */
    private $idactaparticipacion1;

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
     * Set recaudado
     *
     * @param string $recaudado
     *
     * @return Actaparticipacion4
     */
    public function setRecaudado($recaudado)
    {
        $this->recaudado = $recaudado;

        return $this;
    }

    /**
     * Get recaudado
     *
     * @return string
     */
    public function getRecaudado()
    {
        return $this->recaudado;
    }

    /**
     * Get idactaparticipacion4
     *
     * @return integer
     */
    public function getIdactaparticipacion4()
    {
        return $this->idactaparticipacion4;
    }

    /**
     * Set idactaparticipacion1
     *
     * @param \principal\principalBundle\Entity\Actaparticipacion1 $idactaparticipacion1
     *
     * @return Actaparticipacion4
     */
    public function setIdactaparticipacion1(\principal\principalBundle\Entity\Actaparticipacion1 $idactaparticipacion1 = null)
    {
        $this->idactaparticipacion1 = $idactaparticipacion1;

        return $this;
    }

    /**
     * Get idactaparticipacion1
     *
     * @return \principal\principalBundle\Entity\Actaparticipacion1
     */
    public function getIdactaparticipacion1()
    {
        return $this->idactaparticipacion1;
    }

    /**
     * Set idsolicitud
     *
     * @param \principal\principalBundle\Entity\Solicitud $idsolicitud
     *
     * @return Actaparticipacion4
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
