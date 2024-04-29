<?php
// Connexion à la base de données
require_once 'connexion.php';

// Vérifiez si l'ID du membre est présent dans la requête
if (isset($_GET['id_member'])) {
    $memberId = $_GET['id_member'];

    // Préparez la requête SQL pour récupérer les informations du membre
    $stmt = $conn->prepare('SELECT * FROM members WHERE id_member = :id');
    $stmt->bindParam(':id', $memberId);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $req = $stmt->fetch();
        $fname = $req['fname'];
        $lname = $req['lname'];
        $email = $req['email'];
        $phone = $req['phone'];
        $adresse = $req['adresse'];
        $city = $req['city'];
        $createAt = $req['created_at'];
        $profil = $req['profil'];
        $mat = $req['matricule'];
        $fonc = $req['fonction'];
        $expiration = $req['expiration'];
    } else {
        echo "Aucun membre trouvé";
        exit; // Arrêter l'exécution du script si aucun membre n'est trouvé
    }

    // Mettre à jour les infos
    if (isset($_POST['save'])) {
        if (!empty($_POST['fonction'])) {
            $fonction = htmlspecialchars($_POST['fonction']);
            $actions = 1;
            $dateExpiration = date('d/m/Y', strtotime('+5 years'));

            // Mettre à jour les informations du membre
            $updateMember = $conn->prepare('UPDATE members SET action = ?, expiration = ?, fonction = ? WHERE id_member = ?');
            $updateMember->execute(array($actions, $dateExpiration, $fonction, $memberId));

            header("Location: index.php");
            exit; // Arrêter l'exécution du script après la redirection
        } else {
            $error_message = "Ajouter une fonction";
        }
    }
} else {
    echo "Erreur des donnée";
    exit; // Arrêter l'exécution du script si l'ID du membre n'est pas présent
}