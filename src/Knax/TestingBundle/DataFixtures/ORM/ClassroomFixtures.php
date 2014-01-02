<?php
namespace Knax\TestingBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Knax\TestingBundle\Entity\Classroom;

class ClassroomFixture extends AbstractFixture implements OrderedFixtureInterface {

	public function load(ObjectManager $manager)
	{
		$classroom1 = new Classroom();
		$classroom1->setName("X RPL B");
		$manager->persist($classroom1);

		$classroom2 = new Classroom();
		$classroom2->setName("XI RPL A");
		$manager->persist($classroom2);

		$classroom3 = new Classroom();
		$classroom3->setName("XII TKJ C");
		$manager->persist($classroom3);

		$manager->flush();

		$this->addReference('classroom-1', $classroom1);
        $this->addReference('classroom-2', $classroom2);
        $this->addReference('classroom-3', $classroom3);
	}

	public function getOrder()
    {
        return 1;
    }
}