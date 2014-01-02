<?php
namespace Knax\TestingBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Knax\TestingBundle\Entity\Studies;

class StudiesFixture extends AbstractFixture implements OrderedFixtureInterface {

	public function load(ObjectManager $manager)
	{
		$studies1 = new Studies();
		$studies1->setName("HTML");
		$manager->persist($studies1);

		$studies2 = new Studies();
		$studies2->setName("PHP");
		$manager->persist($studies2);

		$studies3 = new Studies();
		$studies3->setName("Database");
		$manager->persist($studies3);

		$manager->flush();

		$this->addReference('studies-1', $studies1);
        $this->addReference('studies-2', $studies2);
        $this->addReference('studies-3', $studies3);
	}

	public function getOrder()
    {
        return 7;
    }
}