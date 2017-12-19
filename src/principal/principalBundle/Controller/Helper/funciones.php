<?php

namespace principal\principalBundle\Controller\Helper;

Class funciones{

	/**
	* verifica la permisologia que posee el usuario y retorna los valores de incluir, consultar, modificar 
	* y eliminar
	*/

	public static function verificaPermisologia($url,$perfil,$em){
		
		$modulo  = explode("/", $url);
		$conMod = $em->getRepository('principalBundle:Modulos')->findBy(array('nommodulo' => $modulo[1]));
        $conPF  = $em->getRepository('principalBundle:Perfil')->findBy(array('idperfil' => $perfil));
        return $permisologia = $em->getRepository('principalBundle:Permisologia')
        ->findBy(array('idperfil'=>$conPF[0]->getIdperfil(),'idmodulos'=>$conMod[0]->getIdModulos()));
	}

}