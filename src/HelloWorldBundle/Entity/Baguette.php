<?php

namespace HelloWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Baguette
 *
 * @ORM\Table(name="baguette")
 * @ORM\Entity(repositoryClass="HelloWorldBundle\Repository\BaguetteRepository")
 */
class Baguette
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @ORM\ManyToOne(targetEntity="HelloWorldBundle\Entity\Utilisateur")
     * @ORM\JoinColumn(nullable=true)
     */
    private $utilisateur;

    /**
     * Set utilisateur
     *
     * @param \HelloWorldBundle\Entity\Utilisateur $utilisateur
     *
     * @return Baguette
     */
    public function setUtilisateur(\HelloWorldBundle\Entity\Utilisateur $utilisateur = null)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \HelloWorldBundle\Entity\Utilisateur
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }
}
