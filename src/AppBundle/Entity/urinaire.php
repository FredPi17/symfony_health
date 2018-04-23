<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * urinaire
 *
 * @ORM\Table(name="urinaire")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\urinaireRepository")
 */
class urinaire
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
     * @ORM\Column(name="pollakiurie", type="boolean")
     */
    private $pollakiurie;

    /**
     * @var bool
     *
     * @ORM\Column(name="envie_impérieuse", type="boolean")
     */
    private $envieImpérieuse;

    /**
     * @var bool
     *
     * @ORM\Column(name="trouble", type="boolean")
     */
    private $trouble;

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
     * Set pollakiurie
     *
     * @param boolean $pollakiurie
     *
     * @return urinaire
     */
    public function setPollakiurie($pollakiurie)
    {
        $this->pollakiurie = $pollakiurie;

        return $this;
    }

    /**
     * Get pollakiurie
     *
     * @return bool
     */
    public function getPollakiurie()
    {
        return $this->pollakiurie;
    }

    /**
     * Set envieImpérieuse
     *
     * @param boolean $envieImpérieuse
     *
     * @return urinaire
     */
    public function setEnvieImpérieuse($envieImpérieuse)
    {
        $this->envieImpérieuse = $envieImpérieuse;

        return $this;
    }

    /**
     * Get envieImpérieuse
     *
     * @return bool
     */
    public function getEnvieImpérieuse()
    {
        return $this->envieImpérieuse;
    }

    /**
     * Set trouble
     *
     * @param boolean $trouble
     *
     * @return urinaire
     */
    public function setTrouble($trouble)
    {
        $this->trouble = $trouble;

        return $this;
    }

    /**
     * Get trouble
     *
     * @return bool
     */
    public function getTrouble()
    {
        return $this->trouble;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return urinaire
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
     * @return urinaire
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

