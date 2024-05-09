<?php

include_once __DIR__ . '/Product.php';


    class Toys extends Product {

        public string $dimensioni;
        public string $colore;
    
        public function __construct($id,
        $nome_prodotto,
        $categoria,
        $prezzo,
        $stock,
        $icona_immagine,
        $dimensioni,
        $colore)
        {
            parent::__construct($id, $nome_prodotto, $categoria, $prezzo, $stock, $icona_immagine);
            $this->dimensioni = $dimensioni;
            $this->colore = $colore;
        }
    public static function fetchToys(){
        $data =  file_get_contents(__DIR__ . '/toys_db.json');
        $dataToArray = json_decode($data, true);

        $toys = [];
        foreach ($dataToArray as $key => $value) {
            //if ($category === null || $value['categoria']['nome'] === $category) {
                $toys[] = new Toys(
                    $value['id'],
                    $value['nome_prodotto'],
                    $value['categoria'],
                    (float)$value['prezzo'],
                    $value['stock'],
                    $value['icona_immagine'],
                    $value['dimensioni'],
                    $value['colore']);
        }
        return $toys;
    
        
}
};




/*

*/