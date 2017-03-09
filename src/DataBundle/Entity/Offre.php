<?php

namespace DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offre
 *
 * @ORM\Table(name="offre", indexes={@ORM\Index(name="id_voiture", columns={"id_voiture"})})
 * @ORM\Entity
 */
class Offre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_offre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOffre;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=200, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="marque", type="string", length=40, nullable=true)
     */
    private $marque;

    /**
     * @var string
     *
     * @ORM\Column(name="modele", type="string", length=40, nullable=true)
     */
    private $modele;

    /**
     * @var integer
     *
     * @ORM\Column(name="Prix", type="integer", nullable=true)
     */
    private $prix;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_offre", type="date", nullable=false)
     */
    private $dateOffre;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptif", type="text", length=65535, nullable=false)
     */
    private $descriptif;

    /**
     * @var string
     *
     * @ORM\Column(name="image_offre", type="blob", length=65535, nullable=false)
     */
    private $imageOffre;

    /**
     * @var string
     *
     * @ORM\Column(name="image2", type="blob", length=65535, nullable=true)
     */
    private $image2;

    /**
     * @var string
     *
     * @ORM\Column(name="image3", type="blob", length=65535, nullable=true)
     */
    private $image3;

    /**
     * @var string
     *
     * @ORM\Column(name="image4", type="blob", length=65535, nullable=true)
     */
    private $image4;

    /**
     * @var string
     *
     * @ORM\Column(name="image5", type="blob", length=65535, nullable=true)
     */
    private $image5;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255, nullable=true)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_de_tel", type="string", length=255, nullable=true)
     */
    private $numeroDeTel;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_voiture", type="integer", nullable=false)
     */
    private $idVoiture;

    /**
     * @return int
     */
    public function getIdOffre()
    {
        return $this->idOffre;
    }

    /**
     * @param int $idOffre
     */
    public function setIdOffre($idOffre)
    {
        $this->idOffre = $idOffre;
    }

    /**
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return string
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param string $marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    /**
     * @return string
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * @param string $modele
     */
    public function setModele($modele)
    {
        $this->modele = $modele;
    }

    /**
     * @return int
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param int $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return \DateTime
     */
    public function getDateOffre()
    {
        return $this->dateOffre;
    }

    /**
     * @param \DateTime $dateOffre
     */
    public function setDateOffre($dateOffre)
    {
        $this->dateOffre = $dateOffre;
    }

    /**
     * @return string
     */
    public function getDescriptif()
    {
        return $this->descriptif;
    }

    /**
     * @param string $descriptif
     */
    public function setDescriptif($descriptif)
    {
        $this->descriptif = $descriptif;
    }

    /**
     * @return string
     */
    public function getImageOffre()
    {
        return $this->imageOffre;
    }

    /**
     * @param string $imageOffre
     */
    public function setImageOffre($imageOffre)
    {
        $this->imageOffre = $imageOffre;
    }

    /**
     * @return string
     */
    public function getImage2()
    {
        return $this->image2;
    }

    /**
     * @param string $image2
     */
    public function setImage2($image2)
    {
        $this->image2 = $image2;
    }

    /**
     * @return string
     */
    public function getImage3()
    {
        return $this->image3;
    }

    /**
     * @param string $image3
     */
    public function setImage3($image3)
    {
        $this->image3 = $image3;
    }

    /**
     * @return string
     */
    public function getImage4()
    {
        return $this->image4;
    }

    /**
     * @param string $image4
     */
    public function setImage4($image4)
    {
        $this->image4 = $image4;
    }

    /**
     * @return string
     */
    public function getImage5()
    {
        return $this->image5;
    }

    /**
     * @param string $image5
     */
    public function setImage5($image5)
    {
        $this->image5 = $image5;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param string $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * @return string
     */
    public function getNumeroDeTel()
    {
        return $this->numeroDeTel;
    }

    /**
     * @param string $numeroDeTel
     */
    public function setNumeroDeTel($numeroDeTel)
    {
        $this->numeroDeTel = $numeroDeTel;
    }

    /**
     * @return int
     */
    public function getIdVoiture()
    {
        return $this->idVoiture;
    }

    /**
     * @param int $idVoiture
     */
    public function setIdVoiture($idVoiture)
    {
        $this->idVoiture = $idVoiture;
    }


}

