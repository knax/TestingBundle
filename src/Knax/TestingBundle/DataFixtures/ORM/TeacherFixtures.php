<?php
namespace Knax\TestingBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Knax\TestingBundle\Entity\Teacher;

class TeacherFixture extends AbstractFixture implements OrderedFixtureInterface {

	public function load(ObjectManager $manager)
	{
		$teacher1 = new Teacher();
		$teacher1->setUserdata($manager->merge($this->getReference('userdata-4')));
		$teacher1->setStudies($manager->merge($this->getReference('studies-3')));
		$manager->persist($teacher1);

		$manager->flush();

		$this->addReference('teacher-1', $teacher1);
	}

	public function getOrder()
    {
        return 8;
    }
}