<?php

class Titulaire
{
    private string $_nom;
    private string $_prenom;
    private string $_datenaissance;
    private string $_ville;
    private array $_comptecou;
    

public function __construct( string $nom, string $prenom, string $datenaissance, string $ville )
{
    $this->_nom = $nom;
    $this->_prenom  = $prenom;
    $this->_datenaissance = $datenaissance;
    $this->_ville = $ville;
    $this->_comptecou = [];
    
}

public function addCompte($comptecou)
{
    $this->_comptecou[] = $comptecou;
}  

public function getNom()
{
    return $this->_nom;
}

public function setNom ($nom)
{
    $this->_nom= $nom;
    return $this;
}

public function getprenom()
{
    return $this->_prenom;
}

public function set_prenom($_prenom)
{
    $this->_prenom = $_prenom;

    return $this;
}

public function getDatenaissance()
{
    return $this->_datenaissance;
}

public function setDatenaissance($datenaissance)
{
    $this->_datenaissance = $datenaissance;
    return $this;
}

public function getVille()
{
    return $this->_ville;
}

public function setVille($ville)
{
    $this->_ville = $ville;
    return $this;
}

public function __tostring()
{
    return  $this->_comptecou;
}

/*public function __toString()
{
    return "Le nom :". $this->getNom(). "<br>". "Le prénom :". $this->getPrenom()."<br>"."Date de naissance :". $this->getDatenaissance().
     "<br>". "Ville :". $this->getVille."<br>"; 
}*/


          /*FUNCTION POUR CALCULER L'AGE DU CLIENT*/
public function age()
{
    $datenaissance = date_create($this->_datenaissance);
    $aujourdhui = date("Y-m-d");
    $age = date_diff($datenaissance, date_create($aujourdhui));
    return $age->format('%y');
}

          /*AFFICHER INFORMATION CLIENT ET NUMERO COMPTE*/
public function afficherinformation()
{
    echo "Le Nom :". $this->getNom(). "<br>". "Le Prénom :". $this->getPrenom()."<br>"."Age:".$this->age()."Ans". "<br>". "Ville :". $this->getVille()."<br>"."Compte :<br>";

    foreach($this->_comptecou as $comptecou)
    {
        echo $comptecou."<br>";
    }
}

}











































    


