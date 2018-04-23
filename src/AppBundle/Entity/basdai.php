<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * basdai
 *
 * @ORM\Table(name="basdai")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\basdaiRepository")
 */
class basdai
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
     * @return basdai
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
     * @return basdai
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
     * @return basdai
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
     * @return basdai
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
     * @return basdai
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
     * @return basdai
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

}

