<?php

namespace AppBundle\Entity;

/**
 * Eventodeportista
 */
class Eventodeportista
{
    /**
     * @var integer
     */
    private $ideventodeportista;

    /**
     * @var string
     */
    private $puntaje;

    /**
     * @var string
     */
    private $logros;

    /**
     * @var string
     */
    private $rendimiento;

    /**
     * @var \AppBundle\Entity\Deportista
     */
    private $iddeportista;

    /**
     * @var \AppBundle\Entity\Deporte
     */
    private $iddeporte;


    /**
     * Get ideventodeportista
     *
     * @return integer
     */
    public function getIdeventodeportista()
    {
        return $this->ideventodeportista;
    }

    /**
     * Set puntaje
     *
     * @param string $puntaje
     *
     * @return Eventodeportista
     */
    public function setPuntaje($puntaje)
    {
        $this->puntaje = $puntaje;

        return $this;
    }

    /**
     * Get puntaje
     *
     * @return string
     */
    public function getPuntaje()
    {
        return $this->puntaje;
    }

    /**
     * Set logros
     *
     * @param string $logros
     *
     * @return Eventodeportista
     */
    public function setLogros($logros)
    {
        $this->logros = $logros;

        return $this;
    }

    /**
     * Get logros
     *
     * @return string
     */
    public function getLogros()
    {
        return $this->logros;
    }

    /**
     * Set rendimiento
     *
     * @param string $rendimiento
     *
     * @return Eventodeportista
     */
    public function setRendimiento($rendimiento)
    {
        $this->rendimiento = $rendimiento;

        return $this;
    }

    /**
     * Get rendimiento
     *
     * @return string
     */
    public function getRendimiento()
    {
        return $this->rendimiento;
    }

    /**
     * Set iddeportista
     *
     * @param \AppBundle\Entity\Deportista $iddeportista
     *
     * @return Eventodeportista
     */
    public function setIddeportista(\AppBundle\Entity\Deportista $iddeportista = null)
    {
        $this->iddeportista = $iddeportista;

        return $this;
    }

    /**
     * Get iddeportista
     *
     * @return \AppBundle\Entity\Deportista
     */
    public function getIddeportista()
    {
        return $this->iddeportista;
    }

    /**
     * Set iddeporte
     *
     * @param \AppBundle\Entity\Deporte $iddeporte
     *
     * @return Eventodeportista
     */
    public function setIddeporte(\AppBundle\Entity\Deporte $iddeporte = null)
    {
        $this->iddeporte = $iddeporte;

        return $this;
    }

    /**
     * Get iddeporte
     *
     * @return \AppBundle\Entity\Deporte
     */
    public function getIddeporte()
    {
        return $this->iddeporte;
    }
}

