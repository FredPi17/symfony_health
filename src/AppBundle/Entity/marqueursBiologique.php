<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * marqueursBiologique
 *
 * @ORM\Table(name="marqueurs_biologique")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\marqueursBiologiqueRepository")
 */
class marqueursBiologique
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
     * @var float
     *
     * @ORM\Column(name="créatinine", type="float")
     */
    private $creatinine;

    /**
     * @var float
     *
     * @ORM\Column(name="protéinine", type="float")
     */
    private $proteinine;

    /**
     * @var string
     *
     * @ORM\Column(name="ECBU", type="string", length=255)
     */
    private $eCBU;

    /**
     * @var string
     *
     * @ORM\Column(name="BU", type="string", length=255)
     */
    private $bU;


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
     * Set créatinine
     *
     * @param float $créatinine
     *
     * @return marqueursBiologique
     */
    public function setCreatinine($creatinine)
    {
        $this->creatinine = $creatinine;

        return $this;
    }

    /**
     * Get créatinine
     *
     * @return float
     */
    public function getCreatinine()
    {
        return $this->creatinine;
    }

    /**
     * Set protéinine
     *
     * @param float $protéinine
     *
     * @return marqueursBiologique
     */
    public function setProteinine($proteinine)
    {
        $this->proteinine = $proteinine;

        return $this;
    }

    /**
     * Get protéinine
     *
     * @return float
     */
    public function getProteinine()
    {
        return $this->proteinine;
    }

    /**
     * Set eCBU
     *
     * @param string $eCBU
     *
     * @return marqueursBiologique
     */
    public function setECBU($eCBU)
    {
        $this->eCBU = $eCBU;

        return $this;
    }

    /**
     * Get eCBU
     *
     * @return string
     */
    public function getECBU()
    {
        return $this->eCBU;
    }

    /**
     * Set bU
     *
     * @param string $bU
     *
     * @return marqueursBiologique
     */
    public function setBU($bU)
    {
        $this->bU = $bU;

        return $this;
    }

    /**
     * Get bU
     *
     * @return string
     */
    public function getBU()
    {
        return $this->bU;
    }
}

