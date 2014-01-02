<?php
namespace Knax\TestingBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Knax\TestingBundle\Entity\Absent;

class AbsentFixture extends AbstractFixture implements OrderedFixtureInterface {

	public function load(ObjectManager $manager)
	{
		$absent1 = new Absent();
		$absent1->setType("sick");
		$absent1->setUserdata($manager->merge($this->getReference('userdata-2')));
		$absent1->setDate(new \DateTime("2013-01-10"));
		$manager->persist($absent1);

		$absent2 = new Absent();
		$absent2->setType("sick");
		$absent2->setUserdata($manager->merge($this->getReference('userdata-2')));
		$absent2->setDate(new \DateTime("2013-08-10"));
		$manager->persist($absent2);

		$absent3 = new Absent();
		$absent3->setType("permit");
		$absent3->setUserdata($manager->merge($this->getReference('userdata-3')));
		$absent3->setDate(new \DateTime("2013-09-13"));
		$manager->persist($absent3);

		$absent4 = new Absent();
		$absent4->setType("absent");
		$absent4->setUserdata($manager->merge($this->getReference('userdata-3')));
		$absent4->setDate(new \DateTime("2013-09-27"));
		$manager->persist($absent4);

		$manager->flush();

		$this->addReference('absent-1', $absent1);
        $this->addReference('absent-2', $absent2);
        $this->addReference('absent-3', $absent3);
        $this->addReference('absent-4', $absent4);
	}

	public function getOrder()
    {
        return 5;
    }
}