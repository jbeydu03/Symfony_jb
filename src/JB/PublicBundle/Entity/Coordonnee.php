<?php

namespace JB\PublicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coordonnee
 *
 * @ORM\Table(name="jb_coordonnee")
 * @ORM\Entity(repositoryClass="JB\PublicBundle\Repository\CoordonneeRepository")
 */
class Coordonnee
{
    /**
     * @ORM\OneToOne(targetEntity="JB\PublicBundle\Entity\Adresse", cascade={"persist"})
     */
    private $adresse;
    
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
     * @ORM\Column(name="telephone", type="integer")
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;


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
     * Set telephone
     *
     * @param integer $telephone
     *
     * @return Coordonnee
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return int
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Coordonnee
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set adresse
     *
     * @param \JB\PublicBundle\Entity\Adresse $adresse
     *
     * @return Coordonnee
     */
    public function setAdresse(\JB\PublicBundle\Entity\Adresse $adresse = null)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return \JB\PublicBundle\Entity\Adresse
     */
    public function getAdresse()
    {
        return $this->adresse;
    }
}
