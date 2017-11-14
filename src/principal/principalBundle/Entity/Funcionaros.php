<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Funcionaros
 *
 * @ORM\Table(name="funcionaros")
 * @ORM\Entity
 */
class Funcionaros
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombrefun", type="string", length=45, nullable=true)
     */
    private $nombrefun;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidofun", type="string", length=45, nullable=true)
     */
    private $apellidofun;

    /**
     * @var string
     *
     * @ORM\Column(name="telefonofun", type="string", length=45, nullable=true)
     */
    private $telefonofun;

    /**
     * @var string
     *
     * @ORM\Column(name="correofun", type="string", length=45, nullable=true)
     */
    private $correofun;

    /**
     * @var integer
     *
     * @ORM\Column(name="idfuncionaros", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfuncionaros;



    /**
     * Set nombrefun
     *
     * @param string $nombrefun
     *
     * @return Funcionaros
     */
    public function setNombrefun($nombrefun)
    {
        $this->nombrefun = $nombrefun;

        return $this;
    }

    /**
     * Get nombrefun
     *
     * @return string
     */
    public function getNombrefun()
    {
        return $this->nombrefun;
    }

    /**
     * Set apellidofun
     *
     * @param string $apellidofun
     *
     * @return Funcionaros
     */
    public function setApellidofun($apellidofun)
    {
        $this->apellidofun = $apellidofun;

        return $this;
    }

    /**
     * Get apellidofun
     *
     * @return string
     */
    public function getApellidofun()
    {
        return $this->apellidofun;
    }

    /**
     * Set telefonofun
     *
     * @param string $telefonofun
     *
     * @return Funcionaros
     */
    public function setTelefonofun($telefonofun)
    {
        $this->telefonofun = $telefonofun;

        return $this;
    }

    /**
     * Get telefonofun
     *
     * @return string
     */
    public function getTelefonofun()
    {
        return $this->telefonofun;
    }

    /**
     * Set correofun
     *
     * @param string $correofun
     *
     * @return Funcionaros
     */
    public function setCorreofun($correofun)
    {
        $this->correofun = $correofun;

        return $this;
    }

    /**
     * Get correofun
     *
     * @return string
     */
    public function getCorreofun()
    {
        return $this->correofun;
    }

    /**
     * Get idfuncionaros
     *
     * @return integer
     */
    public function getIdfuncionaros()
    {
        return $this->idfuncionaros;
    }
}
