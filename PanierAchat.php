<?php

include("GestionnairePanier.php");


class PanierAchat implements GestionnairePanier {


    private $productsList = array();


    public function addProducts($product) {
        $this->productsList[] = $product;
    }


    public function montantTotal() {
        $totalPrice = 0;
        foreach ($this->productsList as $product) {
            $totalPrice += $product->getPrix();
        }
        return $totalPrice;
    }


}




?>