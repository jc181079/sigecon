<?php

namespace principal\principalBundle\Controller;

use principal\principalBundle\Entity\Permisologia;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Permisologium controller.
 *
 * @Route("permisologia")
 */
class PermisologiaController extends Controller
{
    /**
     * Lists all permisologium entities.
     *
     * @Route("/", name="permisologia_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $permisologias = $em->getRepository('principalBundle:Permisologia')->findAll();

        return $this->render('permisologia/index.html.twig', array(
            'permisologias' => $permisologias,
        ));
    }

    /**
     * Creates a new permisologium entity.
     *
     * @Route("/new/{idperfil}", name="permisologia_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $permisologium = new Permisologia();
        $form = $this->createForm('principal\principalBundle\Form\PermisologiaType', $permisologium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $perfil = $this->getDoctrine()
                        ->getRepository('principalBundle:Perfil')
                        ->findOneBy(array('idperfil' => $request->get('idperfil')));
            $permisologium->setIdperfil($perfil);
            $em->persist($permisologium);
            $em->flush();


            return $this->redirectToRoute('permisologia_show', array('idpermisologia' => $permisologium->getIdpermisologia()));
        }

        return $this->render('permisologia/new.html.twig', array(
            'permisologium' => $permisologium,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a permisologium entity.
     *
     * @Route("/{idpermisologia}", name="permisologia_show")
     * @Method("GET")
     */
    public function showAction(Permisologia $permisologium,Request $request)
    {
        $deleteForm = $this->createDeleteForm($permisologium);
        $url=$request->getPathInfo();//getBaseUrl();
        $moduloURL=explode('/', $url);
        return $this->render('permisologia/show.html.twig', array(
            'permisologium' => $permisologium,
            'x'=>$moduloURL[1],
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing permisologium entity.
     *
     * @Route("/{idpermisologia}/edit", name="permisologia_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Permisologia $permisologium)
    {
        $deleteForm = $this->createDeleteForm($permisologium);
        $editForm = $this->createForm('principal\principalBundle\Form\PermisologiaType', $permisologium);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('permisologia_edit', array('idpermisologia' => $permisologium->getIdpermisologia()));
        }

        return $this->render('permisologia/edit.html.twig', array(
            'permisologium' => $permisologium,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a permisologium entity.
     *
     * @Route("/{idpermisologia}", name="permisologia_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Permisologia $permisologium)
    {
        $form = $this->createDeleteForm($permisologium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($permisologium);
            $em->flush();
        }

        return $this->redirectToRoute('permisologia_index');
    }

    /**
     * Creates a form to delete a permisologium entity.
     *
     * @param Permisologia $permisologium The permisologium entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Permisologia $permisologium)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('permisologia_delete', array('idpermisologia' => $permisologium->getIdpermisologia())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
