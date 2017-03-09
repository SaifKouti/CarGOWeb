<?php

namespace DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Examen
 *
 * @ORM\Table(name="examen")
 * @ORM\Entity
 */
class Examen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_examen", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idExamen;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_examen", type="date", nullable=false)
     */
    private $dateExamen;

    /**
     * @return int
     */
    public function getIdExamen()
    {
        return $this->idExamen;
    }

    /**
     * @param int $idExamen
     */
    public function setIdExamen($idExamen)
    {
        $this->idExamen = $idExamen;
    }

    /**
     * @return \DateTime
     */
    public function getDateExamen()
    {
        return $this->dateExamen;
    }

    /**
     * @param \DateTime $dateExamen
     */
    public function setDateExamen($dateExamen)
    {
        $this->dateExamen = $dateExamen;
    }


}

