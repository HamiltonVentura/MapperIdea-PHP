<?php
public class Rua {

 public function __construct (nome  , CEP  , numero   ){
    this._nome = nome;
    this._CEP = CEP;
    this._numero = numero;
    }
 function setNome (nome) {
    $this->nome = nome;
}

 function getNome(  ) {
    return $this-> nome;
}

 function setCEP (CEP) {
    $this->CEP = CEP;
}

 function getCEP(  ) {
    return $this-> CEP;
}

 function setNumero (numero) {
    $this->numero = numero;
}

 function getNumero(  ) {
    return $this-> numero;
}

}
?>
