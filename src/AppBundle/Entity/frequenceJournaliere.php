<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * frequenceJournaliere
 *
 * @ORM\Table(name="frequence_journaliere")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\frequenceJournaliereRepository")
 */
class frequenceJournaliere
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="nombre_de_fois", type="integer")
     */
    private $nombreDeFois;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=255)
     */
    private $commentaire;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombreDeFois
     *
     * @param integer $nombreDeFois
     *
     * @return frequenceJournaliere
     */
    public function setNombreDeFois($nombreDeFois)
    {
        $this->nombreDeFois = $nombreDeFois;

        return $this;
    }

    /**
     * Get nombreDeFois
     *
     * @return int
     */
    public function getNombreDeFois()
    {
        return $this->nombreDeFois;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return frequenceJournaliere
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return frequenceJournaliere
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }
}

