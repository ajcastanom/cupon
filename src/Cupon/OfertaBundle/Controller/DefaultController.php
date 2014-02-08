<?php

namespace Cupon\OfertaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DefaultController extends Controller
{
    public function portadaAction($ciudad = null)
    {
        if($ciudad == null){
            $ciudad = $this->container->getParameter('cupon.ciudad.por_defecto');
            return new RedirectResponse(
                    $this->generateUrl('portada', array('ciudad' => $ciudad))
                    );
        }
        $em = $this->getDoctrine()->getManager();
        
        $oferta = $em->getRepository('OfertaBundle:Oferta')->findBy(array(
            'id' => 1,
            'ciudad' => $ciudad
        ));
        
        return $this->render(
                'OfertaBundle:Default:portada.html.twig',
                array('oferta' =>   $oferta[0])
        );
    }
}
