<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Otroslibros
 *
 * @ORM\Table(name="otroslibros", uniqueConstraints={@ORM\UniqueConstraint(name="codlibro_UNIQUE", columns={"codlibro"})}, indexes={@ORM\Index(name="fk_otroslibros_libros1_idx", columns={"libros"}), @ORM\Index(name="fk_otroslibros_libroproceso1_idx", columns={"libroproceso"}), @ORM\Index(name="fk_otroslibros_solicitud1_idx", columns={"idsolicitud"})})
 * @ORM\Entity
 */
class Otroslibros
{
    /**
     * @var string
     *
     * @ORM\Column(name="codlibro", type="string", length=20, nullable=true)
     */
    private $codlibro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechalibro", type="date", nullable=true)
     */
    private $fechalibro;

    /**
     * @var integer
     *
     * @ORM\Column(name="idotroslibros", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idotroslibros;

    /**
     * @var \principal\principalBundle\Entity\Libroproceso
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Libroproceso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="libroproceso", referencedColumnName="idlibroproceso")
     * })
     */
    private $libroproceso;

    /**
     * @var \principal\principalBundle\Entity\Libros
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Libros")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="libros", referencedColumnName="idlibros")
     * })
     */
    private $libros;

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
     * Set codlibro
     *
     * @param string $codlibro
     *
     * @return Otroslibros
     */
    public function setCodlibro($codlibro)
    {
        $this->codlibro = $codlibro;

        return $this;
    }

    /**
     * Get codlibro
     *
     * @return string
     */
    public function getCodlibro()
    {
        return $this->codlibro;
    }

    /**
     * Set fechalibro
     *
     * @param \DateTime $fechalibro
     *
     * @return Otroslibros
     */
    public function setFechalibro($fechalibro)
    {
        $this->fechalibro = $fechalibro;

        return $this;
    }

    /**
     * Get fechalibro
     *
     * @return \DateTime
     */
    public function getFechalibro()
    {
        return $this->fechalibro;
    }

    /**
     * Get idotroslibros
     *
     * @return integer
     */
    public function getIdotroslibros()
    {
        return $this->idotroslibros;
    }

    /**
     * Set libroproceso
     *
     * @param \principal\principalBundle\Entity\Libroproceso $libroproceso
     *
     * @return Otroslibros
     */
    public function setLibroproceso(\principal\principalBundle\Entity\Libroproceso $libroproceso = null)
    {
        $this->libroproceso = $libroproceso;

        return $this;
    }

    /**
     * Get libroproceso
     *
     * @return \principal\principalBundle\Entity\Libroproceso
     */
    public function getLibroproceso()
    {
        return $this->libroproceso;
    }

    /**
     * Set libros
     *
     * @param \principal\principalBundle\Entity\Libros $libros
     *
     * @return Otroslibros
     */
    public function setLibros(\principal\principalBundle\Entity\Libros $libros = null)
    {
        $this->libros = $libros;

        return $this;
    }

    /**
     * Get libros
     *
     * @return \principal\principalBundle\Entity\Libros
     */
    public function getLibros()
    {
        return $this->libros;
    }

    /**
     * Set idsolicitud
     *
     * @param \principal\principalBundle\Entity\Solicitud $idsolicitud
     *
     * @return Otroslibros
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
