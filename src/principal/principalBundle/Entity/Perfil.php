<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Perfil
 *
 * @ORM\Table(name="perfil")
 * @ORM\Entity
 */
class Perfil
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombreper", type="string", length=45, nullable=true)
     */
    private $nombreper;

    /**
     * @var integer
     *
     * @ORM\Column(name="idperfil", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idperfil;



    /**
     * Set nombreper
     *
     * @param string $nombreper
     *
     * @return Perfil
     */
    public function setNombreper($nombreper)
    {
        $this->nombreper = $nombreper;

        return $this;
    }

    /**
     * Get nombreper
     *
     * @return string
     */
    public function getNombreper()
    {
        return $this->nombreper;
    }

    /**
     * Get idperfil
     *
     * @return integer
     */
    public function getIdperfil()
    {
        return $this->idperfil;
    }
}
