<?php
require ('../../backend/login.php')
    ?>
<!DOCTYPE html>
<html lang="en">
<?php include ('./partials/head.php') ?>

<body>
    <main>
        <div class="container">

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="../index.php" class="logo d-flex align-items-center w-auto">
                                    <img src="./logo-parti.png" alt="">
                                    <span class="d-none d-lg-block">PJD</span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Connectez-vous</h5>
                                        <?php if (isset($msgError)) { ?>
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <?= $msgError ?>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                        <?php } ?>
                                    </div>

                                    <form class="row g-3 " method="post">

                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Email</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="text" name="email"
                                                    placeholder="jeune.dynamique.@exemple.io" class="form-control"
                                                    required>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Mor de passe</label>
                                            <input type="password" placeholder="........" name="mdp"
                                                class="form-control" id="yourPassword" required>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" name="connexion"
                                                type="submit">Connexion</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">Mot de passe oublier ? <a
                                                    href="pages-register.html">cliquez ici</a></p>
                                        </div>
                                    </form>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main>
</body>

</html>