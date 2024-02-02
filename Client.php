<?php

include ("Utilisateur.php");

class Client extends Utilisateur {

    private $clientsList = array();

    public function addClient($client) {
        $this->clientsList[] = $client;
    }

    public function clientConn($nom, $email) {

        $isClinetExist = false;
        foreach($this->$clientsList as $client) {
            if($client->getNom() == $nom && $client->getEmail()) {
                $isClinetExist = true;
            }
        }

        return $isClinetExist;
    }


    public function updateClient($clientUpdated) {
        
        foreach($this->clientsList as $key => $client) {
            if($client->getId() == $clientUpdated->getId()) {
                $this->clientsList[$key] = $client;
            }
        }

    }


}


?>