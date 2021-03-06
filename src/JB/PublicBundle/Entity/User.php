<?php

namespace JB\PublicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * User
 *
 * @ORM\Table(name="jb_user")
 * @ORM\Entity(repositoryClass="JB\PublicBundle\Repository\UserRepository")
 */
class User
{
    /**
     * @ORM\OneToOne(targetEntity="JB\PublicBundle\Entity\Coordonnee", cascade={"persist"})
    */
    private $coordonnee;
    
    /**
     * @ORM\ManyToOne(targetEntity="JB\PublicBundle\Entity\Civilite", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $civilite;
    
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
     * @ORM\Column(name="nom", type="string", length=255)
     * @Assert\Length(min=2, minMessage="Le nom doit faire au moins 2 caractères.")
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     * @Assert\Length(min=2, minMessage="Le prénom doit faire au moins 2 caractères.")
     */
    private $prenom;

    
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
     * Set nom
     *
     * @param string $nom
     *
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }



    /**
     * Set coordonnee
     *
     * @param \JB\PublicBundle\Entity\Coordonnee $coordonnee
     *
     * @return User
     */
    public function setCoordonnee(\JB\PublicBundle\Entity\Coordonnee $coordonnee = null)
    {
        $this->coordonnee = $coordonnee;

        return $this;
    }

    /**
     * Get coordonnee
     *
     * @return \JB\PublicBundle\Entity\Coordonnee
     */
    public function getCoordonnee()
    {
        return $this->coordonnee;
    }

    /**
     * Set civilite
     *
     * @param \JB\PublicBundle\Entity\Civilite $civilite
     *
     * @return User
     */
    public function setCivilite(\JB\PublicBundle\Entity\Civilite $civilite)
    {
        $this->civilite = $civilite;

        return $this;
    }

    /**
     * Get civilite
     *
     * @return \JB\PublicBundle\Entity\Civilite
     */
    public function getCivilite()
    {
        return $this->civilite;
    }
}
