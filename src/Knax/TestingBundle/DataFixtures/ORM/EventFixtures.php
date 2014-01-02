<?php
namespace Knax\TestingBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Knax\TestingBundle\Entity\Event;

class EventFixture extends AbstractFixture implements OrderedFixtureInterface {

	public function load(ObjectManager $manager)
	{
		$event1 = new Event();
		$event1->setTitle("Ulangan Database");
		$event1->setDescription("Soal tentang teori database");
		$event1->setClassroom($manager->merge($this->getReference("classroom-1")));
		$event1->setTeacher($manager->merge($this->getReference("teacher-1")));
		$manager->persist($event1);

		$event2 = new Event();
		$event2->setTitle("Pengambilan Nilai");
		$event2->setDescription("Normalisasi database yang diberikan");
		$event2->setClassroom($manager->merge($this->getReference("classroom-2")));
		$event2->setTeacher($manager->merge($this->getReference("teacher-1")));
		$manager->persist($event2);

		$event3 = new Event();
		$event3->setTitle("Quiz");
		$event3->setDescription("Tentang jenis data");
		$event3->setClassroom($manager->merge($this->getReference("classroom-3")));
		$event3->setTeacher($manager->merge($this->getReference("teacher-1")));
		$manager->persist($event3);

		$manager->flush();

		$this->addReference('event-1', $event1);
        $this->addReference('event-2', $event2);
        $this->addReference('event-3', $event3);
	}

	public function getOrder()
    {
        return 12;
    }
}