<?php
require_once 'connexion.php';



//Afficher les villes
$Citys = $conn->prepare('SELECT * FROM citys');
$Citys->execute();