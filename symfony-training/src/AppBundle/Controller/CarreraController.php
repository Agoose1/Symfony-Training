<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Carrera;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Carrera controller.
 *
 * @Route("carrera")
 */
class CarreraController extends Controller
{
    /**
     * Obtener una lista de todas las carreras.
     *
     * @Route("/", name="carrera_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $carreras = $em->getRepository('AppBundle:Carrera')->findAll();

        return $this->render('carrera/index.html.twig', array(
            'carreras' => $carreras,
        ));
    }

    /**
     * Consultar y mostrar un registro especifico.
     *
     * @Route("/{id}", name="carrera_show")
     * @Method("GET")
     */
    public function showAction(Carrera $carrera)
    {

        return $this->render('carrera/show.html.twig', array(
            'carrera' => $carrera,
        ));
    }
}
