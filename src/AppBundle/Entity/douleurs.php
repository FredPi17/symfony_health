<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * douleurs
 *
 * @ORM\Table(name="douleurs")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\douleursRepository")
 */
class douleurs
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
     * @ORM\Column(name="sacroilliaque", type="boolean")
     */
    private $sacroilliaque;

    /**
     * @var bool
     *
     * @ORM\Column(name="lombaires", type="boolean")
     */
    private $lombaires;

    /**
     * @var bool
     *
     * @ORM\Column(name="sciatologie_droite", type="boolean")
     */
    private $sciatologieDroite;

    /**
     * @var bool
     *
     * @ORM\Column(name="sciatologie_gauche", type="boolean")
     */
    private $sciatologieGauche;

    /**
     * @var bool
     *
     * @ORM\Column(name="dorsale", type="boolean")
     */
    private $dorsale;

    /**
     * @var bool
     *
     * @ORM\Column(name="intercostale", type="boolean")
     */
    private $intercostale;

    /**
     * @var bool
     *
     * @ORM\Column(name="cervicale", type="boolean")
     */
    private $cervicale;

    /**
     * @var bool
     *
     * @ORM\Column(name="epaules", type="boolean")
     */
    private $epaules;

    /**
     * @var bool
     *
     * @ORM\Column(name="poignets", type="boolean")
     */
    private $poignets;

    /**
     * @var bool
     *
     * @ORM\Column(name="chevilles", type="boolean")
     */
    private $chevilles;

    /**
     * @var bool
     *
     * @ORM\Column(name="genoux", type="boolean")
     */
    private $genoux;

    /**
     * @var bool
     *
     * @ORM\Column(name="hanches", type="boolean")
     */
    private $hanches;

    /**
     * @var bool
     *
     * @ORM\Column(name="doigts", type="boolean")
     */
    private $doigts;

    /**
     * @var bool
     *
     * @ORM\Column(name="orteilles", type="boolean")
     */
    private $orteilles;

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
     * Set sacroilliaque
     *
     * @param boolean $sacroilliaque
     *
     * @return douleurs
     */
    public function setSacroilliaque($sacroilliaque)
    {
        $this->sacroilliaque = $sacroilliaque;

        return $this;
    }

    /**
     * Get sacroilliaque
     *
     * @return bool
     */
    public function getSacroilliaque()
    {
        return $this->sacroilliaque;
    }

    /**
     * Set lombaires
     *
     * @param boolean $lombaires
     *
     * @return douleurs
     */
    public function setLombaires($lombaires)
    {
        $this->lombaires = $lombaires;

        return $this;
    }

    /**
     * Get lombaires
     *
     * @return bool
     */
    public function getLombaires()
    {
        return $this->lombaires;
    }

    /**
     * Set sciatologieDroite
     *
     * @param boolean $sciatologieDroite
     *
     * @return douleurs
     */
    public function setSciatologieDroite($sciatologieDroite)
    {
        $this->sciatologieDroite = $sciatologieDroite;

        return $this;
    }

    /**
     * Get sciatologieDroite
     *
     * @return bool
     */
    public function getSciatologieDroite()
    {
        return $this->sciatologieDroite;
    }

    /**
     * Set sciatologieGauche
     *
     * @param boolean $sciatologieGauche
     *
     * @return douleurs
     */
    public function setSciatologieGauche($sciatologieGauche)
    {
        $this->sciatologieGauche = $sciatologieGauche;

        return $this;
    }

    /**
     * Get sciatologieGauche
     *
     * @return bool
     */
    public function getSciatologieGauche()
    {
        return $this->sciatologieGauche;
    }

    /**
     * Set dorsale
     *
     * @param boolean $dorsale
     *
     * @return douleurs
     */
    public function setDorsale($dorsale)
    {
        $this->dorsale = $dorsale;

        return $this;
    }

    /**
     * Get dorsale
     *
     * @return bool
     */
    public function getDorsale()
    {
        return $this->dorsale;
    }

    /**
     * Set intercostale
     *
     * @param boolean $intercostale
     *
     * @return douleurs
     */
    public function setIntercostale($intercostale)
    {
        $this->intercostale = $intercostale;

        return $this;
    }

    /**
     * Get intercostale
     *
     * @return bool
     */
    public function getIntercostale()
    {
        return $this->intercostale;
    }

    /**
     * Set cervicale
     *
     * @param boolean $cervicale
     *
     * @return douleurs
     */
    public function setCervicale($cervicale)
    {
        $this->cervicale = $cervicale;

        return $this;
    }

    /**
     * Get cervicale
     *
     * @return bool
     */
    public function getCervicale()
    {
        return $this->cervicale;
    }

    /**
     * Set epaules
     *
     * @param boolean $epaules
     *
     * @return douleurs
     */
    public function setEpaules($epaules)
    {
        $this->epaules = $epaules;

        return $this;
    }

    /**
     * Get epaules
     *
     * @return bool
     */
    public function getEpaules()
    {
        return $this->epaules;
    }

    /**
     * Set poignets
     *
     * @param boolean $poignets
     *
     * @return douleurs
     */
    public function setPoignets($poignets)
    {
        $this->poignets = $poignets;

        return $this;
    }

    /**
     * Get poignets
     *
     * @return bool
     */
    public function getPoignets()
    {
        return $this->poignets;
    }

    /**
     * Set chevilles
     *
     * @param boolean $chevilles
     *
     * @return douleurs
     */
    public function setChevilles($chevilles)
    {
        $this->chevilles = $chevilles;

        return $this;
    }

    /**
     * Get chevilles
     *
     * @return bool
     */
    public function getChevilles()
    {
        return $this->chevilles;
    }

    /**
     * Set genoux
     *
     * @param boolean $genoux
     *
     * @return douleurs
     */
    public function setGenoux($genoux)
    {
        $this->genoux = $genoux;

        return $this;
    }

    /**
     * Get genoux
     *
     * @return bool
     */
    public function getGenoux()
    {
        return $this->genoux;
    }

    /**
     * Set hanches
     *
     * @param boolean $hanches
     *
     * @return douleurs
     */
    public function setHanches($hanches)
    {
        $this->hanches = $hanches;

        return $this;
    }

    /**
     * Get hanches
     *
     * @return bool
     */
    public function getHanches()
    {
        return $this->hanches;
    }

    /**
     * Set doigts
     *
     * @param boolean $doigts
     *
     * @return douleurs
     */
    public function setDoigts($doigts)
    {
        $this->doigts = $doigts;

        return $this;
    }

    /**
     * Get doigts
     *
     * @return bool
     */
    public function getDoigts()
    {
        return $this->doigts;
    }

    /**
     * Set orteilles
     *
     * @param boolean $orteilles
     *
     * @return douleurs
     */
    public function setOrteilles($orteilles)
    {
        $this->orteilles = $orteilles;

        return $this;
    }

    /**
     * Get orteilles
     *
     * @return bool
     */
    public function getOrteilles()
    {
        return $this->orteilles;
    }

    /**
     * Set eva
     *
     * @param integer $eva
     *
     * @return douleurs
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
     * @return douleurs
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
     * @return douleurs
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
