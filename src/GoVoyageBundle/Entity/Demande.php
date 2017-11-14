<?php

namespace GoVoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Demande
 *
 * @ORM\Table(name="demande", indexes={@ORM\Index(name="id_client_fk", columns={"id_client_fk"}), @ORM\Index(name="id_vp_fk", columns={"id_vp_fk"})})
 * @ORM\Entity
 */
class Demande
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_guide_fk", type="string", length=30, nullable=false)
     */
    private $idGuideFk;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_client_fk", referencedColumnName="id_user")
     * })
     */
    private $idClientFk;

    /**
     * @var \Voyagepersonalise
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Voyagepersonalise")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_vp_fk", referencedColumnName="id_vp")
     * })
     */
    private $idVpFk;



    /**
     * Set idGuideFk
     *
     * @param string $idGuideFk
     *
     * @return Demande
     */
    public function setIdGuideFk($idGuideFk)
    {
        $this->idGuideFk = $idGuideFk;

        return $this;
    }

    /**
     * Get idGuideFk
     *
     * @return string
     */
    public function getIdGuideFk()
    {
        return $this->idGuideFk;
    }

    /**
     * Set idClientFk
     *
     * @param \GoVoyageBundle\Entity\Users $idClientFk
     *
     * @return Demande
     */
    public function setIdClientFk(\GoVoyageBundle\Entity\Users $idClientFk = null)
    {
        $this->idClientFk = $idClientFk;

        return $this;
    }

    /**
     * Get idClientFk
     *
     * @return \GoVoyageBundle\Entity\Users
     */
    public function getIdClientFk()
    {
        return $this->idClientFk;
    }

    /**
     * Set idVpFk
     *
     * @param \GoVoyageBundle\Entity\Voyagepersonalise $idVpFk
     *
     * @return Demande
     */
    public function setIdVpFk(\GoVoyageBundle\Entity\Voyagepersonalise $idVpFk)
    {
        $this->idVpFk = $idVpFk;

        return $this;
    }

    /**
     * Get idVpFk
     *
     * @return \GoVoyageBundle\Entity\Voyagepersonalise
     */
    public function getIdVpFk()
    {
        return $this->idVpFk;
    }
}
