<?php
namespace Knax\TestingBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Knax\TestingBundle\Entity\Login;

class LoginFixture extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface {

	/**
     * @var ContainerInterface
     */
    private $container;

    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

	public function load(ObjectManager $manager)
	{

		$login1 = new Login();
		$login1->setId($manager->merge($this->getReference("userdata-1")));
		$login1->setUsername("knax");
		$encoder = $this->container->get('security.encoder_factory')->getEncoder($login1);
		$login1->setPassword($encoder->encodePassword('standar', $login1->getSalt()));
		$login1->setEmail("npcmamaz@gmail.com");
		$login1->setDiscriminator("student");
		$manager->persist($login1);

		$login2 = new Login();
		$login2->setId($manager->merge($this->getReference("userdata-2")));
		$login2->setUsername("azizul");
		$encoder = $this->container->get('security.encoder_factory')->getEncoder($login2);
		$login2->setPassword($encoder->encodePassword('azizulpassword', $login2->getSalt()));
		$login2->setEmail("azizul@gmail.com");
		$login2->setDiscriminator("student");
		$manager->persist($login2);

		$login3 = new Login();
		$login3->setId($manager->merge($this->getReference("userdata-3")));
		$login3->setUsername("arief");
		$encoder = $this->container->get('security.encoder_factory')->getEncoder($login3);
		$login3->setPassword($encoder->encodePassword('password', $login3->getSalt()));
		$login3->setEmail("arief@gmail.com");
		$login3->setDiscriminator("student");
		$manager->persist($login3);

		$login4 = new Login();
		$login4->setId($manager->merge($this->getReference("userdata-4")));
		$login4->setUsername("maman");
		$encoder = $this->container->get('security.encoder_factory')->getEncoder($login4);
		$login4->setPassword($encoder->encodePassword('maman', $login4->getSalt()));
		$login4->setEmail("maman@gmail.com");
		$login4->setDiscriminator("teacher");
		$manager->persist($login4);

		$manager->flush();

		$this->addReference('login-1', $login1);
        $this->addReference('login-2', $login2);
        $this->addReference('login-3', $login3);
        $this->addReference('login-4', $login4);
	}

	public function getOrder()
    {
        return 4;
    }
}