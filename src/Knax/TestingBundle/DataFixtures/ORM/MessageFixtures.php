<?php
namespace Knax\TestingBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Knax\TestingBundle\Entity\Message;

class MessageFixture extends AbstractFixture implements OrderedFixtureInterface {

	public function load(ObjectManager $manager)
	{
		$message1 = new Message();
		$message1->setSender($manager->merge($this->getReference("userdata-1")));
		$message1->setReceiver($manager->merge($this->getReference("userdata-2")));
		$message1->setTitle("Pesan dari ragil ke azizul");
		$message1->setMessage("Isi dari pesannya");
		$manager->persist($message1);

		$message2 = new Message();
		$message2->setSender($manager->merge($this->getReference("userdata-1")));
		$message2->setReceiver($manager->merge($this->getReference("userdata-3")));
		$message2->setTitle("Pesan dari ragil ke arief");
		$message2->setMessage("Isi dari pesannya");
		$manager->persist($message2);

		$message3 = new Message();
		$message3->setSender($manager->merge($this->getReference("userdata-3")));
		$message3->setReceiver($manager->merge($this->getReference("userdata-2")));
		$message3->setTitle("Pesan dari arief ke azizul");
		$message3->setMessage("Isi dari pesannya");
		$manager->persist($message3);

		$message4 = new Message();
		$message4->setSender($manager->merge($this->getReference("userdata-2")));
		$message4->setReceiver($manager->merge($this->getReference("userdata-4")));
		$message4->setTitle("Pesan dari azizul ke pak maman");
		$message4->setMessage("Isi dari pesannya");
		$manager->persist($message4);

		$manager->flush();

		$this->addReference('message-1', $message1);
        $this->addReference('message-2', $message2);
        $this->addReference('message-3', $message3);
        $this->addReference('message-4', $message4);
	}

	public function getOrder()
    {
        return 6;
    }
}