<?php
namespace Knax\TestingBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Knax\TestingBundle\Entity\Userdata;

class UserdataFixture extends AbstractFixture implements OrderedFixtureInterface {

	public function load(ObjectManager $manager)
	{
		$userdata1 = new Userdata();
		$userdata1->setFullName("Hasta Ragil");
		$userdata1->setAddress("Jl. Jambu Air 1 No 16");
		$manager->persist($userdata1);

		$userdata2 = new Userdata();
		$userdata2->setFullName("M. Azizul Hakim");
		$userdata2->setAddress("Jl. Pisang");
		$manager->persist($userdata2);

		$userdata3 = new Userdata();
		$userdata3->setFullName("Arief Hidayat");
		$userdata3->setAddress("Jl. Harapan Baru II");
		$manager->persist($userdata3);

		$userdata4 = new Userdata();
		$userdata4->setFullName("Pak Maman");
		$userdata4->setAddress("Jl. Deket sekolah");
		$manager->persist($userdata4);

		$manager->flush();

		$this->addReference('userdata-1', $userdata1);
        $this->addReference('userdata-2', $userdata2);
        $this->addReference('userdata-3', $userdata3);
        $this->addReference('userdata-4', $userdata4);
	}

	public function getOrder()
    {
        return 2;
    }
}