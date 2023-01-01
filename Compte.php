<?php

class Compte{
    private string $_comptecou;
    private int $_solde;
    private string $_devise;
    private titulaire $_titunique;

    


public function __construct(string $comptecou, int $solde,string $devise, titulaire $titunique)
{
    $this->_comptecou = $comptecou;
    $this->_solde = $solde;
    $this->_devise = $devise;
    $this->_titunique = $titunique;
    $this->_titunique->addCompte($this);    

}


public function getComptecou()
{
    return $this->_comptecou;
}

public function setCompteCou($comptecou)
{
    $this->_comptecou = $comptecou;
    return $this;
}

public function getSolde()
{
    return $this->_solde;
}

public function setSolde()
{
    $this->_solde;
    return $this;
}

public function getDevise()
{
    return $this->_devise;
}

public function setDevise($devise)
{
    $this->_devise = $devise;
    return $this;
}

public function getTitunique()
{
    return $this->_titunique;
}

public function setTitunique($titunique)
{
    $this->_titunique;
    return $this; 
}

public function __tostring()
{
    return  $this->_comptecou;
}

public function crediter($somme)
{
    
    echo" Le compte N°".$this->_comptecou. " est crédité de ".$somme."<br>";
    echo "Le nouveau solde est de" ." ".  $this->setSolde = ($this->getSolde()+$somme)."<br>";
}

public function debiter($somme)
{
    echo" Le compte N°".$this->_comptecou. " est débité de ".$somme."<br>";
    echo "Le nouveau solde est de" ." ".  $this->setSolde = ($this->getSolde()-$somme)."<br>";
}

public function virement($compte2,$montant)
{
  
   echo" Le compte N°".$this->_comptecou." ". "a effectué un virement de ".$montant." "."au compte N°" ." " .$compte2."<br>";
   echo "Le nouveau solde est de" ." ".  $this->setSolde = ($this->getSolde()+$montant);
}

}

