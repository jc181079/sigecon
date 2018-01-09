<?php

namespace principal\principalBundle\Controller;

use principal\principalBundle\Entity\Funcionaros;
use principal\principalBundle\Entity\Usuarios;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use principal\principalBundle\Controller\Helper\funciones;

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
    public function indexAction(request $request)
    {
        $em      = $this->getDoctrine()->getManager();
        $session = $request->getSession();
        $perfil  = $session->get('idperfil');
        $url     = $request->getPathInfo();
        $permisologia=funciones::verificaPermisologia($url,$perfil,$em);

        if ($permisologia!=null)
        {
            $incluir      = $permisologia[0]->getIncluir();
            $consultar    = $permisologia[0]->getConsultar();
            $modificar    = $permisologia[0]->getModificar();
            $eliminar     = $permisologia[0]->getEliminar();
            $funcionaros  = $em->getRepository('principalBundle:Funcionaros')->findAll();
            return $this->render('funcionaros/index.html.twig', array('funcionaros'=>$funcionaros,'incluir'=>$incluir,'consultar'=>$consultar,'modificar'=>$modificar,'eliminar'=>$eliminar));
            ///return $this->redirectToRoute('funcionaros_index',array('permisologia'=>$permisologia));  
        }
        else
        {  
            return $this->redirectToRoute('principal');
        }
        
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
    public function showAction(Funcionaros $funcionaro,Request $request)
    {
        $deleteForm = $this->createDeleteForm($funcionaro);
        $em = $this->getDoctrine()->getManager();
        /*$consultaUsuarios=$em->createQuery(
            ' SELECT usu.login,usu.idusuarios '.
            ' FROM principalBundle:Usuarios usu '.    
            ' WHERE usu.funcionaros='.  $funcionaro->getIdfuncionaros() .''   
            );
        //$usuarios=$consultaUsuarios->getResult();*/
        $usuarios  = $em->getRepository('principalBundle:Usuarios')->findByFuncionaros($funcionaro->getIdfuncionaros());
        return $this->render('funcionaros/show.html.twig', array(
            'funcionaro' => $funcionaro,
            'usuarios' => $usuarios,
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
