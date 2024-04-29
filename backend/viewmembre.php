<?php
require_once 'connexion.php';

//Afficher les membres
$members = $conn->prepare('SELECT * FROM members');
$members->execute();


//compter le nombre des membre dont la colonne action = 1 :