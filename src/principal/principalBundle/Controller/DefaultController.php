<?php

namespace principal\principalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction(request $request)
    {
        
        return $this->render('principalBundle:Default:index.html.twig');
    }

    /**
     * @Route("/principal", name="principal")
     */
    public function principalAction(request $request)
    {
        $session = $request->getSession();
        return $this->render('principalBundle:Default:principal.html.twig',
            array(
                "usu"=>$session->get("login"),
            )
        );
    }

    /**
     * @Route("/seguridad", name="seguridad")
     * 
     */
    public function seguridadAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $consulta = $em->getRepository('principalBundle:Usuarios')
            			->findBy(array('login' => $request->get('login'),'clave'=> md5($request->get('clave'))));
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
            $session->set('idusuarios',$consulta[0]->getIdusuarios());   //se captura la Id del usuario que se acaba de loguear
            $session->set('login',$consulta[0]->getLogin());             //se captura el Login del usuario que se acaba de loguear
            $session->set('funcionaros',$consulta[0]->getFuncionaros()); //se captura la Id del funcionario que se acaba de loguear
            $session->set('idperfil',$consulta[0]->getIdperfil());       //se captura la Id del usuario que se acaba de loguear
            //fin de bloque de session
            $this->get('session')->getFlashBag()->add(
                            'msgS',
                            "Usuario se logueo correctamente."
                            );
            //return $this->render('principalBundle:Default:principal.html.twig'); 
            return $this->redirectToRoute('principal');           
        }
        return $this->render('principalBundle:Default:index.html.twig');
    }

    /**
    * @Route("/md5/{numero}/{md5}", name="md5")
    * 
    *
    */
    
     public function md5Action($numero,$md5)
    {
        //echo "md5 de ".$numero." es: ".md5($numero);
        return $this->render('principalBundle:Default:md5.html.twig',array(
            "numero"=>$numero, 
            "md5"=>$md5
        ));
    }

    /**
     * Bloque de logout - termina la session del usuario
     * y carga la ventana de login
     * 
     * @Route("/seguridad/logout/", name="seguridad_logout")
     * 
     */
    public function logoutAction(Request $request) {
        $session = $request->getSession();
        $session->clear();      
        return $this->render('principalBundle:Default:index.html.twig'); 
    }

    /*public function md5Action(request $request)
    {
        //echo "md5 de ".$numero." es: ".md5($numero);
        return $this->render('principalBundle:Default:md5.html.twig',array(
            "numero"=>$request->get("numero"),
            "md5"=>md5($request->get('numero'))
        ));
    }*/
}
