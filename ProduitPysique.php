<?php

class ProduitPysique {

    private $pysProductsList = array();


    public function displayAllProducts() {
        foreach ($this->pysProductsList as $pysProduct) {
            print_r($pysProduct->getData());
            print_r("       ++++++++++      ");
        }
    }


    public function getProductById($id) {
        foreach($pysProductsList as $pysProduct) {
            if ($pysProduct->getId() == $id) {
                print_r($pysProduct->getData());
            }
        }
    }


    


}




?>