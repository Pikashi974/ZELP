<?php

namespace App\DataFixtures;

use App\Entity\Restaurant;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class RestaurantFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
        for ($i = 0; $i < 10; $i++) {
            $restaurant = new Restaurant();
            $restaurant->setNom($faker->company());
            // $restaurant->setAdresse($adresses->find($i));
            $restaurant->setNote(5);
            // $restaurant->setUtilisateur(new User());
            $manager->persist($restaurant);
        }

        $manager->flush();
    }
}
