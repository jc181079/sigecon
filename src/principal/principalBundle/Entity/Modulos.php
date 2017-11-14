<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modulos
 *
 * @ORM\Table(name="modulos", indexes={@ORM\Index(name="fk_modulos_perfil1_idx", columns={"perfil_idperfil"}), @ORM\Index(name="fk_modulos_usuarios1_idx", columns={"usuarios_idusuarios"})})
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
     *   @ORM\JoinColumn(name="perfil_idperfil", referencedColumnName="idperfil")
     * })
     */
    private $perfilperfil;

    /**
     * @var \principal\principalBundle\Entity\Usuarios
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuarios_idusuarios", referencedColumnName="idusuarios")
     * })
     */
    private $usuariosusuarios;



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
     * Set perfilperfil
     *
     * @param \principal\principalBundle\Entity\Perfil $perfilperfil
     *
     * @return Modulos
     */
    public function setPerfilperfil(\principal\principalBundle\Entity\Perfil $perfilperfil = null)
    {
        $this->perfilperfil = $perfilperfil;

        return $this;
    }

    /**
     * Get perfilperfil
     *
     * @return \principal\principalBundle\Entity\Perfil
     */
    public function getPerfilperfil()
    {
        return $this->perfilperfil;
    }

    /**
     * Set usuariosusuarios
     *
     * @param \principal\principalBundle\Entity\Usuarios $usuariosusuarios
     *
     * @return Modulos
     */
    public function setUsuariosusuarios(\principal\principalBundle\Entity\Usuarios $usuariosusuarios = null)
    {
        $this->usuariosusuarios = $usuariosusuarios;

        return $this;
    }

    /**
     * Get usuariosusuarios
     *
     * @return \principal\principalBundle\Entity\Usuarios
     */
    public function getUsuariosusuarios()
    {
        return $this->usuariosusuarios;
    }
}
