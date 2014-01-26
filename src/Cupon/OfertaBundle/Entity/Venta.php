<?php

namespace Cupon\OfertaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name = "venta")
 */
class Venta{
    /**
     * @ORM\Column(type = "datetime")
     */
    private $fecha;
    
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity = "Cupon\OfertaBundle\Entity\Oferta")
     */
    private $oferta;
    
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity = "Cupon\UsuarioBundle\Entity\Usuario")
     */
    private $usuario;
    
    public function getFecha(){
        return $this->fecha;
    }
    
    public function setFecha($fecha){
        $this->fecha = $fecha;
    }
    
    public function getOferta(){
        return $this->oferta;
    }
    
    public function setOferta(\Cupon\OfertaBundle\Entity\Oferta $oferta = null){
        $this->oferta = $oferta;
    }
    
    public function getUsuario(){
        return $this->usuario;
    }
    
    public function setUsuario(\Cupon\UsuarioBundle\Entity\Usuario $usuario = null){
        $this->usuario = $usuario;
    }
}

