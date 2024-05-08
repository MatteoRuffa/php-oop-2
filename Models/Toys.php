<?php

include_once __DIR__ . '/Product.php';

class Toys extends Product{
    public string $dimensioni; 
    public string $colore; 
    
    public function __construct($id, $nome_prodotto, $categoria, $icona, $prezzo, $stock, string $dimensioni, string $colore) {
        parent::__construct($id, $nome_prodotto, $categoria, $icona, $prezzo, $stock); 
        $this->dimensioni = $dimensioni;
        $this->colore = $colore;
    }
}