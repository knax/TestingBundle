<?php
namespace Knax\TestingBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Knax\TestingBundle\Entity\Student;

class StudentFixture extends AbstractFixture implements OrderedFixtureInterface {

	public function load(ObjectManager $manager)
	{
		$student1 = new Student();
		$student1->setUserdata($manager->merge($this->getReference('userdata-1')));
		$student1->setClassroom($manager->merge($this->getReference('classroom-1')));
		$manager->persist($student1);

		$student2 = new Student();
		$student2->setUserdata($manager->merge($this->getReference('userdata-2')));
		$student2->setClassroom($manager->merge($this->getReference('classroom-1')));
		$manager->persist($student2);

		$student3 = new Student();
		$student3->setUserdata($manager->merge($this->getReference('userdata-3')));
		$student3->setClassroom($manager->merge($this->getReference('classroom-2')));
		$manager->persist($student3);

		$manager->flush();

		$this->addReference('student-1', $student1);
        $this->addReference('student-2', $student2);
        $this->addReference('student-3', $student3);
	}

	public function getOrder()
    {
        return 3;
    }
}