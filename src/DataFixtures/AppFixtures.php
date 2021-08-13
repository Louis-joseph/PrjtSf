<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordHasherInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        //Utilisation de Faker
        $faker = Factory::create('fr_FR');

        //Création d'un utilisateur
        $user = new User();

        $user->setEmail('user@test.com')
            ->setPrenom($faker->firstName())
            ->setNom($faker->lastName())
            ->setTelephone($faker->phoneNumber());

        $password = $this->encoder->hashPassword($user, 'password');
        $user->setPassword($password);

        $manager->persist($user);

        //Création de 10 Catégorie
        for ($i = 0; $i < 10; $i++) {
            $categorie = new Categorie();

            $categorie->setDescription($faker->text(350))
                ->setSlug($faker->slug(3))
                ->setNom($faker->lastName(3));

            $manager->persist($categorie);
        }

        $manager->flush();
    }
}
