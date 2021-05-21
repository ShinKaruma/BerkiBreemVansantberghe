<?php

include_once '../modeles/mesFonctionsAccesAuxDonnees.php';

$lePdo = connexionBDD();

$randlink = randomlink();

$lien = "../PagesRecuperation/" . $randlink . ".php";

$myfile = fopen( $lien, "w") or die("Unable to open file!");



