<?php

class Commande {

    private $commandeId;
    private $clientId;
    private $status;
    private $date;


    private $commandesList = array();


    public function __construct($commandeId, $clientId, $status, $date) {
        $this->commandeId = $commandeId;
        $this->clientId = $clientId;
        $this->status = $status;
        $this->date = $date;
    }

    public function getData() {
        return $this->commandeId . " " . $this->clientId . " " . $this-> status . " " . $this->date;
    }

    public function addCommand($command) {
        $this->commandesList[] = $command;
    }





    public function updateCommandStatus($id, $status) {
        foreach( $this->commandesList as $key => $command ) {
            if( $command->getId() == $id ) {
                $this->commandesList[ $key ] = $status;
            }
        }
    }

    public function displayCommands() {
        foreach( $this->commandesList as $command ) {
            print_r($command->getData());
        }
    }


}


?>