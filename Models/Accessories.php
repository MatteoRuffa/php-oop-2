<?php
class Accessories extends Product{
    public string $mobilio;
    public string $vestiario; 
    public function __construct($id, $nome_prodotto, $categoria, $icona, $prezzo, $stock, string $mobilio, string $vestiario){
        parent::__construct($id, $nome_prodotto, $categoria, $icona, $prezzo, $stock);
        $this->mobilio = $mobilio;
        $this->vestiario = $vestiario; 
    }
}
