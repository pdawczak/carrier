<?php

namespace CRR\Bundle\PackageBundle\DataFixture;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;

use CRR\Bundle\PackageBundle\Entity\PackageType;

class LoadUserData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $p1 = new PackageType();
        $p1
            ->setName('Kopertowych')
            ->setSort(50)
        ;
        $manager->persist($p1);

        $p2 = new PackageType();
        $p2
            ->setName('do 5kg')
            ->setSort(45)
        ;
        $manager->persist($p2);

        $p3 = new PackageType();
        $p3
            ->setName('do 10kg')
            ->setSort(40)
        ;
        $manager->persist($p3);

        $p4 = new PackageType();
        $p4
            ->setName('do 20kg')
            ->setSort(35)
        ;
        $manager->persist($p4);

        $p5 = new PackageType();
        $p5
            ->setName('do 30kg')
            ->setSort(30)
        ;
        $manager->persist($p5);

        $p6 = new PackageType();
        $p6
            ->setName('do 50kg')
            ->setSort(25)
        ;
        $manager->persist($p6);

        $p7 = new PackageType();
        $p7
            ->setName('do 70kg')
            ->setSort(20)
        ;
        $manager->persist($p7);

        $manager->flush();
    }
}
