<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * couleursSelles
 *
 * @ORM\Table(name="couleurs_selles")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\couleursSellesRepository")
 */
class couleursSelles
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
     * @ORM\Column(name="marron", type="boolean")
     */
    private $marron;

    /**
     * @var bool
     *
     * @ORM\Column(name="vert", type="boolean")
     */
    private $vert;

    /**
     * @var bool
     *
     * @ORM\Column(name="jaune", type="boolean")
     */
    private $jaune;

    /**
     * @var bool
     *
     * @ORM\Column(name="noir", type="boolean")
     */
    private $noir;

    /**
     * @var bool
     *
     * @ORM\Column(name="blanc", type="boolean")
     */
    private $blanc;

    /**
     * @var bool
     *
     * @ORM\Column(name="rouge", type="boolean")
     */
    private $rouge;

    /**
     * @var bool
     *
     * @ORM\Column(name="orange", type="boolean")
     */
    private $orange;

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
     * Set marron
     *
     * @param boolean $marron
     *
     * @return couleursSelles
     */
    public function setMarron($marron)
    {
        $this->marron = $marron;

        return $this;
    }

    /**
     * Get marron
     *
     * @return bool
     */
    public function getMarron()
    {
        return $this->marron;
    }

    /**
     * Set vert
     *
     * @param boolean $vert
     *
     * @return couleursSelles
     */
    public function setVert($vert)
    {
        $this->vert = $vert;

        return $this;
    }

    /**
     * Get vert
     *
     * @return bool
     */
    public function getVert()
    {
        return $this->vert;
    }

    /**
     * Set jaune
     *
     * @param boolean $jaune
     *
     * @return couleursSelles
     */
    public function setJaune($jaune)
    {
        $this->jaune = $jaune;

        return $this;
    }

    /**
     * Get jaune
     *
     * @return bool
     */
    public function getJaune()
    {
        return $this->jaune;
    }

    /**
     * Set noir
     *
     * @param boolean $noir
     *
     * @return couleursSelles
     */
    public function setNoir($noir)
    {
        $this->noir = $noir;

        return $this;
    }

    /**
     * Get noir
     *
     * @return bool
     */
    public function getNoir()
    {
        return $this->noir;
    }

    /**
     * Set blanc
     *
     * @param boolean $blanc
     *
     * @return couleursSelles
     */
    public function setBlanc($blanc)
    {
        $this->blanc = $blanc;

        return $this;
    }

    /**
     * Get blanc
     *
     * @return bool
     */
    public function getBlanc()
    {
        return $this->blanc;
    }

    /**
     * Set rouge
     *
     * @param boolean $rouge
     *
     * @return couleursSelles
     */
    public function setRouge($rouge)
    {
        $this->rouge = $rouge;

        return $this;
    }

    /**
     * Get rouge
     *
     * @return bool
     */
    public function getRouge()
    {
        return $this->rouge;
    }

    /**
     * Set orang�e
     *
     * @param boolean $orang�e
     *
     * @return couleursSelles
     */
    public function setOrange($orange)
    {
        $this->orange = $orange;

        return $this;
    }

    /**
     * Get orang�e
     *
     * @return bool
     */
    public function getOrange()
    {
        return $this->orange;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return couleursSelles
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
     * @return couleursSelles
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
