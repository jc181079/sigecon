<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actaparticipacion3
 *
 * @ORM\Table(name="actaparticipacion3", indexes={@ORM\Index(name="fk_actaparticipacion3_actaparticipacion11_idx", columns={"idactaparticipacion1"}), @ORM\Index(name="fk_actaparticipacion3_solicitud1_idx", columns={"idsolicitud"}), @ORM\Index(name="fk_actaparticipacion3_pliegoaspectos1_idx", columns={"idpliegoaspectos"})})
 * @ORM\Entity
 */
class Actaparticipacion3
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
     * @ORM\Column(name="idactaparticipacion3", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idactaparticipacion3;

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
     * @var \principal\principalBundle\Entity\Pliegoaspectos
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Pliegoaspectos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idpliegoaspectos", referencedColumnName="idpliegoaspectos")
     * })
     */
    private $idpliegoaspectos;

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
     * @return Actaparticipacion3
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
     * Get idactaparticipacion3
     *
     * @return integer
     */
    public function getIdactaparticipacion3()
    {
        return $this->idactaparticipacion3;
    }

    /**
     * Set idactaparticipacion1
     *
     * @param \principal\principalBundle\Entity\Actaparticipacion1 $idactaparticipacion1
     *
     * @return Actaparticipacion3
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
     * Set idpliegoaspectos
     *
     * @param \principal\principalBundle\Entity\Pliegoaspectos $idpliegoaspectos
     *
     * @return Actaparticipacion3
     */
    public function setIdpliegoaspectos(\principal\principalBundle\Entity\Pliegoaspectos $idpliegoaspectos = null)
    {
        $this->idpliegoaspectos = $idpliegoaspectos;

        return $this;
    }

    /**
     * Get idpliegoaspectos
     *
     * @return \principal\principalBundle\Entity\Pliegoaspectos
     */
    public function getIdpliegoaspectos()
    {
        return $this->idpliegoaspectos;
    }

    /**
     * Set idsolicitud
     *
     * @param \principal\principalBundle\Entity\Solicitud $idsolicitud
     *
     * @return Actaparticipacion3
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
