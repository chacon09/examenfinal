<?php

namespace AppBundle\Entity;

/**
 * Deportista
 */
class Deportista
{
    /**
     * @var integer
     */
    private $iddeportista;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $nacionalidad;

    /**
     * @var integer
     */
    private $edad;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var string
     */
    private $email;


    /**
     * Get iddeportista
     *
     * @return integer
     */
    public function getIddeportista()
    {
        return $this->iddeportista;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Deportista
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

  
  public function __tostring()
    {
        return $this->nombre;
    }


    /**
     * Set nacionalidad
     *
     * @param string $nacionalidad
     *
     * @return Deportista
     */
    public function setNacionalidad($nacionalidad)
    {
        $this->nacionalidad = $nacionalidad;

        return $this;
    }

    /**
     * Get nacionalidad
     *
     * @return string
     */
    public function getNacionalidad()
    {
        return $this->nacionalidad;
    }

    /**
     * Set edad
     *
     * @param integer $edad
     *
     * @return Deportista
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return integer
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Deportista
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Deportista
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
}

