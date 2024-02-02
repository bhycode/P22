<?php

abstract class Produit {

    protected $id;
    protected $nom;
    protected $prix;
    protected $stock;


    public function __construct($id, $nom, $prix, $stock) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prix = $prix;
        $this->stock = $stock;
    }


    public function getData() {
        return $this->$id . " ". $this->nom ." ". $this->prix . " ". $this->stock;
    }



    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }
}



?>