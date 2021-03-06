<?php

namespace Cupon\TiendaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Cupon\OfertaBundle\Util\Util;

/**
 * @ORM\Entity
 * @ORM\Table(name="tienda")
 */
class Tienda{
    /**
     *  @ORM\Id
     *  @ORM\Column(name = "id", type = "integer")
     *  @ORM\GeneratedValue 
     */
    private $id;
    
    /**
     *  @ORM\Column(name = "nombre", type ="string", length = 100) 
     */
    private $nombre;
    
    /**
     *  @ORM\Column(name = "slug", type ="string", length = 100) 
     */
    private $slug;
    
    /**
     *  @ORM\Column(name = "login", type ="string", length = 10) 
     */
    private $login;
    
    /**
     *  @ORM\Column(name = "password", type ="string", length = 255) 
     */
    private $password;
    
    /**
     *  @ORM\Column(name = "salt", type ="string", length = 255) 
     */
    private $salt;
    
    /**
     *  @ORM\Column(name = "descripcion", type ="text") 
     */
    private $descripcion;
    
    /**
     *  @ORM\Column(name = "direccion", type ="text") 
     */
    private $direccion;
    
    /** 
     *  @ORM\ManyToOne(targetEntity = "Cupon\CiudadBundle\Entity\Ciudad")
     */
    private $ciudad;

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
     * @return Tienda
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        $this->slug = Util::getSlug($nombre);
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
     * Set slug
     *
     * @param string $slug
     * @return Tienda
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return Tienda
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Tienda
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return Tienda
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Tienda
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

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Tienda
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set ciudad
     *
     * @param \Cupon\CiudadBundle\Entity\Ciudad $ciudad
     * @return Tienda
     */
    public function setCiudad(\Cupon\CiudadBundle\Entity\Ciudad $ciudad = null)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return \Cupon\CiudadBundle\Entity\Ciudad 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }
    
    public function __toString(){
        return $this->getNombre();
    }
}
