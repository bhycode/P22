<?php

class Utilisateur {

    protected $id;
    protected $nom;
    protected $email;
    
    
    public function __construct($id, $nom, $email) {
        $this->id = $id;
        $this->nom = $nom;
        $this->email = $email;
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


    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     */
    public function setNom($nom): self
    {
        $this->nom = $nom;

        return $this;
    }


    // public function getData() {
    //     return $this->nom . " ". $this->email;
    // }
    







}
?>