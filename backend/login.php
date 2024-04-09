<?php
session_start();
require_once 'connexion.php';

// Section pour valider le formulaire d'inscription admin
if (isset($_POST['connexion'])) {
    //Verifier si l'admin à remplis tous les champs du formulaire
    if (!empty($_POST['email']) && !empty($_POST['mdp'])) {

        //Stocker les donnée entrée dans les variable
        $Email = htmlspecialchars($_POST['email']);
        $Mdp = htmlspecialchars($_POST['mdp']);

        //Verifier si le peuso de l'admin existe
        $checkIfAdmin = $conn->prepare('SELECT * FROM admins WHERE email = :email');
        $checkIfAdmin->execute(array('email' => $Email));


        // la méthode rowcount nous permet de compter les nombre des donnée entré par l'admin
        if ($checkIfAdmin->rowCount() > 0) {

            //recuperer toutes les infos admin est stocker dans un tabelau
            $adminInfos = $checkIfAdmin->fetch();

            //Section pour verifier si le mot de passe entrer par l'admin correspond à celui de la BD
            if (password_verify($Mdp, $adminInfos['password'])) {

                //Section pour authentifier l'admin sur la plateforme avec les session
                $_SESSION['admin'] = true;
                $_SESSION['id'] = $adminInfos['id'];
                $_SESSION['fullname'] = $adminInfos['fname'];
                $_SESSION['contact'] = $adminInfos['email'];

                //Si les information entrée sont correct, on fait la redirection vers la page d'accueil
                header('Location: index.php');

            } else {
                $msgError = "Coordonnées introuvable";
            }

        } else {
            $msgError = "Coordonnées introuvable";
        }

    } else {
        $msgError = "Compte introuvable";
    }
}
?>