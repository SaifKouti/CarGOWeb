<?php

namespace DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="question")
 * @ORM\Entity
 */
class Question
{
    /**
     * @var string
     *
     * @ORM\Column(name="texte_question", type="string", length=255, nullable=false)
     */
    private $texteQuestion;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=255, nullable=false)
     */
    private $img;

    /**
     * @var \Reponse
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Reponse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_question", referencedColumnName="id_reponse")
     * })
     */
    private $idQuestion;

    /**
     * @return string
     */
    public function getTexteQuestion()
    {
        return $this->texteQuestion;
    }

    /**
     * @param string $texteQuestion
     */
    public function setTexteQuestion($texteQuestion)
    {
        $this->texteQuestion = $texteQuestion;
    }

    /**
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param string $img
     */
    public function setImg($img)
    {
        $this->img = $img;
    }

    /**
     * @return \Reponse
     */
    public function getIdQuestion()
    {
        return $this->idQuestion;
    }

    /**
     * @param \Reponse $idQuestion
     */
    public function setIdQuestion($idQuestion)
    {
        $this->idQuestion = $idQuestion;
    }


}

