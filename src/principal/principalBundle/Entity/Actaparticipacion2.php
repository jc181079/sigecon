<?php

namespace principal\principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actaparticipacion2
 *
 * @ORM\Table(name="actaparticipacion2", indexes={@ORM\Index(name="fk_actaparticipacion2_actaparticipacion11_idx", columns={"idactaparticipacion1"}), @ORM\Index(name="fk_actaparticipacion2_empresas1_idx", columns={"empresas_idempresas"}), @ORM\Index(name="fk_actaparticipacion2_solicitud1_idx", columns={"idsolicitud"})})
 * @ORM\Entity
 */
class Actaparticipacion2
{
    /**
     * @var string
     *
     * @ORM\Column(name="consignacion", type="string", length=3, nullable=true)
     */
    private $consignacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="idactaparticipacion2", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idactaparticipacion2;

    /**
     * @var \principal\principalBundle\Entity\Actaparticipacion1
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Actaparticipacion1")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idactaparticipacion1", referencedColumnName="idactaparticipacion1")
     * })
     */
    private $idactaparticipacion1;

    /**
     * @var \principal\principalBundle\Entity\Empresas
     *
     * @ORM\ManyToOne(targetEntity="principal\principalBundle\Entity\Empresas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="empresas_idempresas", referencedColumnName="idempresas")
     * })
     */
    private $empresasempresas;

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
     * Set consignacion
     *
     * @param string $consignacion
     *
     * @return Actaparticipacion2
     */
    public function setConsignacion($consignacion)
    {
        $this->consignacion = $consignacion;

        return $this;
    }

    /**
     * Get consignacion
     *
     * @return string
     */
    public function getConsignacion()
    {
        return $this->consignacion;
    }

    /**
     * Get idactaparticipacion2
     *
     * @return integer
     */
    public function getIdactaparticipacion2()
    {
        return $this->idactaparticipacion2;
    }

    /**
     * Set idactaparticipacion1
     *
     * @param \principal\principalBundle\Entity\Actaparticipacion1 $idactaparticipacion1
     *
     * @return Actaparticipacion2
     */
    public function setIdactaparticipacion1(\principal\principalBundle\Entity\Actaparticipacion1 $idactaparticipacion1 = null)
    {
        $this->idactaparticipacion1 = $idactaparticipacion1;

        return $this;
    }

    /**
     * Get idactaparticipacion1
     *
     * @return \principal\principalBundle\Entity\Actaparticipacion1
     */
    public function getIdactaparticipacion1()
    {
        return $this->idactaparticipacion1;
    }

    /**
     * Set empresasempresas
     *
     * @param \principal\principalBundle\Entity\Empresas $empresasempresas
     *
     * @return Actaparticipacion2
     */
    public function setEmpresasempresas(\principal\principalBundle\Entity\Empresas $empresasempresas = null)
    {
        $this->empresasempresas = $empresasempresas;

        return $this;
    }

    /**
     * Get empresasempresas
     *
     * @return \principal\principalBundle\Entity\Empresas
     */
    public function getEmpresasempresas()
    {
        return $this->empresasempresas;
    }

    /**
     * Set idsolicitud
     *
     * @param \principal\principalBundle\Entity\Solicitud $idsolicitud
     *
     * @return Actaparticipacion2
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
}
