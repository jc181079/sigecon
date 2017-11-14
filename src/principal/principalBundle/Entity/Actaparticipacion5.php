<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actaparticipacion5
 *
 * @ORM\Table(name="actaparticipacion5", indexes={@ORM\Index(name="fk_actaparticipacion5_actaparticipacion11_idx", columns={"actaparticipacion1_idactaparticipacion1"}), @ORM\Index(name="fk_actaparticipacion5_solicitud1_idx", columns={"idsolicitud"})})
 * @ORM\Entity
 */
class Actaparticipacion5
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idactaparticipacion5", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idactaparticipacion5;

    /**
     * @var \principal\principalBundle\Entity\Actaparticipacion1
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Actaparticipacion1")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="actaparticipacion1_idactaparticipacion1", referencedColumnName="idactaparticipacion1")
     * })
     */
    private $actaparticipacion1actaparticipacion1;

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
     * Get idactaparticipacion5
     *
     * @return integer
     */
    public function getIdactaparticipacion5()
    {
        return $this->idactaparticipacion5;
    }

    /**
     * Set actaparticipacion1actaparticipacion1
     *
     * @param \principal\principalBundle\Entity\Actaparticipacion1 $actaparticipacion1actaparticipacion1
     *
     * @return Actaparticipacion5
     */
    public function setActaparticipacion1actaparticipacion1(\principal\principalBundle\Entity\Actaparticipacion1 $actaparticipacion1actaparticipacion1 = null)
    {
        $this->actaparticipacion1actaparticipacion1 = $actaparticipacion1actaparticipacion1;

        return $this;
    }

    /**
     * Get actaparticipacion1actaparticipacion1
     *
     * @return \principal\principalBundle\Entity\Actaparticipacion1
     */
    public function getActaparticipacion1actaparticipacion1()
    {
        return $this->actaparticipacion1actaparticipacion1;
    }

    /**
     * Set idsolicitud
     *
     * @param \principal\principalBundle\Entity\Solicitud $idsolicitud
     *
     * @return Actaparticipacion5
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
