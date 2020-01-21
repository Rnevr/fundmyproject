<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CatogoryFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $sport = new Category();
        $sport->setName("Sport");
        $this->addReference("Sport", $sport);
        $manager->persist($sport);

        $film = new Category();
        $film->setName("Film");
        $this->addReference("Film", $film);
        $manager->persist($film);

        $jeux = new Category();
        $jeux->setName("Jeux");
        $this->addReference("Jeux", $jeux);
        $manager->persist($jeux);

        $musique = new Category();
        $musique->setName("Musique");
        $this->addReference("Musique",$musique);
        $manager->persist($musique);

        $manager->flush();
    }
}
