<?php
namespace Knax\TestingBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Knax\TestingBundle\Entity\Timetable;

class TimetableFixture extends AbstractFixture implements OrderedFixtureInterface {

	public function load(ObjectManager $manager)
	{
		$timetable1 = new Timetable();
		$timetable1->setDay("Monday");
		$timetable1->setTimeMapping($manager->merge($this->getReference("timemapping-1")));
		$timetable1->setClassroom($manager->merge($this->getReference("classroom-1")));
		$timetable1->setTeacher($manager->merge($this->getReference("teacher-1")));
		$manager->persist($timetable1);

		$timetable2 = new Timetable();
		$timetable2->setDay("Monday");
		$timetable2->setTimeMapping($manager->merge($this->getReference("timemapping-2")));
		$timetable2->setClassroom($manager->merge($this->getReference("classroom-2")));
		$timetable2->setTeacher($manager->merge($this->getReference("teacher-1")));
		$manager->persist($timetable2);

		$timetable3 = new Timetable();
		$timetable3->setDay("Tuesday");
		$timetable3->setTimeMapping($manager->merge($this->getReference("timemapping-1")));
		$timetable3->setClassroom($manager->merge($this->getReference("classroom-1")));
		$timetable3->setTeacher($manager->merge($this->getReference("teacher-1")));
		$manager->persist($timetable3);

		$manager->flush();

		$this->addReference('timetable-1', $timetable1);
        $this->addReference('timetable-2', $timetable2);
        $this->addReference('timetable-3', $timetable3);
	}

	public function getOrder()
    {
        return 10;
    }
}