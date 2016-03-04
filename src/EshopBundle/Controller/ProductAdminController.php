<?php
namespace EshopBundle\Controller;

use EshopBundle\Entity\Product;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use EshopBundle\Form\ProductType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProductAdminController extends Controller
{
    /**
     *
     * @Route("/admin/add/product", name="admin_add_product")
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function createProduct(Request $request)
    {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();

            return $this->redirectToRoute('admin_products');
        }

        return $this->render('EshopBundle:Admin:createProduct.html.twig', array(
            'product' => $product,
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/admin/products", name="admin_products")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listProduct()
    {
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('EshopBundle:Product')->findAll();

        return $this->render('EshopBundle:Admin:productsList.html.twig', array(
        'products' => $products,
    ));
    }
}