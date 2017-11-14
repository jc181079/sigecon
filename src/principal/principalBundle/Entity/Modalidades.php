<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modalidades
 *
 * @ORM\Table(name="modalidades")
 * @ORM\Entity
 */
class Modalidades
{
    /**
     * @var string
     *
     * @ORM\Column(name="nommodalidad", type="string", length=20, nullable=true)
     */
    private $nommodalidad;

    /**
     * @var string
     *
     * @ORM\Column(name="prefijo", type="string", length=34, nullable=true)
     */
    private $prefijo;

    /**
     * @var integer
     *
     * @ORM\Column(name="correlativo", type="integer", nullable=true)
     */
    private $correlativo;

    /**
     * @var integer
     *
     * @ORM\Column(name="idmodalidades", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmodalidades;



    /**
     * Set nommodalidad
     *
     * @param string $nommodalidad
     *
     * @return Modalidades
     */
    public function setNommodalidad($nommodalidad)
    {
        $this->nommodalidad = $nommodalidad;

        return $this;
    }

    /**
     * Get nommodalidad
     *
     * @return string
     */
    public function getNommodalidad()
    {
        return $this->nommodalidad;
    }

    /**
     * Set prefijo
     *
     * @param string $prefijo
     *
     * @return Modalidades
     */
    public function setPrefijo($prefijo)
    {
        $this->prefijo = $prefijo;

        return $this;
    }

    /**
     * Get prefijo
     *
     * @return string
     */
    public function getPrefijo()
    {
        return $this->prefijo;
    }

    /**
     * Set correlativo
     *
     * @param integer $correlativo
     *
     * @return Modalidades
     */
    public function setCorrelativo($correlativo)
    {
        $this->correlativo = $correlativo;

        return $this;
    }

    /**
     * Get correlativo
     *
     * @return integer
     */
    public function getCorrelativo()
    {
        return $this->correlativo;
    }

    /**
     * Get idmodalidades
     *
     * @return integer
     */
    public function getIdmodalidades()
    {
        return $this->idmodalidades;
    }
}
