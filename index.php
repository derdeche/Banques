<h1>POO-Banque</h1>

<p>Un compte bancaire est composé des éléments suivants :<br>Un libellé (compte courant, livret A, ...)<br>Un solde initial<br>Une devise monétaire<br>Un titulaire unique<br></p>
<p>Un titulaire comporte :<br>Un nom <br>Un prénom <br>Une date de naissance<br>Une ville<br>L'ensemble de ses comptes bancaires.<br>
Sur un compte bancaire, on doit pouvoir :<br>éditer le compte de X euros<br>Débiter le compte de X euros<br>Effectuer un virement d'un compte à l'autre.<br>
On doit pouvoir :<br>Affichertoutes  les  informations  d'un(e)  titulaire  (dont  l'âge)  et  l'ensemble  des  comptes appartenant à celui(celle)-ci.<br>
Afficher  toutes  les  informations  d'un  compte  bancaire,  notamment  le  nom  /  prénom  du titulaire du compte.<br></p>

<h2>Résultat</h2>

<?php

require_once "titulaire.php";
require_once "compte.php";

$titulaire1 = new titulaire ("Jean","TRAVOLTA","15-06-1959","Strasbourg");

$compte1 = new compte (1259856325,100,"£",$titulaire1);
$compte2 = new compte (2589652314,200,"£",$titulaire1);
$compte3 = new compte (2589654789,300,"£",$titulaire1);
/*echo $titulaire1->age();*/

$titulaire1->afficherinformation();

$compte1->crediter(100);

$compte2->debiter(50);

/*$compte2->crediter(500);*/







