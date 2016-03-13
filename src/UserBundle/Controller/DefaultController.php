<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('EshopBundle:Product')->findAll(array('date' => 'desc'));
        $categories = $em->getRepository('EshopBundle:Category')->findAll();
        return $this->render('UserBundle:Default:index.html.twig', array(
            'products' => $products,
            'categories' => $categories,
        ));
    }
}
