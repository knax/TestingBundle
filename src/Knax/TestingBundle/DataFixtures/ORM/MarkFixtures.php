<?php
namespace Knax\TestingBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Knax\TestingBundle\Entity\Mark;

class MarkFixture extends AbstractFixture implements OrderedFixtureInterface {

	public function load(ObjectManager $manager)
	{
		$mark1 = new Mark();
		$mark1->setScore("90");
		$mark1->setStudent($manager->merge($this->getReference("student-1")));
		$mark1->setTeacher($manager->merge($this->getReference("teacher-1")));
		$mark1->setDescription("Nilai normalisasi");
		$mark1->setGivenDate(new \DateTime("2013-09-17 07:00:00"));
		$manager->persist($mark1);

		$mark2 = new Mark();
		$mark2->setScore("80");
		$mark2->setStudent($manager->merge($this->getReference("student-2")));
		$mark2->setTeacher($manager->merge($this->getReference("teacher-1")));
		$mark2->setDescription("Nilai pengayaan");
		$mark2->setGivenDate(new \DateTime("2013-09-17 07:00:00"));
		$manager->persist($mark2);

		$mark3 = new Mark();
		$mark3->setScore("70");
		$mark3->setStudent($manager->merge($this->getReference("student-3")));
		$mark3->setTeacher($manager->merge($this->getReference("teacher-1")));
		$mark3->setDescription("Nilai nentuin field");
		$mark3->setGivenDate(new \DateTime("2013-09-17 07:00:00"));
		$manager->persist($mark3);

		$manager->flush();

		$this->addReference('mark-1', $mark1);
        $this->addReference('mark-2', $mark2);
        $this->addReference('mark-3', $mark3);
	}

	public function getOrder()
    {
        return 11;
    }
}