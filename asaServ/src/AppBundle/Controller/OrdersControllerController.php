<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\ordersEntity;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

class OrdersControllerController extends Controller
{
    /**
     * @Route("/newOrder")
     */
    public function newOrderAction(Request $request)
    {

        $arrReq = ['x'=> "vasea"];

        if($content = $request->getContent()){
            $arrReq = $content;
        }

        $em = $this->getDoctrine()->getManager();

        $newOrder = new ordersEntity();
        $newOrder->setModofcar('string');
        $em->persist($newOrder);

        $em->flush();
        return $this->render('AppBundle:OrdersController:orders.html.twig', array(
            'arrReq' => $arrReq
        ));
    }

    /**
     * @Route("/allOrders")
     */
    public function allOrdersAction()
    {
        $repository = $this->getDoctrine()->getRepository(ordersEntity::class);
        $results = $repository->findAll();


        return $this->render('AppBundle:OrdersController:all_orders.html.twig', array(
            'results' => $results
        ));
    }

}
