<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actaparticipacion1
 *
 * @ORM\Table(name="actaparticipacion1", indexes={@ORM\Index(name="fk_actaparticipacion_comitecontrataciones1_idx", columns={"idcomisioncontrataciones"}), @ORM\Index(name="fk_actaparticipacion1_pliego1_idx", columns={"pliego_idpliego"}), @ORM\Index(name="fk_actaparticipacion1_empresas1_idx", columns={"idempresas"}), @ORM\Index(name="fk_actaparticipacion1_solicitud1_idx", columns={"idsolicitud"})})
 * @ORM\Entity
 */
class Actaparticipacion1
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idactaparticipacion1", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idactaparticipacion1;

    /**
     * @var \principal\principalBundle\Entity\Empresas
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Empresas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idempresas", referencedColumnName="idempresas")
     * })
     */
    private $idempresas;

    /**
     * @var \principal\principalBundle\Entity\Pliego
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Pliego")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pliego_idpliego", referencedColumnName="idpliego")
     * })
     */
    private $pliegopliego;

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
     * @var \principal\principalBundle\Entity\Comitecontrataciones
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Comitecontrataciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idcomisioncontrataciones", referencedColumnName="idcomisioncontrataciones")
     * })
     */
    private $idcomisioncontrataciones;



    /**
     * Get idactaparticipacion1
     *
     * @return integer
     */
    public function getIdactaparticipacion1()
    {
        return $this->idactaparticipacion1;
    }

    /**
     * Set idempresas
     *
     * @param \principal\principalBundle\Entity\Empresas $idempresas
     *
     * @return Actaparticipacion1
     */
    public function setIdempresas(\principal\principalBundle\Entity\Empresas $idempresas = null)
    {
        $this->idempresas = $idempresas;

        return $this;
    }

    /**
     * Get idempresas
     *
     * @return \principal\principalBundle\Entity\Empresas
     */
    public function getIdempresas()
    {
        return $this->idempresas;
    }

    /**
     * Set pliegopliego
     *
     * @param \principal\principalBundle\Entity\Pliego $pliegopliego
     *
     * @return Actaparticipacion1
     */
    public function setPliegopliego(\principal\principalBundle\Entity\Pliego $pliegopliego = null)
    {
        $this->pliegopliego = $pliegopliego;

        return $this;
    }

    /**
     * Get pliegopliego
     *
     * @return \principal\principalBundle\Entity\Pliego
     */
    public function getPliegopliego()
    {
        return $this->pliegopliego;
    }

    /**
     * Set idsolicitud
     *
     * @param \principal\principalBundle\Entity\Solicitud $idsolicitud
     *
     * @return Actaparticipacion1
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
     * Set idcomisioncontrataciones
     *
     * @param \principal\principalBundle\Entity\Comitecontrataciones $idcomisioncontrataciones
     *
     * @return Actaparticipacion1
     */
    public function setIdcomisioncontrataciones(\principal\principalBundle\Entity\Comitecontrataciones $idcomisioncontrataciones = null)
    {
        $this->idcomisioncontrataciones = $idcomisioncontrataciones;

        return $this;
    }

    /**
     * Get idcomisioncontrataciones
     *
     * @return \principal\principalBundle\Entity\Comitecontrataciones
     */
    public function getIdcomisioncontrataciones()
    {
        return $this->idcomisioncontrataciones;
    }
}
