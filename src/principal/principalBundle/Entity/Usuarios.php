<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuarios
 *
 * @ORM\Table(name="usuarios", indexes={@ORM\Index(name="fk_usuarios_funcionaros1_idx", columns={"funcionaros"})})
 * @ORM\Entity
 */
class Usuarios
{
    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=45, nullable=true)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="clave", type="string", length=45, nullable=true)
     */
    private $clave;

    /**
     * @var integer
     *
     * @ORM\Column(name="idusuarios", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idusuarios;

    /**
     * @var \principal\principalBundle\Entity\Funcionaros
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Funcionaros")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="funcionaros", referencedColumnName="idfuncionaros")
     * })
     */
    private $funcionaros;



    /**
     * Set login
     *
     * @param string $login
     *
     * @return Usuarios
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set clave
     *
     * @param string $clave
     *
     * @return Usuarios
     */
    public function setClave($clave)
    {
        $this->clave = $clave;

        return $this;
    }

    /**
     * Get clave
     *
     * @return string
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Get idusuarios
     *
     * @return integer
     */
    public function getIdusuarios()
    {
        return $this->idusuarios;
    }

    /**
     * Set funcionaros
     *
     * @param \principal\principalBundle\Entity\Funcionaros $funcionaros
     *
     * @return Usuarios
     */
    public function setFuncionaros(\principal\principalBundle\Entity\Funcionaros $funcionaros = null)
    {
        $this->funcionaros = $funcionaros;

        return $this;
    }

    /**
     * Get funcionaros
     *
     * @return \principal\principalBundle\Entity\Funcionaros
     */
    public function getFuncionaros()
    {
        return $this->funcionaros;
    }
}
