<?php

namespace principal\principalBundle\Controller;

use principal\principalBundle\Entity\Usuarios;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Usuario controller.
 *
 * @Route("usuarios")
 */
class UsuariosController extends Controller
{
    /**
     * Lists all usuario entities.
     *
     * @Route("/", name="usuarios_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $usuarios = $em->getRepository('principalBundle:Usuarios')->findAll();

        return $this->render('usuarios/index.html.twig', array(
            'usuarios' => $usuarios,
        ));
    }

    /**
     * Creates a new usuario entity.
     *
     * @Route("/new/{idfuncionaros}", name="usuarios_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $usuario = new Usuarios();
        $form = $this->createForm('principal\principalBundle\Form\UsuariosType', $usuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $funcionario = $this->getDoctrine()
                    ->getRepository('principalBundle:Funcionaros')
                    ->findOneBy(array('idfuncionaros' => $request->get('idfuncionaros')));
            $usuario->setFuncionaros($funcionario);
            $usuario->setClave(md5($request->get('clave')));
            $em->persist($usuario);
            $em->flush();

            return $this->redirectToRoute('funcionaros_index');
        }

        return $this->render('usuarios/new.html.twig', array(
            'usuario' => $usuario,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a usuario entity.
     *
     * @Route("/{idusuarios}", name="usuarios_show")
     * @Method("GET")
     */
    public function showAction(Usuarios $usuario)
    {
        $deleteForm = $this->createDeleteForm($usuario);

        return $this->render('usuarios/show.html.twig', array(
            'usuario' => $usuario,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing usuario entity.
     *
     * @Route("/{idusuarios}/edit", name="usuarios_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Usuarios $usuario)
    {
        $deleteForm = $this->createDeleteForm($usuario);
        $editForm = $this->createForm('principal\principalBundle\Form\UsuariosType', $usuario);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('funcionaros_index');
            //return $this->redirectToRoute('usuarios_edit', array('idusuarios' => $usuario->getIdusuarios()));
        }

        return $this->render('usuarios/edit.html.twig', array(
            'usuario' => $usuario,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a usuario entity.
     *
     * @Route("/{idusuarios}", name="usuarios_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Usuarios $usuario)
    {
        $form = $this->createDeleteForm($usuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($usuario);
            $em->flush();
        }

        return $this->redirectToRoute('usuarios_index');
    }

    /**
     * Creates a form to delete a usuario entity.
     *
     * @param Usuarios $usuario The usuario entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Usuarios $usuario)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('usuarios_delete', array('idusuarios' => $usuario->getIdusuarios())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
