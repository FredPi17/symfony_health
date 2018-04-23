<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * basdaiReponses
 *
 * @ORM\Table(name="basdai_reponses")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\basdaiReponsesRepository")
 */
class basdaiReponses
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
     * @ORM\Column(name="question_une_rep", type="integer")
     */
    private $questionUneRep;

    /**
     * @var int
     *
     * @ORM\Column(name="question_deux_rep", type="integer")
     */
    private $questionDeuxRep;

    /**
     * @var int
     *
     * @ORM\Column(name="question_trois_rep", type="integer")
     */
    private $questionTroisRep;

    /**
     * @var int
     *
     * @ORM\Column(name="question_quatre_rep", type="integer")
     */
    private $questionQuatreRep;

    /**
     * @var int
     *
     * @ORM\Column(name="question_cinq_rep", type="integer")
     */
    private $questionCinqRep;

    /**
     * @var int
     *
     * @ORM\Column(name="question_six_rep", type="integer")
     */
    private $questionSixRep;

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
     * Set questionUneRep
     *
     * @param integer $questionUneRep
     *
     * @return basdaiReponses
     */
    public function setQuestionUneRep($questionUneRep)
    {
        $this->questionUneRep = $questionUneRep;

        return $this;
    }

    /**
     * Get questionUneRep
     *
     * @return int
     */
    public function getQuestionUneRep()
    {
        return $this->questionUneRep;
    }

    /**
     * Set questionDeuxRep
     *
     * @param integer $questionDeuxRep
     *
     * @return basdaiReponses
     */
    public function setQuestionDeuxRep($questionDeuxRep)
    {
        $this->questionDeuxRep = $questionDeuxRep;

        return $this;
    }

    /**
     * Get questionDeuxRep
     *
     * @return int
     */
    public function getQuestionDeuxRep()
    {
        return $this->questionDeuxRep;
    }

    /**
     * Set questionTroisRep
     *
     * @param integer $questionTroisRep
     *
     * @return basdaiReponses
     */
    public function setQuestionTroisRep($questionTroisRep)
    {
        $this->questionTroisRep = $questionTroisRep;

        return $this;
    }

    /**
     * Get questionTroisRep
     *
     * @return int
     */
    public function getQuestionTroisRep()
    {
        return $this->questionTroisRep;
    }

    /**
     * Set questionQuatreRep
     *
     * @param integer $questionQuatreRep
     *
     * @return basdaiReponses
     */
    public function setQuestionQuatreRep($questionQuatreRep)
    {
        $this->questionQuatreRep = $questionQuatreRep;

        return $this;
    }

    /**
     * Get questionQuatreRep
     *
     * @return int
     */
    public function getQuestionQuatreRep()
    {
        return $this->questionQuatreRep;
    }

    /**
     * Set questionCinqRep
     *
     * @param integer $questionCinqRep
     *
     * @return basdaiReponses
     */
    public function setQuestionCinqRep($questionCinqRep)
    {
        $this->questionCinqRep = $questionCinqRep;

        return $this;
    }

    /**
     * Get questionCinqRep
     *
     * @return int
     */
    public function getQuestionCinqRep()
    {
        return $this->questionCinqRep;
    }

    /**
     * Set questionSixRep
     *
     * @param integer $questionSixRep
     *
     * @return basdaiReponses
     */
    public function setQuestionSixRep($questionSixRep)
    {
        $this->questionSixRep = $questionSixRep;

        return $this;
    }

    /**
     * Get questionSixRep
     *
     * @return int
     */
    public function getQuestionSixRep()
    {
        return $this->questionSixRep;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return basdaiReponses
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

