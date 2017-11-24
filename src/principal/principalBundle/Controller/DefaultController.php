<?php

namespace principal\principalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('principalBundle:Default:index.html.twig');
    }

    /**
     * @Route("/seguridad", name="seguridad")
     * 
     */
    public function seguridadAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        // $consulta = $em->getRepository('principalBundle:Usuarios')
        //    			->findBy(array('login' => $request->get('login'),'clave'=> md5($request->get('clave'))));
         $query=$em->createQuery(
            "SELECT usu.idusuarios, usu.login, f.idfuncionaros ". 
            " FROM principalBundle:Usuarios usu INNER JOIN principalBundle:Funcionaros f  ".
            " ".
            "  WHERE usu.login='".$request->get('login')."' AND usu.clave='".md5($request->get('clave'))."' AND usu.funcionaros=f.idfuncionaros  ".
            "  ");
        $consulta=$query->getResult();
        if($consulta==null)
        {
        	/**
            * LEYENDA DE MENSAJES
            * -------------------
            * msgW -> Mensaje de Advertencia o message warning
            * msgS -> Mensaje Afirmativo
            * msgI -> Mensaje Informativo 
            */
            $this->get('session')->getFlashBag()->add(
                            'msgW',
                            print_r($consulta)
                            );
        }else
        {        	
            //inicio de bloque de session de usuario en el sistema
            $session= $request->getSession();
            $session->set('idusuarios',$consulta[0]->getIdusuarios()); //se captura la Id del usuario que se acaba de loguear
            $session->set('login',$consulta[0]->getLogin()); //se captura el Login del usuario que se acaba de loguear
            $session->set('funcionaros',$consulta[0]->getFuncionaros()); //se captura la Id del funcionario que se acaba de loguear
            $session->set('idperfil',$consulta[0]->getIdperfil()); //se captura la Id del usuario que se acaba de loguear
            //fin de bloque de session
            $this->get('session')->getFlashBag()->add(
                            'msgS',
                            "Usuario se logueo correctamente."
                            );
            return $this->render('principalBundle:Default:principal.html.twig');            
        }
         return $this->render('principalBundle:Default:index.html.twig');
    }
}
