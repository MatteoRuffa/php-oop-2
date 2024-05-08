<?php
include_once __DIR__ . '/Product.php';

class Food extends Product {

    public float $peso;
    public string $tipo;

    public function __construct($id, $nome_prodotto, $categoria, $icona, $prezzo, $stock, float $peso, string $tipo){
        parent::__construct($id, $nome_prodotto, $categoria, $icona, $prezzo, $stock);
        $this->peso = $peso;
        $this->tipo = $tipo;
    }

    //metodo che prende i dati dal database e li inserisce in un array php
    public static function fetchFood(){
        $data =  file_get_contents(__DIR__ . '/food_db.json');
        $dataToArray = json_decode($data, true);

        $foods = [];
        foreach ($dataToArray as $key => $value) {
            
            $foods[] = new Food($value['id'], $value['nome_prodotto'], $value['categoria']['nome'], $value['categoria']['icona'], (int)$value['prezzo'], $value['stock'], $value['peso'], $value['tipo']);
            
        }
        return $foods;
        
    }
    
}

