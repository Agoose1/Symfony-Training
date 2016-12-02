<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Alumno;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Alumno controller.
 *
 * @Route("alumno")
 */
class AlumnoController extends Controller
{
    /**
     * Obtener una lista de todos los alumnos.
     *
     * @Route("/", name="alumno_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $alumnos = $em->getRepository('AppBundle:Alumno')->findAll();

        return $this->render('alumno/index.html.twig', array(
            'alumnos' => $alumnos,
        ));
    }

    /**
     * Consultar y mostrar un registro especifico.
     *
     * @Route("/{id}", name="alumno_show")
     * @Method("GET")
     */
    public function showAction(Alumno $alumno)
    {

        return $this->render('alumno/show.html.twig', array(
            'alumno' => $alumno,
        ));
    }
}
