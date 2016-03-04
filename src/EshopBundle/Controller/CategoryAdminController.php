<?php
namespace EshopBundle\Controller;

use EshopBundle\Entity\Category;
use EshopBundle\Form\CategoryType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoryAdminController extends Controller {

    /**
     *
     * @Route("admin/add/category")
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function createCategory(Request $request) {
        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();
        }

        return $this->render('EshopBundle:Admin:createCategory.html.twig', array(
            'form' => $form->createView(),
            'category' => $category,
        ));
    }

    /**
     *
     * @Route("admin/categories")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listCategory() {
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('EshopBundle:Category')->findAll();

        return $this->render('@Eshop/Admin/categories.html.twig', array(
            'categories' => $categories,
        ));
    }
}