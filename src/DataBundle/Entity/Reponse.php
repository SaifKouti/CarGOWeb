<?php

namespace DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 *
 * @ORM\Table(name="reponse")
 * @ORM\Entity
 */
class Reponse
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_reponse", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReponse;

    /**
     * @var string
     *
     * @ORM\Column(name="alt1", type="string", length=255, nullable=false)
     */
    private $alt1;

    /**
     * @var string
     *
     * @ORM\Column(name="alt2", type="string", length=255, nullable=false)
     */
    private $alt2;

    /**
     * @var string
     *
     * @ORM\Column(name="alt3", type="string", length=90, nullable=false)
     */
    private $alt3;

    /**
     * @var string
     *
     * @ORM\Column(name="rep_correcte", type="string", length=50, nullable=false)
     */
    private $repCorrecte;

    /**
     * @return int
     */
    public function getIdReponse()
    {
        return $this->idReponse;
    }

    /**
     * @param int $idReponse
     */
    public function setIdReponse($idReponse)
    {
        $this->idReponse = $idReponse;
    }

    /**
     * @return string
     */
    public function getAlt1()
    {
        return $this->alt1;
    }

    /**
     * @param string $alt1
     */
    public function setAlt1($alt1)
    {
        $this->alt1 = $alt1;
    }

    /**
     * @return string
     */
    public function getAlt2()
    {
        return $this->alt2;
    }

    /**
     * @param string $alt2
     */
    public function setAlt2($alt2)
    {
        $this->alt2 = $alt2;
    }

    /**
     * @return string
     */
    public function getAlt3()
    {
        return $this->alt3;
    }

    /**
     * @param string $alt3
     */
    public function setAlt3($alt3)
    {
        $this->alt3 = $alt3;
    }

    /**
     * @return string
     */
    public function getRepCorrecte()
    {
        return $this->repCorrecte;
    }

    /**
     * @param string $repCorrecte
     */
    public function setRepCorrecte($repCorrecte)
    {
        $this->repCorrecte = $repCorrecte;
    }


}

