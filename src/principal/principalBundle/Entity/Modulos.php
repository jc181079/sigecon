<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modulos
 *
 * @ORM\Table(name="modulos", indexes={@ORM\Index(name="fk_modulos_perfil1_idx", columns={"idperfil"})})
 * @ORM\Entity
 */
class Modulos
{
    /**
     * @var string
     *
     * @ORM\Column(name="nommodulo", type="string", length=45, nullable=true)
     */
    private $nommodulo;

    /**
     * @var string
     *
     * @ORM\Column(name="observacionmod", type="string", length=45, nullable=true)
     */
    private $observacionmod;

    /**
     * @var integer
     *
     * @ORM\Column(name="idmodulos", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmodulos;

    /**
     * @var \principal\principalBundle\Entity\Perfil
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Perfil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idperfil", referencedColumnName="idperfil")
     * })
     */
    private $idperfil;



    /**
     * Set nommodulo
     *
     * @param string $nommodulo
     *
     * @return Modulos
     */
    public function setNommodulo($nommodulo)
    {
        $this->nommodulo = $nommodulo;

        return $this;
    }

    /**
     * Get nommodulo
     *
     * @return string
     */
    public function getNommodulo()
    {
        return $this->nommodulo;
    }

    /**
     * Set observacionmod
     *
     * @param string $observacionmod
     *
     * @return Modulos
     */
    public function setObservacionmod($observacionmod)
    {
        $this->observacionmod = $observacionmod;

        return $this;
    }

    /**
     * Get observacionmod
     *
     * @return string
     */
    public function getObservacionmod()
    {
        return $this->observacionmod;
    }

    /**
     * Get idmodulos
     *
     * @return integer
     */
    public function getIdmodulos()
    {
        return $this->idmodulos;
    }

    /**
     * Set idperfil
     *
     * @param \principal\principalBundle\Entity\Perfil $idperfil
     *
     * @return Modulos
     */
    public function setIdperfil(\principal\principalBundle\Entity\Perfil $idperfil = null)
    {
        $this->idperfil = $idperfil;

        return $this;
    }

    /**
     * Get idperfil
     *
     * @return \principal\principalBundle\Entity\Perfil
     */
    public function getIdperfil()
    {
        return $this->idperfil;
    }
}
