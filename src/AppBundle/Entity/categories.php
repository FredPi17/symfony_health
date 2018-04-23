<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * categories
 *
 * @ORM\Table(name="categories")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\categoriesRepository")
 */
class categories
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
     * @ORM\Column(name="gynecologie", type="string", length=255)
     */
    private $gynecologie;

    /**
     * @var string
     *
     * @ORM\Column(name="hurologie_nephrologie", type="string", length=255)
     */
    private $hurologieNephrologie;

    /**
     * @var string
     *
     * @ORM\Column(name="digestif", type="string", length=255)
     */
    private $digestif;

    /**
     * @var string
     *
     * @ORM\Column(name="osteo_rhumato", type="string", length=255)
     */
    private $osteoRhumato;

    /**
     * @var string
     *
     * @ORM\Column(name="neurologie", type="string", length=255)
     */
    private $neurologie;

    /**
     * @var string
     *
     * @ORM\Column(name="cardiologie", type="string", length=255)
     */
    private $cardiologie;

    /**
     * @var string
     *
     * @ORM\Column(name="pneumologie", type="string", length=255)
     */
    private $pneumologie;

    /**
     * @var string
     *
     * @ORM\Column(name="endocrinologie", type="string", length=255)
     */
    private $endocrinologie;

    /**
     * @var string
     *
     * @ORM\Column(name="dermatologie", type="string", length=255)
     */
    private $dermatologie;

    /**
     * @var string
     *
     * @ORM\Column(name="ophtalmologie", type="string", length=255)
     */
    private $ophtalmologie;


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
     * Set gynecologie
     *
     * @param string $gynecologie
     *
     * @return categories
     */
    public function setGynecologie($gynecologie)
    {
        $this->gynecologie = $gynecologie;

        return $this;
    }

    /**
     * Get gynecologie
     *
     * @return string
     */
    public function getGynecologie()
    {
        return $this->gynecologie;
    }

    /**
     * Set hurologieNephrologie
     *
     * @param string $hurologieNephrologie
     *
     * @return categories
     */
    public function setHurologieNephrologie($hurologieNephrologie)
    {
        $this->hurologieNephrologie = $hurologieNephrologie;

        return $this;
    }

    /**
     * Get hurologieNephrologie
     *
     * @return string
     */
    public function getHurologieNephrologie()
    {
        return $this->hurologieNephrologie;
    }

    /**
     * Set digestif
     *
     * @param string $digestif
     *
     * @return categories
     */
    public function setDigestif($digestif)
    {
        $this->digestif = $digestif;

        return $this;
    }

    /**
     * Get digestif
     *
     * @return string
     */
    public function getDigestif()
    {
        return $this->digestif;
    }

    /**
     * Set osteoRhumato
     *
     * @param string $osteoRhumato
     *
     * @return categories
     */
    public function setOsteoRhumato($osteoRhumato)
    {
        $this->osteoRhumato = $osteoRhumato;

        return $this;
    }

    /**
     * Get osteoRhumato
     *
     * @return string
     */
    public function getOsteoRhumato()
    {
        return $this->osteoRhumato;
    }

    /**
     * Set neurologie
     *
     * @param string $neurologie
     *
     * @return categories
     */
    public function setNeurologie($neurologie)
    {
        $this->neurologie = $neurologie;

        return $this;
    }

    /**
     * Get neurologie
     *
     * @return string
     */
    public function getNeurologie()
    {
        return $this->neurologie;
    }

    /**
     * Set cardiologie
     *
     * @param string $cardiologie
     *
     * @return categories
     */
    public function setCardiologie($cardiologie)
    {
        $this->cardiologie = $cardiologie;

        return $this;
    }

    /**
     * Get cardiologie
     *
     * @return string
     */
    public function getCardiologie()
    {
        return $this->cardiologie;
    }

    /**
     * Set pneumologie
     *
     * @param string $pneumologie
     *
     * @return categories
     */
    public function setPneumologie($pneumologie)
    {
        $this->pneumologie = $pneumologie;

        return $this;
    }

    /**
     * Get pneumologie
     *
     * @return string
     */
    public function getPneumologie()
    {
        return $this->pneumologie;
    }

    /**
     * Set endocrinologie
     *
     * @param string $endocrinologie
     *
     * @return categories
     */
    public function setEndocrinologie($endocrinologie)
    {
        $this->endocrinologie = $endocrinologie;

        return $this;
    }

    /**
     * Get endocrinologie
     *
     * @return string
     */
    public function getEndocrinologie()
    {
        return $this->endocrinologie;
    }

    /**
     * Set dermatologie
     *
     * @param string $dermatologie
     *
     * @return categories
     */
    public function setDermatologie($dermatologie)
    {
        $this->dermatologie = $dermatologie;

        return $this;
    }

    /**
     * Get dermatologie
     *
     * @return string
     */
    public function getDermatologie()
    {
        return $this->dermatologie;
    }

    /**
     * Set ophtalmologie
     *
     * @param string $ophtalmologie
     *
     * @return categories
     */
    public function setOphtalmologie($ophtalmologie)
    {
        $this->ophtalmologie = $ophtalmologie;

        return $this;
    }

    /**
     * Get ophtalmologie
     *
     * @return string
     */
    public function getOphtalmologie()
    {
        return $this->ophtalmologie;
    }
}

