<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * douleursUrinaire
 *
 * @ORM\Table(name="douleurs_urinaire")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\douleursUrinaireRepository")
 */
class douleursUrinaire
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
     * @ORM\Column(name="lombaires", type="boolean")
     */
    private $lombaires;

    /**
     * @var bool
     *
     * @ORM\Column(name="pelvienne", type="boolean")
     */
    private $pelvienne;

    /**
     * @var bool
     *
     * @ORM\Column(name="brulure_mictionnelle", type="boolean")
     */
    private $brulureMictionnelle;

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
     * Set lombaires
     *
     * @param boolean $lombaires
     *
     * @return douleursUrinaire
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
     * Set pelvienne
     *
     * @param boolean $pelvienne
     *
     * @return douleursUrinaire
     */
    public function setPelvienne($pelvienne)
    {
        $this->pelvienne = $pelvienne;

        return $this;
    }

    /**
     * Get pelvienne
     *
     * @return bool
     */
    public function getPelvienne()
    {
        return $this->pelvienne;
    }

    /**
     * Set brulureMictionnelle
     *
     * @param boolean $brulureMictionnelle
     *
     * @return douleursUrinaire
     */
    public function setBrulureMictionnelle($brulureMictionnelle)
    {
        $this->brulureMictionnelle = $brulureMictionnelle;

        return $this;
    }

    /**
     * Get brulureMictionnelle
     *
     * @return bool
     */
    public function getBrulureMictionnelle()
    {
        return $this->brulureMictionnelle;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return douleursUrinaire
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
     * @return douleursUrinaire
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
