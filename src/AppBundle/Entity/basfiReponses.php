<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * basfiReponses
 *
 * @ORM\Table(name="basfi_reponses")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\basfiReponsesRepository")
 */
class basfiReponses
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
     * @var int
     *
     * @ORM\Column(name="question_sept_rep", type="integer")
     */
    private $questionSeptRep;

    /**
     * @var int
     *
     * @ORM\Column(name="question_huit_rep", type="integer")
     */
    private $questionHuitRep;

    /**
     * @var int
     *
     * @ORM\Column(name="question_neuf_rep", type="integer")
     */
    private $questionNeufRep;

    /**
     * @var int
     *
     * @ORM\Column(name="question_dix_rep", type="integer")
     */
    private $questionDixRep;

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
     * @return basfiReponses
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
     * @return basfiReponses
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
     * @return basfiReponses
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
     * @return basfiReponses
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
     * @return basfiReponses
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
     * @return basfiReponses
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
     * Set questionSept�Rep
     *
     * @param integer $questionSept�Rep
     *
     * @return basfiReponses
     */
    public function setQuestionSept�Rep($questionSeptRep)
    {
        $this->questionSeptRep = $questionSeptRep;

        return $this;
    }

    /**
     * Get questionSept�Rep
     *
     * @return int
     */
    public function getQuestionSeptRep()
    {
        return $this->questionSeptRep;
    }

    /**
     * Set questionHuitRep
     *
     * @param integer $questionHuitRep
     *
     * @return basfiReponses
     */
    public function setQuestionHuitRep($questionHuitRep)
    {
        $this->questionHuitRep = $questionHuitRep;

        return $this;
    }

    /**
     * Get questionHuitRep
     *
     * @return int
     */
    public function getQuestionHuitRep()
    {
        return $this->questionHuitRep;
    }

    /**
     * Set questionNeufRep
     *
     * @param integer $questionNeufRep
     *
     * @return basfiReponses
     */
    public function setQuestionNeufRep($questionNeufRep)
    {
        $this->questionNeufRep = $questionNeufRep;

        return $this;
    }

    /**
     * Get questionNeufRep
     *
     * @return int
     */
    public function getQuestionNeufRep()
    {
        return $this->questionNeufRep;
    }

    /**
     * Set questionDixRep
     *
     * @param integer $questionDixRep
     *
     * @return basfiReponses
     */
    public function setQuestionDixRep($questionDixRep)
    {
        $this->questionDixRep = $questionDixRep;

        return $this;
    }

    /**
     * Get questionDixRep
     *
     * @return int
     */
    public function getQuestionDixRep()
    {
        return $this->questionDixRep;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return basfiReponses
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
     * Set questionSeptRep.
     *
     * @param int $questionSeptRep
     *
     * @return basfiReponses
     */
    public function setQuestionSeptRep($questionSeptRep)
    {
        $this->questionSeptRep = $questionSeptRep;

        return $this;
    }
}
