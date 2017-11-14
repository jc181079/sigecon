<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pliegoaspectos
 *
 * @ORM\Table(name="pliegoaspectos", indexes={@ORM\Index(name="fk_pliegoaspectos_pliego1_idx", columns={"pliego_idpliego"}), @ORM\Index(name="fk_pliegoaspectos_recaudosoferentes1_idx", columns={"recaudosoferentes_idrecaudos"}), @ORM\Index(name="fk_pliegoaspectos_solicitud1_idx", columns={"idsolicitud"})})
 * @ORM\Entity
 */
class Pliegoaspectos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idpliegoaspectos", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpliegoaspectos;

    /**
     * @var \principal\principalBundle\Entity\Pliego
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Pliego")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pliego_idpliego", referencedColumnName="idpliego")
     * })
     */
    private $pliegopliego;

    /**
     * @var \principal\principalBundle\Entity\Recaudosoferentes
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Recaudosoferentes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recaudosoferentes_idrecaudos", referencedColumnName="idrecaudos")
     * })
     */
    private $recaudosoferentesrecaudos;

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
     * Get idpliegoaspectos
     *
     * @return integer
     */
    public function getIdpliegoaspectos()
    {
        return $this->idpliegoaspectos;
    }

    /**
     * Set pliegopliego
     *
     * @param \principal\principalBundle\Entity\Pliego $pliegopliego
     *
     * @return Pliegoaspectos
     */
    public function setPliegopliego(\principal\principalBundle\Entity\Pliego $pliegopliego = null)
    {
        $this->pliegopliego = $pliegopliego;

        return $this;
    }

    /**
     * Get pliegopliego
     *
     * @return \principal\principalBundle\Entity\Pliego
     */
    public function getPliegopliego()
    {
        return $this->pliegopliego;
    }

    /**
     * Set recaudosoferentesrecaudos
     *
     * @param \principal\principalBundle\Entity\Recaudosoferentes $recaudosoferentesrecaudos
     *
     * @return Pliegoaspectos
     */
    public function setRecaudosoferentesrecaudos(\principal\principalBundle\Entity\Recaudosoferentes $recaudosoferentesrecaudos = null)
    {
        $this->recaudosoferentesrecaudos = $recaudosoferentesrecaudos;

        return $this;
    }

    /**
     * Get recaudosoferentesrecaudos
     *
     * @return \principal\principalBundle\Entity\Recaudosoferentes
     */
    public function getRecaudosoferentesrecaudos()
    {
        return $this->recaudosoferentesrecaudos;
    }

    /**
     * Set idsolicitud
     *
     * @param \principal\principalBundle\Entity\Solicitud $idsolicitud
     *
     * @return Pliegoaspectos
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
