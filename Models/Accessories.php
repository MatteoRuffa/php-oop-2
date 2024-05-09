<?php
class Accessories extends Product{
    public string $mobilio;
    public string $vestiario; 
    public function __construct($id, $nome_prodotto, $categoria, $icona, $prezzo, $stock, string $mobilio, string $vestiario){
        parent::__construct($id, $nome_prodotto, $categoria, $icona, $prezzo, $stock);
        $this->mobilio = $mobilio;
        $this->vestiario = $vestiario; 
    }
    public static function fetchAccessories(){
        $data =  file_get_contents(__DIR__ . '/accessories_db.json');
        $dataToArray = json_decode($data, true);

        $accessories = [];
        foreach ($dataToArray as $key => $value) {
            //if ($category === null || $value['categoria']['nome'] === $category) {
                $accessories[] = new Accessories(
                    $value['id'],
                    $value['nome_prodotto'],
                    $value['categoria'],
                    (float)$value['prezzo'],
                    $value['stock'],
                    $value['icona_immagine'],
                    $value['mobilio'],
                    $value['vestiario']);
        }
        return $accessories;
    
        
}
}
