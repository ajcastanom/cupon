<?php

namespace Cupon\CiudadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Cupon\OfertaBundle\Util\Util;

/**
 * @ORM\Entity
 * @ORM\Table(name="ciudad")
 */
class Ciudad{
    /**
     *  @ORM\Id
     *  @ORM\Column(name = "id", type = "integer") 
     *  @ORM\GeneratedValue
     */
    private $id;
    
    /**
     *  @ORM\Column(name = "nombre", type = "string", length = 100) 
     */
    private $nombre;
    
    /**
     *  @ORM\Column(name = "slug", type = "string", length = 100) 
     */
    private $slug;
    
    public function getId(){
        return $this->id;
    }
    
    public function setId($id){
        $this->id = $id;
    }
    
    public function getNombre(){
        return $this->nombre;
    }
    
    public function setNombre($nombre){
        $this->nombre = $nombre;
        $this->slug = Util::getSlug($nombre);
    }
    
    public function getSlug(){
        return $this->slug;
    }
    
    public function setSlug($slug){
        $this->slug = $slug;
    }
    
    public function __toString() {
        return $this->getNombre();
    }
}

