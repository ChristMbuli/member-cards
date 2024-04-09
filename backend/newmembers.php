<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once 'connexion.php';


// Condition pour verifier si le button "add" a été appuyer 
if (isset($_POST['add'])) {
    //section pour verifier si les champs du formulais pour ajouter un nouveau membre ne sont pas vide
    if (
        !empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) &&
        !empty($_POST['phone']) && !empty($_FILES['profil']['name']) && !empty($_POST['adresse']) &&
        !empty($_POST['city'])
    ) {

        //stocker les informations entrée au formulaire dans les variables
        $fname = htmlspecialchars($_POST['fname']);
        $lname = htmlspecialchars($_POST['lname']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $adresse = htmlspecialchars($_POST['adresse']);
        $city = htmlspecialchars($_POST['city']);
        $action = 0;

        // Obtenez l'année en cours
        $date = date('Y');

        // Générez une lettre aléatoire entre A et Z
        $randomLetter = chr(rand(65, 90));

        // Générez un nombre aléatoire entre 1000 et 9999
        $randomNumber = rand(10000, 99999);

        // Combinez l'année en cours, la lettre aléatoire et le nombre aléatoire pour former le matricule
        $matricule = $randomLetter . $randomNumber . '/' . $date;


        // inserer le profil de membre 
        $picture = $_FILES['profil']['name'];
        $picture_tmp = $_FILES['profil']['tmp_name'];
        $picture_path = 'images/' . $picture;
        move_uploaded_file($picture_tmp, $picture_path);

        $ifMemberExists = $conn->prepare('SELECT * FROM members WHERE fname = ? AND lname = ? AND email = ? AND city = ?');
        $ifMemberExists->execute(array($fname, $lname, $email, $city));

        if ($ifMemberExists->rowCount() == 0) {


            //La requette poutr inserer les formation du formulaire dans la table
            $insertMembers = $conn->prepare('INSERT INTO members(fname, lname, email, phone, adresse, city, created_at, profil, matricule,action) VALUES(?,?,?,?,?,?,?,?,?,?)');
            $insertMembers->execute(array($fname, $lname, $email, $phone, $adresse, $city, $date, $picture_path, $matricule, $action));


            $SuccessMsg = "Demande envoyée avec success !";

        } else {
            $msgError = "Vous informations existe déjà !";
        }

    } else {
        $msgError = "Veillez completez tous les champs";
    }
}