<?php
namespace Knax\TestingBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Knax\TestingBundle\Entity\TimeMapping;

class TimeMappingFixture extends AbstractFixture implements OrderedFixtureInterface {

	public function load(ObjectManager $manager)
	{
		$timemapping1 = new TimeMapping();
		$timemapping1->setTime("06:30-07:15");
		$manager->persist($timemapping1);

		$timemapping2 = new TimeMapping();
		$timemapping2->setTime("07:15-08:00");
		$manager->persist($timemapping2);

		$timemapping3 = new TimeMapping();
		$timemapping3->setTime("08:00-08:45");
		$manager->persist($timemapping3);

		$timemapping4 = new TimeMapping();
		$timemapping4->setTime("08:45-09:00");
		$manager->persist($timemapping4);

		$timemapping5 = new TimeMapping();
		$timemapping5->setTime("09:00-09:45");
		$manager->persist($timemapping5);

		$manager->flush();

		$this->addReference('timemapping-1', $timemapping1);
        $this->addReference('timemapping-2', $timemapping2);
        $this->addReference('timemapping-3', $timemapping3);
        $this->addReference('timemapping-4', $timemapping4);
        $this->addReference('timemapping-5', $timemapping5);
	}

	public function getOrder()
    {
        return 9;
    }
}