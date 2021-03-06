<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fuente
 *
 * @ORM\Table(name="fuente")
 * @ORM\Entity
 */
class Fuente
{
    /**
     * @var string
     *
     * @ORM\Column(name="fuentenom", type="string", length=45, nullable=true)
     */
    private $fuentenom;

    /**
     * @var integer
     *
     * @ORM\Column(name="idfuente", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfuente;



    /**
     * Set fuentenom
     *
     * @param string $fuentenom
     *
     * @return Fuente
     */
    public function setFuentenom($fuentenom)
    {
        $this->fuentenom = $fuentenom;

        return $this;
    }

    /**
     * Get fuentenom
     *
     * @return string
     */
    public function getFuentenom()
    {
        return $this->fuentenom;
    }

    /**
     * Get idfuente
     *
     * @return integer
     */
    public function getIdfuente()
    {
        return $this->idfuente;
    }
}
