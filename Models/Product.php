<?php

// include_once __DIR__ . '/AnimalsCategory.php';

class Product {
    public int $id;
    public string $nome_prodotto;
    public $categoria;
    public $prezzo;
    public int $stock;
    
    public function __construct( $id, $nome_prodotto, $categoria, $prezzo, $stock) {
        $this->id = $id;
        $this->nome_prodotto = $nome_prodotto;
        $this->categoria = $categoria;
        $this->prezzo = $prezzo;
        $this->stock = $stock;
    }
    

}