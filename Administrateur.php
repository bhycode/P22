<?php

include ("Utilisateur.php");

class Administrateur extends Utilisateur {

    private $adminsList = array();

    public function addAdmin($admin) {
        $this->$adminsList[] = $admin;
    }

    public function adminConn($nom, $email) {

        $isAdminExist = false;
        foreach($this->$adminsList as $admin) {
            if($admin->getNom() == $nom && $admin->getEmail()) {
                $isAdminExist = true;
            }
        }

        return $isAdminExist;
    }


    public function updateAdmin($adminUpdated) {
        foreach($this->$adminsList as $key => $admin) {
            if($admin->getId()) {
                $this->$adminsList[$key] = $admin;
            }
        }
    }




}


?>