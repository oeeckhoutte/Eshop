<?php

namespace EshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="eshop_index")
     */
    public function indexAction() {
        $products = $this->getDoctrine()->getManager()->getRepository("EshopBundle:Product")->findAll();
        return $this->render('EshopBundle:Default:index.html.twig', array(
            'products' => $products,
        ));
    }

    /**
     *
     * @Route("/product/{id}", name="eshop_product")
     *
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function productAction($id) {
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository("EshopBundle:Product")->findOneBy(array('id' => $id));
        return $this->render('EshopBundle:Default:product.html.twig', array(
            'product' => $product,
        ));
    }
}
