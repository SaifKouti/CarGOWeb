<?php

namespace DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Discussion
 *
 * @ORM\Table(name="discussion")
 * @ORM\Entity
 */
class Discussion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_discussion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDiscussion;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_discussion", type="string", length=255, nullable=false)
     */
    private $titreDiscussion;

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
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image;

    /**
     * @return int
     */
    public function getIdDiscussion()
    {
        return $this->idDiscussion;
    }

    /**
     * @param int $idDiscussion
     */
    public function setIdDiscussion($idDiscussion)
    {
        $this->idDiscussion = $idDiscussion;
    }

    /**
     * @return string
     */
    public function getTitreDiscussion()
    {
        return $this->titreDiscussion;
    }

    /**
     * @param string $titreDiscussion
     */
    public function setTitreDiscussion($titreDiscussion)
    {
        $this->titreDiscussion = $titreDiscussion;
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

