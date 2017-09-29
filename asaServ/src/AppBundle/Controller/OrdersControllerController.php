<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\ordersEntity;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class OrdersControllerController extends Controller
{
    /**
     * @Route("/newOrder")
     */
    public function newOrderAction(Request $request)
    {

        if($content = $request->getContent()){
            $em = $this->getDoctrine()->getManager();

            $newOrder = new ordersEntity();
            $newOrder->setModofcar('string');
            $em->persist($newOrder);

            $em->flush();
        }

//        return $this->render('AppBundle:OrdersController:orders.html.twig', array(
//            'arrReq' => $arrReq
//        ));
    }

    /**
     * @Route("/allOrders")
     */
    public function allOrdersAction()
    {
        $repository = $this->getDoctrine()->getRepository(ordersEntity::class);
        $results = $repository->findAll();

        $arrayCollection = [];
        foreach ($results as $item){
            $arrayCollection[] = [
                'Model Of car'=> $item->getModofcar()
            ];
        }

        return new JsonResponse($arrayCollection);

//        return $this->render('AppBundle:OrdersController:all_orders.html.twig', array(
//            'results' => $results
//        ));

    }

}
