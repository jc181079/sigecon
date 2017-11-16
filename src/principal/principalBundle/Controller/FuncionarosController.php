<?php

namespace principal\principalBundle\Controller;

use principal\principalBundle\Entity\Funcionaros;
use principal\principalBundle\Entity\Usuarios;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Funcionaro controller.
 *
 * @Route("funcionaros")
 */
class FuncionarosController extends Controller
{
    /**
     * Lists all funcionaro entities.
     *
     * @Route("/", name="funcionaros_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        //$funcionaros = $em->getRepository('principalBundle:Funcionaros')->findAll();
        //$usuarios = $em->getRepository('principalBundle:Usuarios')->findById();
        $consultaFuncionarios=$em->createQuery(
            ' SELECT fun.idfuncionaros,fun.nombrefun,fun.apellidofun,fun.telefonofun,fun.correofun,usu.login,usu.idusuarios '.
            ' FROM principalBundle:Funcionaros fun INNER JOIN  principalBundle:Usuarios usu WITH fun.idfuncionaros=usu.funcionaros'.    
            ' WHERE fun.idfuncionaros=usu.funcionaros'     
            );
        $runQuery=$consultaFuncionarios->getResult();

        return $this->render('funcionaros/index.html.twig', array(
            //'funcionaros' => $funcionaros,
            'funcionaros' => $runQuery,
        ));
    }

    /**
     * Creates a new funcionaro entity.
     *
     * @Route("/new", name="funcionaros_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $funcionaro = new Funcionaros();
        $form = $this->createForm('principal\principalBundle\Form\FuncionarosType', $funcionaro);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($funcionaro);
            $em->flush();

            return $this->redirectToRoute('funcionaros_show', array('idfuncionaros' => $funcionaro->getIdfuncionaros()));
        }

        return $this->render('funcionaros/new.html.twig', array(
            'funcionaro' => $funcionaro,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a funcionaro entity.
     *
     * @Route("/{idfuncionaros}", name="funcionaros_show")
     * @Method("GET")
     */
    public function showAction(Funcionaros $funcionaro)
    {
        $deleteForm = $this->createDeleteForm($funcionaro);

        return $this->render('funcionaros/show.html.twig', array(
            'funcionaro' => $funcionaro,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing funcionaro entity.
     *
     * @Route("/{idfuncionaros}/edit", name="funcionaros_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Funcionaros $funcionaro)
    {
        $deleteForm = $this->createDeleteForm($funcionaro);
        $editForm = $this->createForm('principal\principalBundle\Form\FuncionarosType', $funcionaro);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('funcionaros_edit', array('idfuncionaros' => $funcionaro->getIdfuncionaros()));
        }

        return $this->render('funcionaros/edit.html.twig', array(
            'funcionaro' => $funcionaro,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a funcionaro entity.
     *
     * @Route("/{idfuncionaros}", name="funcionaros_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Funcionaros $funcionaro)
    {
        $form = $this->createDeleteForm($funcionaro);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($funcionaro);
            $em->flush();
        }

        return $this->redirectToRoute('funcionaros_index');
    }

    /**
     * Creates a form to delete a funcionaro entity.
     *
     * @param Funcionaros $funcionaro The funcionaro entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Funcionaros $funcionaro)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('funcionaros_delete', array('idfuncionaros' => $funcionaro->getIdfuncionaros())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
