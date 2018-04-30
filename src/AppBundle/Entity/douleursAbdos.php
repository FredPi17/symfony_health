<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * douleursAbdos
 *
 * @ORM\Table(name="douleurs_abdos")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\douleursAbdosRepository")
 */
class douleursAbdos
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
     * @var string
     *
     * @ORM\Column(name="localisation", type="string", length=255)
     */
    private $localisation;

    /**
     * @var int
     *
     * @ORM\Column(name="eva", type="integer")
     */
    private $eva;

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
     * Set localisation
     *
     * @param string $localisation
     *
     * @return douleursAbdos
     */
    public function setLocalisation($localisation)
    {
        $this->localisation = $localisation;

        return $this;
    }

    /**
     * Get localisation
     *
     * @return string
     */
    public function getLocalisation()
    {
        return $this->localisation;
    }

    /**
     * Set eva
     *
     * @param integer $eva
     *
     * @return douleursAbdos
     */
    public function setEva($eva)
    {
        $this->eva = $eva;

        return $this;
    }

    /**
     * Get eva
     *
     * @return int
     */
    public function getEva()
    {
        return $this->eva;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return douleursAbdos
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
     * @return douleursAbdos
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
