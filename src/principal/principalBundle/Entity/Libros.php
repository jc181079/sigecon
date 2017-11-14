<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Libros
 *
 * @ORM\Table(name="libros")
 * @ORM\Entity
 */
class Libros
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombrelibro", type="string", length=45, nullable=true)
     */
    private $nombrelibro;

    /**
     * @var string
     *
     * @ORM\Column(name="observacionlibro", type="string", length=45, nullable=true)
     */
    private $observacionlibro;

    /**
     * @var string
     *
     * @ORM\Column(name="prefijo", type="string", length=10, nullable=true)
     */
    private $prefijo;

    /**
     * @var integer
     *
     * @ORM\Column(name="idlibros", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlibros;



    /**
     * Set nombrelibro
     *
     * @param string $nombrelibro
     *
     * @return Libros
     */
    public function setNombrelibro($nombrelibro)
    {
        $this->nombrelibro = $nombrelibro;

        return $this;
    }

    /**
     * Get nombrelibro
     *
     * @return string
     */
    public function getNombrelibro()
    {
        return $this->nombrelibro;
    }

    /**
     * Set observacionlibro
     *
     * @param string $observacionlibro
     *
     * @return Libros
     */
    public function setObservacionlibro($observacionlibro)
    {
        $this->observacionlibro = $observacionlibro;

        return $this;
    }

    /**
     * Get observacionlibro
     *
     * @return string
     */
    public function getObservacionlibro()
    {
        return $this->observacionlibro;
    }

    /**
     * Set prefijo
     *
     * @param string $prefijo
     *
     * @return Libros
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
     * Get idlibros
     *
     * @return integer
     */
    public function getIdlibros()
    {
        return $this->idlibros;
    }
}
