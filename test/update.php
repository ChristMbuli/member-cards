<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once '../backend/connexion.php';

//Afficher les membres
$members = $conn->prepare('SELECT * FROM members');
$members->execute();

//Afficher les villes
$Citys = $conn->prepare('SELECT * FROM citys');
$Citys->execute();


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

    <table class="table table-borderless datatable">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom et Prénom</th>
                <th scope="col">Ville</th>
                <th scope="col">email</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($member = $members->fetch()) {
                if ($member['action'] == 0) { ?>

            <tr>
                <th scope="row"><a href="#">#
                        <?= $member['matricule'] ?>
                    </a></th>
                <td>
                    <?= $member['lname'] . ' ' . $member['fname'] ?>
                </td>
                <td>
                    <?= $member['city'] ?>
                </td>
                <td>
                    <?= $member['email'] ?>
                </td>
                <td>
                    <span class="badge bg-danger" data-bs-id="<?= $member['id_member'] ?>" data-bs-toggle="modal"
                        data-bs-target="#basicModal" style="cursor: pointer">en
                        attente...</span>
                </td>
            </tr>
            <?php }
            } ?>
            <!-- Modal -->
            <div class="modal fade" id="basicModal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Mettre à jours les informations</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Floating Labels Form -->
                            <div class="row">
                                <form class="row g-3">
                                    <input type="hidden" name="id" value="<?= $idMember ?>">

                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" value="<?= $member['fname'] ?>" class="form-control"
                                                id="floatingName" name="fname" placeholder="Prénom" readonly />
                                            <label for="floatingName">Prénom</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" value="<?= $member['lname'] ?>" class="form-control"
                                                name="lname" placeholder="Prénom" readonly />

                                            <label for="floatingEmail">Nom</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" value="<?= $member['email'] ?>" class="form-control"
                                                placeholder="Email" readonly />
                                            <label>Email</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="col-md-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" placeholder="Télephone"
                                                    value="<?= $member['phone'] ?>" readonly />
                                                <label>Télephone</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-4">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" name="fonction" id="floatingSelect"
                                                aria-label="State">
                                                <option>Ajoutez une fonction</option>
                                                <option value="Porte parole">Porte parole</option>
                                                <option value="Resp. Comm">Resp. Comm</option>
                                                <option value="Resp. Regional">Resp. Regional</option>
                                                <option value="Chargé Finance">Chargé Finance</option>
                                            </select>
                                            <label for="floatingSelect">Fonction</label>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                            <button type="submit" form="updateForm" class="btn btn-success">Sauvegarder</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Basic Modal-->
        </tbody>
    </table>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Sélectionnez tous les badges avec la classe 'badge'
        var badges = document.querySelectorAll('.badge.bg-danger');
        badges.forEach(function(badge) {
            badge.addEventListener('click', function() {
                // Récupérez l'ID du membre associé au badge
                var memberId = this.getAttribute('data-bs-id');

                // Faites une requête AJAX pour récupérer les informations du membre
                var xhr = new XMLHttpRequest();
                xhr.open('GET', '../backend/getmember.php?id=' + memberId, true);
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        var memberInfo = JSON.parse(xhr.responseText);

                        // Mettez à jour les champs du formulaire dans le modal avec les informations du membre
                        document.getElementById('fname').value = memberInfo.fname;
                        document.getElementById('lname').value = memberInfo.lname;
                        document.getElementById('email').value = memberInfo.email;
                        document.getElementById('phone').value = memberInfo.phone;

                        // Affichez le modal
                        var modal = new bootstrap.Modal(document.getElementById(
                            'basicModal'));
                        modal.show();
                    }
                };
                xhr.send();
            });
        });
    });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>