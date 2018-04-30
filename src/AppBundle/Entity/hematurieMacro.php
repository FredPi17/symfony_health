<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * hematurieMacro
 *
 * @ORM\Table(name="hematurie_macro")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\hematurieMacroRepository")
 */
class hematurieMacro
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
     * @var bool
     *
     * @ORM\Column(name="spotting", type="boolean")
     */
    private $spotting;

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
     * Set spotting
     *
     * @param boolean $spotting
     *
     * @return hematurieMacro
     */
    public function setSpotting($spotting)
    {
        $this->spotting = $spotting;

        return $this;
    }

    /**
     * Get spotting
     *
     * @return bool
     */
    public function getSpotting()
    {
        return $this->spotting;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return hematurieMacro
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
     * @return hematurieMacro
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
