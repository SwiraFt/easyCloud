<?php

namespace EC\easyCloudBundle\Entity;

/**
 * User
 */
class User
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
     * @var \Date
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
    public function getPseudo()
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
     */
    public function getPass()
    {
        return $this->pass;
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
}
