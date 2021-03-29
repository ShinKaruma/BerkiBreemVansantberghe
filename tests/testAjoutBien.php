<?php
include_once '../modeles/mesFonctionsAccesAuxDonnees.php';

$lePdo = connexionBDD();

var_dump($lePdo);

$bdd->exec('INSERT INTO ajoutBien(IDb, Type, Desc, Jardin, Taille, NbPiece, Prix, Ville, Adresse) VALUES(2, 1, \'jsp\', \'non\', \'65m²\', 3, 125000, \'Lille\', \'5 rue oui\')');

var_dump($bdd);


