<?php

namespace HelloWorldBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use HelloWorldBundle\Entity\Utilisateur;

class LoadUtilisateur implements FixtureInterface
{
    // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {
        // Liste des noms de catégorie à ajouter
        $names = array(
            'Développement web',
            'Développement mobile',
            'Graphisme',
            'Intégration',
            'Réseau'
        );

        foreach ($names as $name) {
            // On crée la catégorie
            $utilisateur = new Utilisateur();
            $utilisateur->setName($name);

            // On la persiste
            $manager->persist($utilisateur);
        }

        // On déclenche l'enregistrement de toutes les catégories
        $manager->flush();
    }
}