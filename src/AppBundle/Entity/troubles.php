<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * troubles
 *
 * @ORM\Table(name="troubles")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\troublesRepository")
 */
class troubles
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
     * @ORM\Column(name="fausse_route", type="boolean")
     */
    private $fausseRoute;

    /**
     * @var bool
     *
     * @ORM\Column(name="rgo", type="boolean")
     */
    private $rgo;

    /**
     * @var bool
     *
     * @ORM\Column(name="perte_appetit", type="boolean")
     */
    private $perteAppetit;

    /**
     * @var bool
     *
     * @ORM\Column(name="appetit_augmenté", type="boolean")
     */
    private $appetitAugmenté;

    /**
     * @var bool
     *
     * @ORM\Column(name="sensation_faim_hypo", type="boolean")
     */
    private $sensationFaimHypo;

    /**
     * @var bool
     *
     * @ORM\Column(name="nausée", type="boolean")
     */
    private $nausée;

    /**
     * @var bool
     *
     * @ORM\Column(name="vomissement", type="boolean")
     */
    private $vomissement;

    /**
     * @var bool
     *
     * @ORM\Column(name="ballonnement", type="boolean")
     */
    private $ballonnement;

    /**
     * @var bool
     *
     * @ORM\Column(name="gaz", type="boolean")
     */
    private $gaz;

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
     * Set fausseRoute
     *
     * @param boolean $fausseRoute
     *
     * @return troubles
     */
    public function setFausseRoute($fausseRoute)
    {
        $this->fausseRoute = $fausseRoute;

        return $this;
    }

    /**
     * Get fausseRoute
     *
     * @return bool
     */
    public function getFausseRoute()
    {
        return $this->fausseRoute;
    }

    /**
     * Set rgo
     *
     * @param boolean $rgo
     *
     * @return troubles
     */
    public function setRgo($rgo)
    {
        $this->rgo = $rgo;

        return $this;
    }

    /**
     * Get rgo
     *
     * @return bool
     */
    public function getRgo()
    {
        return $this->rgo;
    }

    /**
     * Set perteAppetit
     *
     * @param boolean $perteAppetit
     *
     * @return troubles
     */
    public function setPerteAppetit($perteAppetit)
    {
        $this->perteAppetit = $perteAppetit;

        return $this;
    }

    /**
     * Get perteAppetit
     *
     * @return bool
     */
    public function getPerteAppetit()
    {
        return $this->perteAppetit;
    }

    /**
     * Set appetitAugmenté
     *
     * @param boolean $appetitAugmenté
     *
     * @return troubles
     */
    public function setAppetitAugmenté($appetitAugmenté)
    {
        $this->appetitAugmenté = $appetitAugmenté;

        return $this;
    }

    /**
     * Get appetitAugmenté
     *
     * @return bool
     */
    public function getAppetitAugmenté()
    {
        return $this->appetitAugmenté;
    }

    /**
     * Set sensationFaimHypo
     *
     * @param boolean $sensationFaimHypo
     *
     * @return troubles
     */
    public function setSensationFaimHypo($sensationFaimHypo)
    {
        $this->sensationFaimHypo = $sensationFaimHypo;

        return $this;
    }

    /**
     * Get sensationFaimHypo
     *
     * @return bool
     */
    public function getSensationFaimHypo()
    {
        return $this->sensationFaimHypo;
    }

    /**
     * Set nausée
     *
     * @param boolean $nausée
     *
     * @return troubles
     */
    public function setNausée($nausée)
    {
        $this->nausée = $nausée;

        return $this;
    }

    /**
     * Get nausée
     *
     * @return bool
     */
    public function getNausée()
    {
        return $this->nausée;
    }

    /**
     * Set vomissement
     *
     * @param boolean $vomissement
     *
     * @return troubles
     */
    public function setVomissement($vomissement)
    {
        $this->vomissement = $vomissement;

        return $this;
    }

    /**
     * Get vomissement
     *
     * @return bool
     */
    public function getVomissement()
    {
        return $this->vomissement;
    }

    /**
     * Set ballonnement
     *
     * @param boolean $ballonnement
     *
     * @return troubles
     */
    public function setBallonnement($ballonnement)
    {
        $this->ballonnement = $ballonnement;

        return $this;
    }

    /**
     * Get ballonnement
     *
     * @return bool
     */
    public function getBallonnement()
    {
        return $this->ballonnement;
    }

    /**
     * Set gaz
     *
     * @param boolean $gaz
     *
     * @return troubles
     */
    public function setGaz($gaz)
    {
        $this->gaz = $gaz;

        return $this;
    }

    /**
     * Get gaz
     *
     * @return bool
     */
    public function getGaz()
    {
        return $this->gaz;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return troubles
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
     * @return troubles
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

