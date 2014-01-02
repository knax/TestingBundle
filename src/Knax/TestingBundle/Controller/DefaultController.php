<?php

namespace Knax\TestingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $output = ["\n"];

        $em = $this->getDoctrine()->getManager();

/*
        $logins = $em->getRepository('KnaxTestingBundle:Login')
                        ->findBy(["discriminator" => "student"]);

        foreach ($logins as $login) {
            $output[] = $login->getId()
                                 ->getFullName();
        }
*/

/*
        $userdata = $em->find('KnaxTestingBundle:Userdata',"33");

        $login = $em->getRepository('KnaxTestingBundle:Login')->findOneById($userdata);

        $output[] = $login->getUsername();
*/

/*
        $login = $em->getRepository('KnaxTestingBundle:Login')->findOneByUsername("knax");

        $userdata = $login->getId();

        $output[] = $classroomName = $em->getRepository('KnaxTestingBundle:Student')->find($userdata->getId())->getClassroom()->getName();
*/
/*
        $q = $em->createQuery("SELECT u.fullName, c.name FROM KnaxTestingBundle:Login l
                                JOIN KnaxTestingBundle:Userdata u WHERE u.id = l.id
                                JOIN KnaxTestingBundle:Student s WHERE s.userdata = u.id
                                JOIN KnaxTestingBundle:Classroom c WHERE s.classroom = c.id");

        $users = $q->getResult();
*/
        // print_r($users);

        // $session = new Session();

        // print_r($session->getName());

        // $output[] = $this->getUser()->getId()->getId();
/*
        $users = $em->createQueryBuilder()
                    ->select('u.fullName')
                    ->from('KnaxTestingBundle:Userdata', 'u')
                    ->getQuery()
                    ->getResult();
*/
        // foreach ($users as $user) {
        //     $output[] = $user["fullName"];
        // }

        // $userdata = $em->getRepository("KnaxTestingBundle:Mark")->getUserMark("9");
        
        $userdata = $this->getDoctrine()->getRepository("KnaxTestingBundle:Absent")->getListAbsent("10");

        $output[] = print_r($userdata,TRUE);

        $content = implode("\n", $output);

        return $this->render('KnaxTestingBundle:Default:index.html.twig', array('content' => $content));
    }
}
