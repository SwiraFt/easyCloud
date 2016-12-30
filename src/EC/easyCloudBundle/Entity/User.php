<?php

namespace EC\easyCloudBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;
/**
 * User
 */
class User implements UserInterface, \Serializable
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $pseudo;

    /**
     * @var string
     */
    private $pass;

    /**
     * @var string
     */
    private $mail;

    /**
     * @var \DateTime
     */
    private $derniereCo;


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
     * Set pseudo
     *
     * @param string $pseudo
     *
     * @return User
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->pseudo;
    }

    /**
     * Set pass
     *
     * @param string $pass
     *
     * @return User
     */
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * Get pass
     *
     * @return string
     *
  *  public function getPass()
  *  {
  *      return $this->pass;
  *  }
    */

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return User
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set derniereCo
     *
     * @param \DateTime $derniereCo
     *
     * @return User
     */
    public function setDerniereCo($derniereCo)
    {
        $this->derniereCo = $derniereCo;

        return $this;
    }

    /**
     * Get derniereCo
     *
     * @return \DateTime
     */
    public function getDerniereCo()
    {
        return $this->derniereCo;
    }

    public function getPassword()
    {
        return $this->pass;
    }

    public function getSalt()
   {
       // you *may* need a real salt depending on your encoder
       // see section on salt below
       return null;
   }

    public function getRoles()
    {
        return array('ROLE_USER');
    }

    public function eraseCredentials()
    {
    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->pseudo,
            $this->pass,
            // see section on salt below
            // $this->salt,
        ));
    }
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->pseudo,
            $this->pass,
            // see section on salt below
            // $this->salt
        ) = unserialize($serialized);
    }

}
