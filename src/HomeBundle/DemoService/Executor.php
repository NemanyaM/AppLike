<?php

namespace HomeBundle\DemoService;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManager;

class Executor
{
    protected $em;

    public function __construct($em)
    {
        $this->em = $em;
    }

    public function insertObjects()
    {
        $this->em = $this->getDoctrine()->getManager();

        for ($i = 0; $i < 100; $i++) {
            $entity = new \HomeBundle\Entity\Test();
            $entity->setBand('AC DC');
            $entity->setSong('Rock n roll train');
            $this->em->save($entity);
            $this->em->persist($entity);
        }
        $this->em->flush();
    }

    public function readObjects($id)
    {
        $this->em = $this->getDoctrine()->getManager();
        $bandRepo = $this->em->getRepository('HomeBundle:Test');
        $band = $bandRepo->find($id);

        if (is_null($band)){
            return $this->createNotFoundException("No song with this id.");
        }

        return $band;
    }
}