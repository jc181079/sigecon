<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pliegom
 *
 * @ORM\Table(name="pliegom", indexes={@ORM\Index(name="fk_pliegom_und1_idx", columns={"und"}), @ORM\Index(name="fk_pliegom_pliego1_idx", columns={"pliego"}), @ORM\Index(name="fk_pliegom_solicitud1_idx", columns={"idsolicitud"})})
 * @ORM\Entity
 */
class Pliegom
{
    /**
     * @var string
     *
     * @ORM\Column(name="prenda", type="string", length=45, nullable=true)
     */
    private $prenda;

    /**
     * @var string
     *
     * @ORM\Column(name="cantidad", type="string", length=45, nullable=true)
     */
    private $cantidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="idpliegom", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpliegom;

    /**
     * @var \principal\principalBundle\Entity\Pliego
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Pliego")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pliego", referencedColumnName="idpliego")
     * })
     */
    private $pliego;

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
     * @var \principal\principalBundle\Entity\Und
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Und")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="und", referencedColumnName="idund")
     * })
     */
    private $und;



    /**
     * Set prenda
     *
     * @param string $prenda
     *
     * @return Pliegom
     */
    public function setPrenda($prenda)
    {
        $this->prenda = $prenda;

        return $this;
    }

    /**
     * Get prenda
     *
     * @return string
     */
    public function getPrenda()
    {
        return $this->prenda;
    }

    /**
     * Set cantidad
     *
     * @param string $cantidad
     *
     * @return Pliegom
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return string
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Get idpliegom
     *
     * @return integer
     */
    public function getIdpliegom()
    {
        return $this->idpliegom;
    }

    /**
     * Set pliego
     *
     * @param \principal\principalBundle\Entity\Pliego $pliego
     *
     * @return Pliegom
     */
    public function setPliego(\principal\principalBundle\Entity\Pliego $pliego = null)
    {
        $this->pliego = $pliego;

        return $this;
    }

    /**
     * Get pliego
     *
     * @return \principal\principalBundle\Entity\Pliego
     */
    public function getPliego()
    {
        return $this->pliego;
    }

    /**
     * Set idsolicitud
     *
     * @param \principal\principalBundle\Entity\Solicitud $idsolicitud
     *
     * @return Pliegom
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

    /**
     * Set und
     *
     * @param \principal\principalBundle\Entity\Und $und
     *
     * @return Pliegom
     */
    public function setUnd(\principal\principalBundle\Entity\Und $und = null)
    {
        $this->und = $und;

        return $this;
    }

    /**
     * Get und
     *
     * @return \principal\principalBundle\Entity\Und
     */
    public function getUnd()
    {
        return $this->und;
    }
}
