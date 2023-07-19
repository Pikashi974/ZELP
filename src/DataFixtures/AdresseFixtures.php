<?php

namespace App\DataFixtures;

use App\Entity\Adresse;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AdresseFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 100; $i++) {
            $adresse = new Adresse();
            $adresse->setNumeroRue($i);
            $adresse->setRue("Rue Coco Robert");
            $adresse->setCommune("Ste Marie");
            $adresse->setCode(97438);

            $manager->persist($adresse);
        }

        $manager->flush();
    }
}
