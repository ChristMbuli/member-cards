<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require ('../backend/newmembers.php');
require ('../backend/allcity.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" class="formulaire" enctype="multipart/form-data">
        <h3>Comment Devenir Membre?</h3>

        <div class="row gy-3">
            <?php if (isset($msgError)) { ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= $msgError ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>


            <div class="col-md-6">
                <input type="text" name="lname" class="form-control" placeholder="Nom" />
            </div>
            <div class="col-md-6">
                <input type="text" name="fname" class="form-control" placeholder="Prénom" />
            </div>

            <div class="col-md-6">
                <input type="text" class="form-control" name="adresse" placeholder="Adresse" />
            </div>

            <div class="col-md-6">
                <select name="city" class="form-control">
                    <option>Choisir votre ville</option>
                    <?php while ($city = $Citys->fetch()) { ?>
                        <option value="<?= $city['city_name'] ?>">
                            <?= $city['city_name'] ?>
                        </option>
                    <?php } ?>

                </select>

            </div>

            <div class="col-md-6">
                <input type="text" class="form-control" name="phone" placeholder="Téléphone" />
            </div>
            <div class="col-md-6">
                <input type="email" class="form-control" name="email" placeholder="email" />
            </div>

            <div class="col-md-12">
                <input type="file" class="form-control" name="profil" placeholder="Profil" />
                <span style="font-size: 14px;">Lorem ipsum dolor sit amet.</span>
            </div>

            <?php if (isset($SuccessMsg)) { ?>
                <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
                    <?= $SuccessMsg ?>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                        aria-label="Close"></button>
                </div>
            <?php } else { ?>
                <div class="col-md-12 text-center">
                    <button name="add" class="btn btn-primary" type="submit">Envoyer</button>
                </div>
            <?php } ?>

        </div>
    </form>
</body>

</html>