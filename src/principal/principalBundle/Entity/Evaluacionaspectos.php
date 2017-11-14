<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evaluacionaspectos
 *
 * @ORM\Table(name="evaluacionaspectos", indexes={@ORM\Index(name="fk_evaluacionaspectos_pliegoaspectos1_idx", columns={"idpliegoaspectos"}), @ORM\Index(name="fk_evaluacionaspectos_empresas1_idx", columns={"empresas_idempresas"}), @ORM\Index(name="fk_evaluacionaspectos_solicitud1_idx", columns={"idsolicitud"})})
 * @ORM\Entity
 */
class Evaluacionaspectos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="resultado", type="integer", nullable=true)
     */
    private $resultado;

    /**
     * @var string
     *
     * @ORM\Column(name="califcualitativa", type="string", length=45, nullable=true)
     */
    private $califcualitativa;

    /**
     * @var string
     *
     * @ORM\Column(name="puntcualitativa", type="string", length=45, nullable=true)
     */
    private $puntcualitativa;

    /**
     * @var string
     *
     * @ORM\Column(name="resultcualitativo", type="string", length=45, nullable=true)
     */
    private $resultcualitativo;

    /**
     * @var integer
     *
     * @ORM\Column(name="idevaluacionaspectos", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idevaluacionaspectos;

    /**
     * @var \principal\principalBundle\Entity\Empresas
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Empresas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="empresas_idempresas", referencedColumnName="idempresas")
     * })
     */
    private $empresasempresas;

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
     * Set resultado
     *
     * @param integer $resultado
     *
     * @return Evaluacionaspectos
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
     * Set califcualitativa
     *
     * @param string $califcualitativa
     *
     * @return Evaluacionaspectos
     */
    public function setCalifcualitativa($califcualitativa)
    {
        $this->califcualitativa = $califcualitativa;

        return $this;
    }

    /**
     * Get califcualitativa
     *
     * @return string
     */
    public function getCalifcualitativa()
    {
        return $this->califcualitativa;
    }

    /**
     * Set puntcualitativa
     *
     * @param string $puntcualitativa
     *
     * @return Evaluacionaspectos
     */
    public function setPuntcualitativa($puntcualitativa)
    {
        $this->puntcualitativa = $puntcualitativa;

        return $this;
    }

    /**
     * Get puntcualitativa
     *
     * @return string
     */
    public function getPuntcualitativa()
    {
        return $this->puntcualitativa;
    }

    /**
     * Set resultcualitativo
     *
     * @param string $resultcualitativo
     *
     * @return Evaluacionaspectos
     */
    public function setResultcualitativo($resultcualitativo)
    {
        $this->resultcualitativo = $resultcualitativo;

        return $this;
    }

    /**
     * Get resultcualitativo
     *
     * @return string
     */
    public function getResultcualitativo()
    {
        return $this->resultcualitativo;
    }

    /**
     * Get idevaluacionaspectos
     *
     * @return integer
     */
    public function getIdevaluacionaspectos()
    {
        return $this->idevaluacionaspectos;
    }

    /**
     * Set empresasempresas
     *
     * @param \principal\principalBundle\Entity\Empresas $empresasempresas
     *
     * @return Evaluacionaspectos
     */
    public function setEmpresasempresas(\principal\principalBundle\Entity\Empresas $empresasempresas = null)
    {
        $this->empresasempresas = $empresasempresas;

        return $this;
    }

    /**
     * Get empresasempresas
     *
     * @return \principal\principalBundle\Entity\Empresas
     */
    public function getEmpresasempresas()
    {
        return $this->empresasempresas;
    }

    /**
     * Set idpliegoaspectos
     *
     * @param \principal\principalBundle\Entity\Pliegoaspectos $idpliegoaspectos
     *
     * @return Evaluacionaspectos
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
     * @return Evaluacionaspectos
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
