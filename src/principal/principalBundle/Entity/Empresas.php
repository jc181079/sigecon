<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empresas
 *
 * @ORM\Table(name="empresas")
 * @ORM\Entity
 */
class Empresas
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombreempre", type="string", length=45, nullable=true)
     */
    private $nombreempre;

    /**
     * @var string
     *
     * @ORM\Column(name="rif", type="string", length=10, nullable=true)
     */
    private $rif;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=45, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="objetosocial", type="text", nullable=true)
     */
    private $objetosocial;

    /**
     * @var string
     *
     * @ORM\Column(name="representantelegal", type="string", length=45, nullable=true)
     */
    private $representantelegal;

    /**
     * @var string
     *
     * @ORM\Column(name="cedula", type="string", length=45, nullable=true)
     */
    private $cedula;

    /**
     * @var string
     *
     * @ORM\Column(name="registromer", type="text", nullable=true)
     */
    private $registromer;

    /**
     * @var string
     *
     * @ORM\Column(name="nro", type="string", length=45, nullable=true)
     */
    private $nro;

    /**
     * @var string
     *
     * @ORM\Column(name="tomo", type="string", length=45, nullable=true)
     */
    private $tomo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechatomo", type="date", nullable=true)
     */
    private $fechatomo;

    /**
     * @var integer
     *
     * @ORM\Column(name="idempresas", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idempresas;



    /**
     * Set nombreempre
     *
     * @param string $nombreempre
     *
     * @return Empresas
     */
    public function setNombreempre($nombreempre)
    {
        $this->nombreempre = $nombreempre;

        return $this;
    }

    /**
     * Get nombreempre
     *
     * @return string
     */
    public function getNombreempre()
    {
        return $this->nombreempre;
    }

    /**
     * Set rif
     *
     * @param string $rif
     *
     * @return Empresas
     */
    public function setRif($rif)
    {
        $this->rif = $rif;

        return $this;
    }

    /**
     * Get rif
     *
     * @return string
     */
    public function getRif()
    {
        return $this->rif;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Empresas
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Empresas
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set objetosocial
     *
     * @param string $objetosocial
     *
     * @return Empresas
     */
    public function setObjetosocial($objetosocial)
    {
        $this->objetosocial = $objetosocial;

        return $this;
    }

    /**
     * Get objetosocial
     *
     * @return string
     */
    public function getObjetosocial()
    {
        return $this->objetosocial;
    }

    /**
     * Set representantelegal
     *
     * @param string $representantelegal
     *
     * @return Empresas
     */
    public function setRepresentantelegal($representantelegal)
    {
        $this->representantelegal = $representantelegal;

        return $this;
    }

    /**
     * Get representantelegal
     *
     * @return string
     */
    public function getRepresentantelegal()
    {
        return $this->representantelegal;
    }

    /**
     * Set cedula
     *
     * @param string $cedula
     *
     * @return Empresas
     */
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;

        return $this;
    }

    /**
     * Get cedula
     *
     * @return string
     */
    public function getCedula()
    {
        return $this->cedula;
    }

    /**
     * Set registromer
     *
     * @param string $registromer
     *
     * @return Empresas
     */
    public function setRegistromer($registromer)
    {
        $this->registromer = $registromer;

        return $this;
    }

    /**
     * Get registromer
     *
     * @return string
     */
    public function getRegistromer()
    {
        return $this->registromer;
    }

    /**
     * Set nro
     *
     * @param string $nro
     *
     * @return Empresas
     */
    public function setNro($nro)
    {
        $this->nro = $nro;

        return $this;
    }

    /**
     * Get nro
     *
     * @return string
     */
    public function getNro()
    {
        return $this->nro;
    }

    /**
     * Set tomo
     *
     * @param string $tomo
     *
     * @return Empresas
     */
    public function setTomo($tomo)
    {
        $this->tomo = $tomo;

        return $this;
    }

    /**
     * Get tomo
     *
     * @return string
     */
    public function getTomo()
    {
        return $this->tomo;
    }

    /**
     * Set fechatomo
     *
     * @param \DateTime $fechatomo
     *
     * @return Empresas
     */
    public function setFechatomo($fechatomo)
    {
        $this->fechatomo = $fechatomo;

        return $this;
    }

    /**
     * Get fechatomo
     *
     * @return \DateTime
     */
    public function getFechatomo()
    {
        return $this->fechatomo;
    }

    /**
     * Get idempresas
     *
     * @return integer
     */
    public function getIdempresas()
    {
        return $this->idempresas;
    }
}
