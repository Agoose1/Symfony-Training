<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alumno
 *
 * @ORM\Table(name="alumnos")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AlumnoRepository")
 */
class Alumno
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidoPaterno", type="string", length=100)
     */
    private $apellidoPaterno;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidoMaterno", type="string", length=100, nullable=true)
     */
    private $apellidoMaterno;

    /**
    * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Carrera")
    * @ORM\JoinColumn(name="carrera", referencedColumnName="id")
    */
    private $carrera;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Alumno
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellidoPaterno
     *
     * @param string $apellidoPaterno
     * @return Alumno
     */
    public function setApellidoPaterno($apellidoPaterno)
    {
        $this->apellidoPaterno = $apellidoPaterno;

        return $this;
    }

    /**
     * Get apellidoPaterno
     *
     * @return string
     */
    public function getApellidoPaterno()
    {
        return $this->apellidoPaterno;
    }

    /**
     * Set apellidoMaterno
     *
     * @param string $apellidoMaterno
     * @return Alumno
     */
    public function setApellidoMaterno($apellidoMaterno)
    {
        $this->apellidoMaterno = $apellidoMaterno;

        return $this;
    }

    /**
     * Get apellidoMaterno
     *
     * @return string
     */
    public function getApellidoMaterno()
    {
        return $this->apellidoMaterno;
    }

    /**
     * Set carrera
     *
     * @param \AppBundle\Entity\Carrera $carrera
     * @return Alumno
     */
    public function setCarrera(\AppBundle\Entity\Carrera $carrera)
    {
        $this->carrera = $carrera;

        return $this;
    }

    /**
     * Get carrera
     *
     * @return \AppBundle\Entity\Carrera $carrera
     */
    public function getCarrera()
    {
        return $this->carrera;
    }
}
