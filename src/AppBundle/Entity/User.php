<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table()
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        $this->media = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @var string
     *
     * @ORM\Column(name="facebook_id", type="string", nullable=true)
     */
    protected $facebook_id;

    /**
     * @var string
     *
     * @ORM\Column(name="google_id", type="string", nullable=true)
     */
    protected $google_id;

    /**
     * @var string
     *
     * @ORM\Column(name="twitter_id", type="string", nullable=true)
     */
    protected $twitter_id;


    /**
     * Set facebookId.
     *
     * @param string|null $facebookId
     *
     * @return User
     */
    public function setFacebookId($facebookId = null)
    {
        $this->facebook_id = $facebookId;

        return $this;
    }

    /**
     * Get facebookId.
     *
     * @return string|null
     */
    public function getFacebookId()
    {
        return $this->facebook_id;
    }

    /**
     * Set googleId.
     *
     * @param string|null $googleId
     *
     * @return User
     */
    public function setGoogleId($googleId = null)
    {
        $this->google_id = $googleId;

        return $this;
    }

    /**
     * Get googleId.
     *
     * @return string|null
     */
    public function getGoogleId()
    {
        return $this->google_id;
    }

    /**
     * Set twitterId.
     *
     * @param string|null $twitterId
     *
     * @return User
     */
    public function setTwitterId($twitterId = null)
    {
        $this->twitter_id = $twitterId;

        return $this;
    }

    /**
     * Get twitterId.
     *
     * @return string|null
     */
    public function getTwitterId()
    {
        return $this->twitter_id;
    }
}
