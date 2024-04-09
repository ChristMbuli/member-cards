<?php require ('../../backend/register.php') ?>
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
                                        <h5 class="card-title text-center pb-0 fs-4">Enregistrez-vous</h5>

                                    </div>

                                    <form class="row g-3 " method="post">
                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Nom et Prénom</label>
                                            <div class="input-group ">
                                                <input type="text" name="fname" placeholder="Jeune Dynamique"
                                                    class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <labelclass="form-label">Email</label>
                                                <div class="input-group ">
                                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                    <input type="text" name="email"
                                                        placeholder="jeune.dynamique.@exemple.io" class="form-control"
                                                        required>
                                                </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Mor de passe</label>
                                            <input type="password" placeholder="********" name="mdp"
                                                class="form-control" id="yourPassword" required>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" name="register"
                                                type="submit">Inscription</button>
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