<?php


class ProduitNumerique {

    private $numProductsList = array();


    public function displayAllProducts() {
        foreach ($this->numProductsList as $numProduct) {
            print_r($numProduct->getData());
            print_r("       ++++++++++      ");
        }
    }


    public function getProductById($id) {
        foreach ($this->numProductsList as $numProduct) {
            if($numProduct->getId() == $id) {
                print_r($numProduct->getData());
            }
        }
    }


    


    




}





?>