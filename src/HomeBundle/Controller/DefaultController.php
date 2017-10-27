<?php

namespace HomeBundle\Controller;


use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use HomeBundle\Controller\ServiceController;
use HomeBundle\DemoService\Executor;

class DefaultController extends Controller
{
    /**
     * @Route("/band", name="app_band_route")
     */
    public function createDbRowAction()
    {
        $entity = new Executor($this->getDoctrine()->getManager());

        $entity->insertObjects();

        return new Response("Record has been saved to db");
    }

    /**
     * @Route("/show_band/{id}", name="app_show_band_route")
     */
    public function showSongAction($id)
    {
        $entity = new Executor($this->getDoctrine()->getManager());

        $data = $entity->readObjects($id);

        return new JsonResponse([
            'band' => $data->Band,
            'song' => $data->Song,
        ]);
    }
}