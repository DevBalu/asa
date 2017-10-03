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
     * @Route("/newOrder/{nameCar}/")
     */
    public function newOrderAction($nameCar)
    {
        $em = $this->getDoctrine()->getManager();

        $newOrder = new ordersEntity();
        $newOrder->setModofcar($nameCar);
        $em->persist($newOrder);

        $em->flush();

        return $this->render('AppBundle:OrdersController:orders.html.twig', array(
            'arrReq' => 'test'
        ));
    }

    /**
     * @Route("/allOrders")
     */
    public function allOrdersAction()
    {
        $repository = $this->getDoctrine()->getRepository(ordersEntity::class);
        $results = $repository->findBy([], ['id' => 'DESC']);

        $arrayCollection = [];
        foreach ($results as $item){
            $arrayCollection[] = [
                'Model Of car'=> $item->getModofcar(),
                'id' => $item->getId()
            ];
        }

        return new JsonResponse($arrayCollection);

//        return $this->render('AppBundle:OrdersController:all_orders.html.twig', array(
//            'test' => $results
//        ));

    }

    /**
     *
     * @Route("/findOrder/{idOrder}/", name="find_order")
     */

    public function findOrderAction($idOrder){

        $orderById = $this->getDoctrine()->getRepository(ordersEntity::class)->find($idOrder);

        $orderFined[] = ['nameOfCar' => $orderById->getModofcar()];

        return new JsonResponse($orderFined);
    }


    /**
     *
     * @Route("/rmOrder/{idOrder}/", name="find_order")
     */

    public function removeOrderAction($idOrder){
        $order =  $this->getDoctrine()->getRepository(ordersEntity::class)->find($idOrder);

        $em = $this->getDoctrine()->getManager();
        $em->remove($order);
        $em->flush();

        return $this->render('AppBundle:OrdersController:all_orders.html.twig', array(
            'arrReq' => 'test'
        ));

    }


}

