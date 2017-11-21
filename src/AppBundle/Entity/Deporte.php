<?php

namespace AppBundle\Entity;

/**
 * Deporte
 */
class Deporte
{
    /**
     * @var integer
     */
    private $iddeporte;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $descripcion;


    /**
     * Get iddeporte
     *
     * @return integer
     */
    public function getIddeporte()
    {
        return $this->iddeporte;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Deporte
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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Deporte
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
}

