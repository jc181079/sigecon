<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Libroproceso
 *
 * @ORM\Table(name="libroproceso", uniqueConstraints={@ORM\UniqueConstraint(name="codproceso_UNIQUE", columns={"codproceso"})}, indexes={@ORM\Index(name="fk_libroproceso_modalidades1_idx", columns={"modalidades"}), @ORM\Index(name="fk_libroproceso_usuarios1_idx", columns={"usuarios"}), @ORM\Index(name="fk_libroproceso_solicitud1_idx", columns={"idsolicitud"})})
 * @ORM\Entity
 */
class Libroproceso
{
    /**
     * @var string
     *
     * @ORM\Column(name="codproceso", type="string", length=18, nullable=true)
     */
    private $codproceso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechalibro", type="date", nullable=true)
     */
    private $fechalibro;

    /**
     * @var integer
     *
     * @ORM\Column(name="idlibroproceso", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlibroproceso;

    /**
     * @var \principal\principalBundle\Entity\Modalidades
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Modalidades")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="modalidades", referencedColumnName="idmodalidades")
     * })
     */
    private $modalidades;

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
     * @var \principal\principalBundle\Entity\Usuarios
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuarios", referencedColumnName="idusuarios")
     * })
     */
    private $usuarios;



    /**
     * Set codproceso
     *
     * @param string $codproceso
     *
     * @return Libroproceso
     */
    public function setCodproceso($codproceso)
    {
        $this->codproceso = $codproceso;

        return $this;
    }

    /**
     * Get codproceso
     *
     * @return string
     */
    public function getCodproceso()
    {
        return $this->codproceso;
    }

    /**
     * Set fechalibro
     *
     * @param \DateTime $fechalibro
     *
     * @return Libroproceso
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
     * Get idlibroproceso
     *
     * @return integer
     */
    public function getIdlibroproceso()
    {
        return $this->idlibroproceso;
    }

    /**
     * Set modalidades
     *
     * @param \principal\principalBundle\Entity\Modalidades $modalidades
     *
     * @return Libroproceso
     */
    public function setModalidades(\principal\principalBundle\Entity\Modalidades $modalidades = null)
    {
        $this->modalidades = $modalidades;

        return $this;
    }

    /**
     * Get modalidades
     *
     * @return \principal\principalBundle\Entity\Modalidades
     */
    public function getModalidades()
    {
        return $this->modalidades;
    }

    /**
     * Set idsolicitud
     *
     * @param \principal\principalBundle\Entity\Solicitud $idsolicitud
     *
     * @return Libroproceso
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

    /**
     * Set usuarios
     *
     * @param \principal\principalBundle\Entity\Usuarios $usuarios
     *
     * @return Libroproceso
     */
    public function setUsuarios(\principal\principalBundle\Entity\Usuarios $usuarios = null)
    {
        $this->usuarios = $usuarios;

        return $this;
    }

    /**
     * Get usuarios
     *
     * @return \principal\principalBundle\Entity\Usuarios
     */
    public function getUsuarios()
    {
        return $this->usuarios;
    }
}
