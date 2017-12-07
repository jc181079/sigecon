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
        $consulta = $em->getRepository('principalBundle:Usuarios')
            			->findBy(array('login' => $request->get('login'),'clave'=> md5($request->get('clave'))));
        /* $query=$em->createQuery(
            " SELECT usu.idusuarios, usu.login, f.idfuncionaros, f.nombrefun, usu.idperfil ". 
            " FROM principalBundle:Usuarios usu INNER JOIN principalBundle:Funcionaros f  ".
            " ".
            "  WHERE usu.login='".$request->get('login')."' AND usu.clave='".md5($request->get('clave'))."'   ".
            "  AND f.idfuncionaros=usu.funcionaros");
        $consulta=$query->getResult();*/
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
            echo "SELECT usu.idusuarios, usu.login, f.idfuncionaros,f.nombrefun, usu.idperfil "; 
            echo " FROM principalBundle:Usuarios usu INNER JOIN principalBundle:Funcionaros f  ";
            echo " ";
            echo "  WHERE usu.login='".$request->get('login')."' AND usu.clave='".md5($request->get('clave'))."' AND usu.funcionaros=f.idfuncionaros  ";
            echo "  ";
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
            return $this->render('principalBundle:Default:index.html.twig');            
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
    /*public function md5Action(request $request)
    {
        //echo "md5 de ".$numero." es: ".md5($numero);
        return $this->render('principalBundle:Default:md5.html.twig',array(
            "numero"=>$request->get("numero"),
            "md5"=>md5($request->get('numero'))
        ));
    }*/
}
