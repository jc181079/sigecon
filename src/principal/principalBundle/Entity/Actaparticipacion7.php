<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actaparticipacion7
 *
 * @ORM\Table(name="actaparticipacion7", indexes={@ORM\Index(name="fk_actaparticipacion6_actaparticipacion11_idx", columns={"idactaparticipacion1"}), @ORM\Index(name="fk_actaparticipacion7_solicitud1_idx", columns={"idsolicitud"}), @ORM\Index(name="fk_actaparticipacion7_pliegom1_idx", columns={"idpliegom"})})
 * @ORM\Entity
 */
class Actaparticipacion7
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
     * @ORM\Column(name="idactaparticipacion6", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idactaparticipacion6;

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
     * @var \principal\principalBundle\Entity\Pliegom
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Pliegom")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idpliegom", referencedColumnName="idpliegom")
     * })
     */
    private $idpliegom;

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
     * @return Actaparticipacion7
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
     * Get idactaparticipacion6
     *
     * @return integer
     */
    public function getIdactaparticipacion6()
    {
        return $this->idactaparticipacion6;
    }

    /**
     * Set idactaparticipacion1
     *
     * @param \principal\principalBundle\Entity\Actaparticipacion1 $idactaparticipacion1
     *
     * @return Actaparticipacion7
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
     * Set idpliegom
     *
     * @param \principal\principalBundle\Entity\Pliegom $idpliegom
     *
     * @return Actaparticipacion7
     */
    public function setIdpliegom(\principal\principalBundle\Entity\Pliegom $idpliegom = null)
    {
        $this->idpliegom = $idpliegom;

        return $this;
    }

    /**
     * Get idpliegom
     *
     * @return \principal\principalBundle\Entity\Pliegom
     */
    public function getIdpliegom()
    {
        return $this->idpliegom;
    }

    /**
     * Set idsolicitud
     *
     * @param \principal\principalBundle\Entity\Solicitud $idsolicitud
     *
     * @return Actaparticipacion7
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
