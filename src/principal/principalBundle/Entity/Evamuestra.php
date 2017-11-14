<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evamuestra
 *
 * @ORM\Table(name="evamuestra", indexes={@ORM\Index(name="fk_evamuestra_pliegom1_idx", columns={"idpliegom"}), @ORM\Index(name="fk_evamuestra_empresas1_idx", columns={"idempresas"}), @ORM\Index(name="fk_evamuestra_solicitud1_idx", columns={"idsolicitud"})})
 * @ORM\Entity
 */
class Evamuestra
{
    /**
     * @var integer
     *
     * @ORM\Column(name="resultado", type="integer", nullable=true)
     */
    private $resultado;

    /**
     * @var integer
     *
     * @ORM\Column(name="idevamuestra", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idevamuestra;

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
     * Set resultado
     *
     * @param integer $resultado
     *
     * @return Evamuestra
     */
    public function setResultado($resultado)
    {
        $this->resultado = $resultado;

        return $this;
    }

    /**
     * Get resultado
     *
     * @return integer
     */
    public function getResultado()
    {
        return $this->resultado;
    }

    /**
     * Get idevamuestra
     *
     * @return integer
     */
    public function getIdevamuestra()
    {
        return $this->idevamuestra;
    }

    /**
     * Set idempresas
     *
     * @param \principal\principalBundle\Entity\Empresas $idempresas
     *
     * @return Evamuestra
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
     * Set idpliegom
     *
     * @param \principal\principalBundle\Entity\Pliegom $idpliegom
     *
     * @return Evamuestra
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
     * @return Evamuestra
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
