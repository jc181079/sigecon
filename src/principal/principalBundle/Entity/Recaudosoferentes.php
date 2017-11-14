<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recaudosoferentes
 *
 * @ORM\Table(name="recaudosoferentes")
 * @ORM\Entity
 */
class Recaudosoferentes
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombredocumento", type="string", length=100, nullable=true)
     */
    private $nombredocumento;

    /**
     * @var string
     *
     * @ORM\Column(name="definicion", type="text", nullable=true)
     */
    private $definicion;

    /**
     * @var string
     *
     * @ORM\Column(name="tipodocumento", type="string", length=6, nullable=true)
     */
    private $tipodocumento;

    /**
     * @var integer
     *
     * @ORM\Column(name="puntajemin", type="integer", nullable=true)
     */
    private $puntajemin;

    /**
     * @var integer
     *
     * @ORM\Column(name="puntajemed", type="integer", nullable=true)
     */
    private $puntajemed;

    /**
     * @var integer
     *
     * @ORM\Column(name="puntajemax", type="integer", nullable=true)
     */
    private $puntajemax;

    /**
     * @var integer
     *
     * @ORM\Column(name="idrecaudos", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrecaudos;



    /**
     * Set nombredocumento
     *
     * @param string $nombredocumento
     *
     * @return Recaudosoferentes
     */
    public function setNombredocumento($nombredocumento)
    {
        $this->nombredocumento = $nombredocumento;

        return $this;
    }

    /**
     * Get nombredocumento
     *
     * @return string
     */
    public function getNombredocumento()
    {
        return $this->nombredocumento;
    }

    /**
     * Set definicion
     *
     * @param string $definicion
     *
     * @return Recaudosoferentes
     */
    public function setDefinicion($definicion)
    {
        $this->definicion = $definicion;

        return $this;
    }

    /**
     * Get definicion
     *
     * @return string
     */
    public function getDefinicion()
    {
        return $this->definicion;
    }

    /**
     * Set tipodocumento
     *
     * @param string $tipodocumento
     *
     * @return Recaudosoferentes
     */
    public function setTipodocumento($tipodocumento)
    {
        $this->tipodocumento = $tipodocumento;

        return $this;
    }

    /**
     * Get tipodocumento
     *
     * @return string
     */
    public function getTipodocumento()
    {
        return $this->tipodocumento;
    }

    /**
     * Set puntajemin
     *
     * @param integer $puntajemin
     *
     * @return Recaudosoferentes
     */
    public function setPuntajemin($puntajemin)
    {
        $this->puntajemin = $puntajemin;

        return $this;
    }

    /**
     * Get puntajemin
     *
     * @return integer
     */
    public function getPuntajemin()
    {
        return $this->puntajemin;
    }

    /**
     * Set puntajemed
     *
     * @param integer $puntajemed
     *
     * @return Recaudosoferentes
     */
    public function setPuntajemed($puntajemed)
    {
        $this->puntajemed = $puntajemed;

        return $this;
    }

    /**
     * Get puntajemed
     *
     * @return integer
     */
    public function getPuntajemed()
    {
        return $this->puntajemed;
    }

    /**
     * Set puntajemax
     *
     * @param integer $puntajemax
     *
     * @return Recaudosoferentes
     */
    public function setPuntajemax($puntajemax)
    {
        $this->puntajemax = $puntajemax;

        return $this;
    }

    /**
     * Get puntajemax
     *
     * @return integer
     */
    public function getPuntajemax()
    {
        return $this->puntajemax;
    }

    /**
     * Get idrecaudos
     *
     * @return integer
     */
    public function getIdrecaudos()
    {
        return $this->idrecaudos;
    }
}
