<?php

namespace DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommentaireDiscussion
 *
 * @ORM\Table(name="commentaire_discussion", indexes={@ORM\Index(name="id_disc", columns={"id_disc"})})
 * @ORM\Entity
 */
class CommentaireDiscussion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_comdis", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idComdis;

    /**
     * @var string
     *
     * @ORM\Column(name="text_comdis", type="string", length=255, nullable=false)
     */
    private $textComdis;

    /**
     * @var \Discussion
     *
     * @ORM\ManyToOne(targetEntity="Discussion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_disc", referencedColumnName="id_discussion")
     * })
     */
    private $idDisc;

    /**
     * @return int
     */
    public function getIdComdis()
    {
        return $this->idComdis;
    }

    /**
     * @param int $idComdis
     */
    public function setIdComdis($idComdis)
    {
        $this->idComdis = $idComdis;
    }

    /**
     * @return string
     */
    public function getTextComdis()
    {
        return $this->textComdis;
    }

    /**
     * @param string $textComdis
     */
    public function setTextComdis($textComdis)
    {
        $this->textComdis = $textComdis;
    }

    /**
     * @return \Discussion
     */
    public function getIdDisc()
    {
        return $this->idDisc;
    }

    /**
     * @param \Discussion $idDisc
     */
    public function setIdDisc($idDisc)
    {
        $this->idDisc = $idDisc;
    }


}

