<?php
session_start();
require_once 'connexion.php';


// Section pour valider le formulaire d'inscription admin
if (isset($_POST['register'])) {

    //Verifier si l'admin à remplis tous les champs du formulaire
    if (!empty($_POST['fname']) && !empty($_POST['email']) && !empty($_POST['mdp'])) {

        //Stocker les donnée entrée dans les variable
        $fname = htmlspecialchars($_POST['fname']);
        $email = htmlspecialchars($_POST['email']);
        $adminMdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

        $date = date('d/m/Y');

        // Section pour verifier si l'admin existe déjà dans la plateforme
        $ifAdminExists = $conn->prepare('SELECT email FROM admins WHERE email = ?');
        $ifAdminExists->execute(array($email));

        if ($ifAdminExists->rowCount() == 0) {

            // Section pour inserer les donnée de l'admin dans la base de donnée
            $insertAdmin = $conn->prepare('INSERT INTO admins (fname , email, password, created_at) VALUES (?, ?, ?, ?)');
            $insertAdmin->execute(array($fname, $email, $adminMdp, $date));

            // Section permet de recuperer les donnée de l'admin authentifier
            $reqAdminInfos = $conn->prepare('SELECT id, fname, email FROM admins WHERE fname = ? AND email = ? ');
            $reqAdminInfos->execute(array($fname, $email));

            //stocker les informations admin dans un tableau  dans une variable 
            $sessionAdminInfos = $reqAdminInfos->fetch();

            //Section pour authentifier l'admin sur la plateforme avec les session
            $_SESSION['admin'] = true;
            $_SESSION['id'] = $sessionAdminInfos['id'];
            $_SESSION['firstname'] = $sessionAdminInfos['fname'];
            $_SESSION['email'] = $sessionAdminInfos['email'];



            header('Location: signin.php');
        } else {
            $msgError = "Erreur Connexion";
        }
    } else {
        $msgError = "Veillez completez tous les champs";
    }
}