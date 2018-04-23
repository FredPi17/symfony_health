<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * hematurieMicro
 *
 * @ORM\Table(name="hematurie_micro")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\hematurieMicroRepository")
 */
class hematurieMicro
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
     * @ORM\Column(name="confirmé_BU", type="boolean")
     */
    private $confirméBU;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire_BU", type="string", length=255)
     */
    private $commentaireBU;

    /**
     * @var bool
     *
     * @ORM\Column(name="confirmé_ECBU", type="boolean")
     */
    private $confirméECBU;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire_ECBU", type="string", length=255)
     */
    private $commentaireECBU;

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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set confirméBU
     *
     * @param boolean $confirméBU
     *
     * @return hematurieMicro
     */
    public function setConfirméBU($confirméBU)
    {
        $this->confirméBU = $confirméBU;

        return $this;
    }

    /**
     * Get confirméBU
     *
     * @return bool
     */
    public function getConfirméBU()
    {
        return $this->confirméBU;
    }

    /**
     * Set commentaireBU
     *
     * @param string $commentaireBU
     *
     * @return hematurieMicro
     */
    public function setCommentaireBU($commentaireBU)
    {
        $this->commentaireBU = $commentaireBU;

        return $this;
    }

    /**
     * Get commentaireBU
     *
     * @return string
     */
    public function getCommentaireBU()
    {
        return $this->commentaireBU;
    }

    /**
     * Set confirméECBU
     *
     * @param boolean $confirméECBU
     *
     * @return hematurieMicro
     */
    public function setConfirméECBU($confirméECBU)
    {
        $this->confirméECBU = $confirméECBU;

        return $this;
    }

    /**
     * Get confirméECBU
     *
     * @return bool
     */
    public function getConfirméECBU()
    {
        return $this->confirméECBU;
    }

    /**
     * Set commentaireECBU
     *
     * @param string $commentaireECBU
     *
     * @return hematurieMicro
     */
    public function setCommentaireECBU($commentaireECBU)
    {
        $this->commentaireECBU = $commentaireECBU;

        return $this;
    }

    /**
     * Get commentaireECBU
     *
     * @return string
     */
    public function getCommentaireECBU()
    {
        return $this->commentaireECBU;
    }

    /**
     * Set spotting
     *
     * @param boolean $spotting
     *
     * @return hematurieMicro
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
     * @return hematurieMicro
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
}

