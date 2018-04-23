<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * basfi
 *
 * @ORM\Table(name="basfi")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\basfiRepository")
 */
class basfi
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
     * @ORM\Column(name="question_une", type="string", length=255)
     */
    private $questionUne;

    /**
     * @var string
     *
     * @ORM\Column(name="question_deux", type="string", length=255)
     */
    private $questionDeux;

    /**
     * @var string
     *
     * @ORM\Column(name="question_trois", type="string", length=255)
     */
    private $questionTrois;

    /**
     * @var string
     *
     * @ORM\Column(name="question_quatre", type="string", length=255)
     */
    private $questionQuatre;

    /**
     * @var string
     *
     * @ORM\Column(name="question_cinq", type="string", length=255)
     */
    private $questionCinq;

    /**
     * @var string
     *
     * @ORM\Column(name="question_six", type="string", length=255)
     */
    private $questionSix;

    /**
     * @var string
     *
     * @ORM\Column(name="question_sept", type="string", length=255)
     */
    private $questionSept;

    /**
     * @var string
     *
     * @ORM\Column(name="question_huit", type="string", length=255)
     */
    private $questionHuit;

    /**
     * @var string
     *
     * @ORM\Column(name="question_neuf", type="string", length=255)
     */
    private $questionNeuf;

    /**
     * @var string
     *
     * @ORM\Column(name="question_dix", type="string", length=255)
     */
    private $questionDix;


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
     * Set questionUne
     *
     * @param string $questionUne
     *
     * @return basfi
     */
    public function setQuestionUne($questionUne)
    {
        $this->questionUne = $questionUne;

        return $this;
    }

    /**
     * Get questionUne
     *
     * @return string
     */
    public function getQuestionUne()
    {
        return $this->questionUne;
    }

    /**
     * Set questionDeux
     *
     * @param string $questionDeux
     *
     * @return basfi
     */
    public function setQuestionDeux($questionDeux)
    {
        $this->questionDeux = $questionDeux;

        return $this;
    }

    /**
     * Get questionDeux
     *
     * @return string
     */
    public function getQuestionDeux()
    {
        return $this->questionDeux;
    }

    /**
     * Set questionTrois
     *
     * @param string $questionTrois
     *
     * @return basfi
     */
    public function setQuestionTrois($questionTrois)
    {
        $this->questionTrois = $questionTrois;

        return $this;
    }

    /**
     * Get questionTrois
     *
     * @return string
     */
    public function getQuestionTrois()
    {
        return $this->questionTrois;
    }

    /**
     * Set questionQuatre
     *
     * @param string $questionQuatre
     *
     * @return basfi
     */
    public function setQuestionQuatre($questionQuatre)
    {
        $this->questionQuatre = $questionQuatre;

        return $this;
    }

    /**
     * Get questionQuatre
     *
     * @return string
     */
    public function getQuestionQuatre()
    {
        return $this->questionQuatre;
    }

    /**
     * Set questionCinq
     *
     * @param string $questionCinq
     *
     * @return basfi
     */
    public function setQuestionCinq($questionCinq)
    {
        $this->questionCinq = $questionCinq;

        return $this;
    }

    /**
     * Get questionCinq
     *
     * @return string
     */
    public function getQuestionCinq()
    {
        return $this->questionCinq;
    }

    /**
     * Set questionSix
     *
     * @param string $questionSix
     *
     * @return basfi
     */
    public function setQuestionSix($questionSix)
    {
        $this->questionSix = $questionSix;

        return $this;
    }

    /**
     * Get questionSix
     *
     * @return string
     */
    public function getQuestionSix()
    {
        return $this->questionSix;
    }

    /**
     * Set questionSept
     *
     * @param string $questionSept
     *
     * @return basfi
     */
    public function setQuestionSept($questionSept)
    {
        $this->questionSept = $questionSept;

        return $this;
    }

    /**
     * Get questionSept
     *
     * @return string
     */
    public function getQuestionSept()
    {
        return $this->questionSept;
    }

    /**
     * Set questionHuit
     *
     * @param string $questionHuit
     *
     * @return basfi
     */
    public function setQuestionHuit($questionHuit)
    {
        $this->questionHuit = $questionHuit;

        return $this;
    }

    /**
     * Get questionHuit
     *
     * @return string
     */
    public function getQuestionHuit()
    {
        return $this->questionHuit;
    }

    /**
     * Set questionNeuf
     *
     * @param string $questionNeuf
     *
     * @return basfi
     */
    public function setQuestionNeuf($questionNeuf)
    {
        $this->questionNeuf = $questionNeuf;

        return $this;
    }

    /**
     * Get questionNeuf
     *
     * @return string
     */
    public function getQuestionNeuf()
    {
        return $this->questionNeuf;
    }

    /**
     * Set questionDix
     *
     * @param string $questionDix
     *
     * @return basfi
     */
    public function setQuestionDix($questionDix)
    {
        $this->questionDix = $questionDix;

        return $this;
    }

    /**
     * Get questionDix
     *
     * @return string
     */
    public function getQuestionDix()
    {
        return $this->questionDix;
    }
}

