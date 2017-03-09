<?php

namespace DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actualite
 *
 * @ORM\Table(name="actualite")
 * @ORM\Entity
 */
class Actualite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_actualite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idActualite;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_actualite", type="string", length=255, nullable=false)
     */
    private $titreActualite;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu_actualite", type="string", length=255, nullable=false)
     */
    private $contenuActualite;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptif", type="text", length=65535, nullable=false)
     */
    private $descriptif;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=255, nullable=false)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="blob", length=65535, nullable=true)
     */
    private $image;

    /**
     * @return int
     */
    public function getIdActualite()
    {
        return $this->idActualite;
    }

    /**
     * @param int $idActualite
     */
    public function setIdActualite($idActualite)
    {
        $this->idActualite = $idActualite;
    }

    /**
     * @return string
     */
    public function getTitreActualite()
    {
        return $this->titreActualite;
    }

    /**
     * @param string $titreActualite
     */
    public function setTitreActualite($titreActualite)
    {
        $this->titreActualite = $titreActualite;
    }

    /**
     * @return string
     */
    public function getContenuActualite()
    {
        return $this->contenuActualite;
    }

    /**
     * @param string $contenuActualite
     */
    public function setContenuActualite($contenuActualite)
    {
        $this->contenuActualite = $contenuActualite;
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
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param string $categorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }


}

