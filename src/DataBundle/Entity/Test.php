<?php

namespace DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Test
 *
 * @ORM\Table(name="test")
 * @ORM\Entity
 */
class Test
{
    /**
     * @var integer
     *
     * @ORM\Column(name="niveau_test", type="integer", nullable=false)
     */
    private $niveauTest;

    /**
     * @var \Question
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Question")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_test", referencedColumnName="id_question")
     * })
     */
    private $idTest;

    /**
     * @return int
     */
    public function getNiveauTest()
    {
        return $this->niveauTest;
    }

    /**
     * @param int $niveauTest
     */
    public function setNiveauTest($niveauTest)
    {
        $this->niveauTest = $niveauTest;
    }

    /**
     * @return \Question
     */
    public function getIdTest()
    {
        return $this->idTest;
    }

    /**
     * @param \Question $idTest
     */
    public function setIdTest($idTest)
    {
        $this->idTest = $idTest;
    }


}

