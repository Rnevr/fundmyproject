<?php

namespace App\DataFixtures;

use App\Entity\Project;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ProjectFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        {
            $Goodgirl = new Project();
            $Goodgirl->setName("Good Girl");
            $Goodgirl->setImage("project1.jpg");
            $Goodgirl->setExcerpt("Ce film parle de ...");
            $Goodgirl->setDescription("lorem*");
            $Goodgirl->setGoal(7500);

            $manager->persist($Goodgirl);

            $Lesyeux = new Project();
            $Lesyeux->setname("Les yeux dans le bus");
            $Lesyeux->setimage("project2.jpg");
            $Lesyeux->setexcerpt ("Revivez la grande épopée de l'équipe de France de football lors du mondial de football 2010.");
            $Lesyeux->setDescription("lorem*");
            $Lesyeux->setGoal(100);

            $manager->persist($Lesyeux);

            $Dabado = new Project();
            $Dabado->setname("Dabado");
            $Dabado->setimage("project3.jpg");
            $Dabado->setexcerpt ("Un jeu fantastique peint à la main. Plongez dans des aventures extra-ordinaires !");
            $Dabado->setDescription("lorem*");
            $Dabado->setGoal(3400);

            $manager->persist($Dabado);


            $doosh = new Project();
            $doosh->setName("Good Girl");
            $doosh->setImage("project4.jpg");
            $doosh->setExcerpt("concert de dark metal");
            $doosh->setDescription("lorem*");
            $doosh->setGoal(7500);

            $manager->persist($doosh);


            $manager->flush();
        }
    }
    }
}
