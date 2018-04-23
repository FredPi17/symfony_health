<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * qualificatifSelles
 *
 * @ORM\Table(name="qualificatif_selles")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\qualificatifSellesRepository")
 */
class qualificatifSelles
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
     * @ORM\Column(name="glaireuse", type="boolean")
     */
    private $glaireuse;

    /**
     * @var bool
     *
     * @ORM\Column(name="odorante", type="boolean")
     */
    private $odorante;

    /**
     * @var bool
     *
     * @ORM\Column(name="sang", type="boolean")
     */
    private $sang;

    /**
     * @var bool
     *
     * @ORM\Column(name="résidus_alimentaires", type="boolean")
     */
    private $résidusAlimentaires;

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
     * Set glaireuse
     *
     * @param boolean $glaireuse
     *
     * @return qualificatifSelles
     */
    public function setGlaireuse($glaireuse)
    {
        $this->glaireuse = $glaireuse;

        return $this;
    }

    /**
     * Get glaireuse
     *
     * @return bool
     */
    public function getGlaireuse()
    {
        return $this->glaireuse;
    }

    /**
     * Set odorante
     *
     * @param boolean $odorante
     *
     * @return qualificatifSelles
     */
    public function setOdorante($odorante)
    {
        $this->odorante = $odorante;

        return $this;
    }

    /**
     * Get odorante
     *
     * @return bool
     */
    public function getOdorante()
    {
        return $this->odorante;
    }

    /**
     * Set sang
     *
     * @param boolean $sang
     *
     * @return qualificatifSelles
     */
    public function setSang($sang)
    {
        $this->sang = $sang;

        return $this;
    }

    /**
     * Get sang
     *
     * @return bool
     */
    public function getSang()
    {
        return $this->sang;
    }

    /**
     * Set résidusAlimentaires
     *
     * @param boolean $résidusAlimentaires
     *
     * @return qualificatifSelles
     */
    public function setRésidusAlimentaires($résidusAlimentaires)
    {
        $this->résidusAlimentaires = $résidusAlimentaires;

        return $this;
    }

    /**
     * Get résidusAlimentaires
     *
     * @return bool
     */
    public function getRésidusAlimentaires()
    {
        return $this->résidusAlimentaires;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return qualificatifSelles
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
     * @return qualificatifSelles
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

