<?php

namespace GoVoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class Users
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=30, nullable=true)
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=30, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=20, nullable=true)
     */
    private $mdp;

    /**
     * @var integer
     *
     * @ORM\Column(name="numTel", type="integer", nullable=true)
     */
    private $numtel;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=50, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=250, nullable=true)
     */
    private $image;

    /**
     * @var integer
     *
     * @ORM\Column(name="etoile", type="integer", nullable=true)
     */
    private $etoile;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_chambre", type="integer", nullable=true)
     */
    private $nbChambre;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_chambre_reserve", type="integer", nullable=true)
     */
    private $nbChambreReserve;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=30, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="cin", type="string", length=15, nullable=true)
     */
    private $cin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissence", type="date", nullable=true)
     */
    private $datenaissence;

    /**
     * @var integer
     *
     * @ORM\Column(name="note", type="integer", nullable=true)
     */
    private $note;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_note", type="integer", nullable=true)
     */
    private $nbrNote;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_voiture", type="integer", nullable=true)
     */
    private $nbrVoiture;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_voyage_organise", type="integer", nullable=true)
     */
    private $nbrVoyageOrganise;



    /**
     * Get idUser
     *
     * @return integer
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return Users
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Users
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Users
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
     * Set mdp
     *
     * @param string $mdp
     *
     * @return Users
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * Get mdp
     *
     * @return string
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set numtel
     *
     * @param integer $numtel
     *
     * @return Users
     */
    public function setNumtel($numtel)
    {
        $this->numtel = $numtel;

        return $this;
    }

    /**
     * Get numtel
     *
     * @return integer
     */
    public function getNumtel()
    {
        return $this->numtel;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Users
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Users
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set etoile
     *
     * @param integer $etoile
     *
     * @return Users
     */
    public function setEtoile($etoile)
    {
        $this->etoile = $etoile;

        return $this;
    }

    /**
     * Get etoile
     *
     * @return integer
     */
    public function getEtoile()
    {
        return $this->etoile;
    }

    /**
     * Set nbChambre
     *
     * @param integer $nbChambre
     *
     * @return Users
     */
    public function setNbChambre($nbChambre)
    {
        $this->nbChambre = $nbChambre;

        return $this;
    }

    /**
     * Get nbChambre
     *
     * @return integer
     */
    public function getNbChambre()
    {
        return $this->nbChambre;
    }

    /**
     * Set nbChambreReserve
     *
     * @param integer $nbChambreReserve
     *
     * @return Users
     */
    public function setNbChambreReserve($nbChambreReserve)
    {
        $this->nbChambreReserve = $nbChambreReserve;

        return $this;
    }

    /**
     * Get nbChambreReserve
     *
     * @return integer
     */
    public function getNbChambreReserve()
    {
        return $this->nbChambreReserve;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Users
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set cin
     *
     * @param string $cin
     *
     * @return Users
     */
    public function setCin($cin)
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get cin
     *
     * @return string
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set datenaissence
     *
     * @param \DateTime $datenaissence
     *
     * @return Users
     */
    public function setDatenaissence($datenaissence)
    {
        $this->datenaissence = $datenaissence;

        return $this;
    }

    /**
     * Get datenaissence
     *
     * @return \DateTime
     */
    public function getDatenaissence()
    {
        return $this->datenaissence;
    }

    /**
     * Set note
     *
     * @param integer $note
     *
     * @return Users
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return integer
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set nbrNote
     *
     * @param integer $nbrNote
     *
     * @return Users
     */
    public function setNbrNote($nbrNote)
    {
        $this->nbrNote = $nbrNote;

        return $this;
    }

    /**
     * Get nbrNote
     *
     * @return integer
     */
    public function getNbrNote()
    {
        return $this->nbrNote;
    }

    /**
     * Set nbrVoiture
     *
     * @param integer $nbrVoiture
     *
     * @return Users
     */
    public function setNbrVoiture($nbrVoiture)
    {
        $this->nbrVoiture = $nbrVoiture;

        return $this;
    }

    /**
     * Get nbrVoiture
     *
     * @return integer
     */
    public function getNbrVoiture()
    {
        return $this->nbrVoiture;
    }

    /**
     * Set nbrVoyageOrganise
     *
     * @param integer $nbrVoyageOrganise
     *
     * @return Users
     */
    public function setNbrVoyageOrganise($nbrVoyageOrganise)
    {
        $this->nbrVoyageOrganise = $nbrVoyageOrganise;

        return $this;
    }

    /**
     * Get nbrVoyageOrganise
     *
     * @return integer
     */
    public function getNbrVoyageOrganise()
    {
        return $this->nbrVoyageOrganise;
    }
}
