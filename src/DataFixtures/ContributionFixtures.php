<?php

namespace App\DataFixtures;

use App\Entity\Contribution;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ContributionFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $amount = new Contribution();
        $amount->setAmount(5500.00);
        $this->addReference("amount", $amount);
        $manager->persist($amount);
        $manager->flush();
    }
}
