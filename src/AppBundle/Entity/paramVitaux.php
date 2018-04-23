<?php

namespace AppBundle\Entity\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * paramVitaux
 *
 * @ORM\Table(name="entityparam_vitaux")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Entity\paramVitauxRepository")
 */
class paramVitaux
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
     * @ORM\Column(name="pouls", type="integer", nullable=true)
     */
    private $pouls;

    /**
     * @var float
     *
     * @ORM\Column(name="systole", type="float", nullable=true)
     */
    private $systole;

    /**
     * @var float
     *
     * @ORM\Column(name="diastole", type="float", nullable=true)
     */
    private $diastole;

    /**
     * @var float
     *
     * @ORM\Column(name="temperature", type="float", nullable=true)
     */
    private $temperature;

    /**
     * @var int
     *
     * @ORM\Column(name="saturation", type="integer", nullable=true)
     */
    private $saturation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text", nullable=true)
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
     * Set pouls
     *
     * @param integer $pouls
     *
     * @return paramVitaux
     */
    public function setPouls($pouls)
    {
        $this->pouls = $pouls;

        return $this;
    }

    /**
     * Get pouls
     *
     * @return int
     */
    public function getPouls()
    {
        return $this->pouls;
    }

    /**
     * Set systole
     *
     * @param float $systole
     *
     * @return paramVitaux
     */
    public function setSystole($systole)
    {
        $this->systole = $systole;

        return $this;
    }

    /**
     * Get systole
     *
     * @return float
     */
    public function getSystole()
    {
        return $this->systole;
    }

    /**
     * Set diastole
     *
     * @param float $diastole
     *
     * @return paramVitaux
     */
    public function setDiastole($diastole)
    {
        $this->diastole = $diastole;

        return $this;
    }

    /**
     * Get diastole
     *
     * @return float
     */
    public function getDiastole()
    {
        return $this->diastole;
    }

    /**
     * Set temperature
     *
     * @param float $temperature
     *
     * @return paramVitaux
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;

        return $this;
    }

    /**
     * Get temperature
     *
     * @return float
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Set saturation
     *
     * @param integer $saturation
     *
     * @return paramVitaux
     */
    public function setSaturation($saturation)
    {
        $this->saturation = $saturation;

        return $this;
    }

    /**
     * Get saturation
     *
     * @return int
     */
    public function getSaturation()
    {
        return $this->saturation;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return paramVitaux
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
     * @return paramVitaux
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

