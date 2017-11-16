<?php

namespace principal\principalBundle\Controller;

use principal\principalBundle\Entity\Modulos;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Modulo controller.
 *
 * @Route("modulos")
 */
class ModulosController extends Controller
{
    /**
     * Lists all modulo entities.
     *
     * @Route("/", name="modulos_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $modulos = $em->getRepository('principalBundle:Modulos')->findAll();

        return $this->render('modulos/index.html.twig', array(
            'modulos' => $modulos,
        ));
    }

    /**
     * Creates a new modulo entity.
     *
     * @Route("/new", name="modulos_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $modulo = new Modulo();
        $form = $this->createForm('principal\principalBundle\Form\ModulosType', $modulo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($modulo);
            $em->flush();

            return $this->redirectToRoute('modulos_show', array('idmodulos' => $modulo->getIdmodulos()));
        }

        return $this->render('modulos/new.html.twig', array(
            'modulo' => $modulo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a modulo entity.
     *
     * @Route("/{idmodulos}", name="modulos_show")
     * @Method("GET")
     */
    public function showAction(Modulos $modulo)
    {
        $deleteForm = $this->createDeleteForm($modulo);

        return $this->render('modulos/show.html.twig', array(
            'modulo' => $modulo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing modulo entity.
     *
     * @Route("/{idmodulos}/edit", name="modulos_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Modulos $modulo)
    {
        $deleteForm = $this->createDeleteForm($modulo);
        $editForm = $this->createForm('principal\principalBundle\Form\ModulosType', $modulo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('modulos_edit', array('idmodulos' => $modulo->getIdmodulos()));
        }

        return $this->render('modulos/edit.html.twig', array(
            'modulo' => $modulo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a modulo entity.
     *
     * @Route("/{idmodulos}", name="modulos_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Modulos $modulo)
    {
        $form = $this->createDeleteForm($modulo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($modulo);
            $em->flush();
        }

        return $this->redirectToRoute('modulos_index');
    }

    /**
     * Creates a form to delete a modulo entity.
     *
     * @param Modulos $modulo The modulo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Modulos $modulo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('modulos_delete', array('idmodulos' => $modulo->getIdmodulos())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
