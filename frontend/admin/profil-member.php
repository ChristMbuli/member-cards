<?php require ('../../backend/security.php');

require ('../../backend/getmember.php')

    ?>
<!DOCTYPE html>
<html lang="en">
<?php include ('./partials/head.php') ?>

<style>
.mat {
    margin-top: 8.8%;
    margin-left: 36%;
    color: white;
    font-weight: bold;
    text-transform: uppercase;
}

.profil {
    margin-left: 5%;
    margin-top: 4rem;
}

.profil img {
    width: 170px;
    height: 170px;

}

.lname {
    margin-top: -9.1rem;
    margin-left: 55%;
    font-size: 1rem;
    color: white;
    text-transform: uppercase;
    font-weight: bold;
}

.fname {
    margin-top: -1.2%;
    margin-left: 59%;
    font-size: 1rem;
    color: white;
    text-transform: uppercase;
    font-weight: bold;
}

.fonct {
    margin-top: -1%;
    margin-left: 59%;
    font-size: 1rem;
    color: white;
    text-transform: uppercase;
    font-weight: bold;
}

.phone {
    margin-top: -1.5%;
    margin-left: 61%;
    font-size: 1rem;
    color: white;
    text-transform: uppercase;
    font-weight: bold;
}

.expiration {
    margin-top: -1%;
    margin-left: 70%;
    font-size: 1rem;
    color: white;
    text-transform: uppercase;
    font-weight: bold;
}
</style>

<body>
    <!-- ======= Header ======= -->
    <?php include ('./partials/header.php') ?>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <?php include ('./partials/sidebar.php') ?>
    <!-- End Sidebar-->

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="members.php">Membres</a></li>

                    <li class="breadcrumb-item active">Profil : <?= $fname . ' ' . $lname ?></li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">
                        <!-- Customers Card -->
                        <div class="col-xxl-4 col-xl-6">
                            <div class="card info-card customers-card">
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><span>| </span>Nouvelles demande</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>1244</h6>
                                            <span class="text-muted small pt-2 ps-1">Toute ville</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-6">
                            <div class="card info-card customers-card">
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>

                                </div>

                                <div class="card-body">
                                    <h5 class="card-title"><span>| </span>Membres</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>1244</h6>
                                            <span class="text-muted small pt-2 ps-1">Toute ville</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Customers Card -->
                        <section class="section profile">
                            <div class="row">
                                <div class="col-xl-4">

                                    <div class="card">
                                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                                            <img src="../<?= $profil ?>" alt="Profile" class="rounded-circle">
                                            <h2><?= $fname . ' ' . $lname ?></h2>
                                            <h3><?= $fonc ?></h3>
                                            <div class="social-links mt-2">
                                                <p class="fw-bold"><?= $mat ?></p>
                                                <p><?= $expiration ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-8">

                                    <div class="card">
                                        <div class="card-body pt-3">
                                            <!-- Bordered Tabs -->
                                            <ul class="nav nav-tabs nav-tabs-bordered">

                                                <li class="nav-item">
                                                    <button class="nav-link active" data-bs-toggle="tab"
                                                        data-bs-target="#profile-overview">Aperçu</button>
                                                </li>

                                                <li class="nav-item">
                                                    <button class="nav-link" data-bs-toggle="tab"
                                                        data-bs-target="#profile-edit">Editer profil</button>
                                                </li>

                                                <li class="nav-item">
                                                    <button class="nav-link" data-bs-toggle="tab"
                                                        data-bs-target="#profile-settings">Carte membre</button>
                                                </li>

                                            </ul>
                                            <div class="tab-content pt-2">

                                                <div class="tab-pane fade show active profile-overview"
                                                    id="profile-overview">
                                                    <h5 class="card-title">A propos</h5>
                                                    <p class="small fst-italic">Sunt est soluta temporibus accusantium
                                                        neque nam maiores cumque temporibus. Tempora libero non est unde
                                                        veniam est qui dolor. Ut sunt iure rerum quae quisquam autem
                                                        eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>

                                                    <h5 class="card-title">Détails du profil</h5>

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 label ">Nom et prénom</div>
                                                        <div class="col-lg-9 col-md-8"><?= $lname . ' ' . $fname ?>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 label">Télephone</div>
                                                        <div class="col-lg-9 col-md-8"><?= $phone ?>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 label">E-mail</div>
                                                        <div class="col-lg-9 col-md-8"><?= $email ?></div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 label">Ville</div>
                                                        <div class="col-lg-9 col-md-8"><?= $city ?></div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 label">Adress</div>
                                                        <div class="col-lg-9 col-md-8"><?= $adresse ?></div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 label">Année Adhésion</div>
                                                        <div class="col-lg-9 col-md-8"><?= $createAt ?></div>
                                                    </div>

                                                </div>

                                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                                    <!-- Profile Edit Form -->
                                                    <form>
                                                        <div class="row mb-3">
                                                            <label for="profileImage"
                                                                class="col-md-4 col-lg-3 col-form-label">Profile
                                                                Image</label>
                                                            <div class="col-md-8 col-lg-9">
                                                                <img src="../<?= $profil ?>" alt="Profile">
                                                                <div class="pt-2">
                                                                    <a href="#" type="file"
                                                                        class="btn btn-primary btn-sm"
                                                                        title="Upload new profile image"><i
                                                                            class="bi bi-upload"></i></a>
                                                                    <a href="#" class="btn btn-danger btn-sm"
                                                                        title="Remove my profile image"><i
                                                                            class="bi bi-trash"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label for="fullName"
                                                                class="col-md-4 col-lg-3 col-form-label">Nom et
                                                                Prénom</label>
                                                            <div class="col-md-8 col-lg-9">
                                                                <input name="fullName" type="text" class="form-control"
                                                                    id="fullName" value="<?= $lname . ' ' . $fname ?>">
                                                            </div>
                                                        </div>

                                                        <div class="text-center">
                                                            <button type="submit"
                                                                class="btn btn-primary">Suvegarder</button>
                                                        </div>
                                                    </form>
                                                    <!-- End Profile Edit Form -->

                                                </div>

                                                <!-- Carte membre -->
                                                <div class="tab-pane fade pt-3"
                                                    style="background-image: url('../images/membre.png');background-size: cover; height:73vh"
                                                    id="profile-settings">

                                                    <div>
                                                        <div class="mat">
                                                            <p><?= $mat ?></p>
                                                        </div>
                                                        <div class="profil">
                                                            <img src="../<?= $profil ?>" class="rounded-lg" alt="">
                                                        </div>
                                                        <div class="lname">
                                                            <p><?= $lname ?></p>
                                                        </div>
                                                        <div class="fname">
                                                            <p><?= $fname ?></p>
                                                        </div>
                                                        <div class="fonct">
                                                            <p><?= $fonc ?></p>
                                                        </div>
                                                        <div class="phone">
                                                            <p><?= $phone ?></p>
                                                        </div>
                                                        <div class="expiration">
                                                            <p><?= $expiration ?></p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- Fin carte membre -->
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </section>
                        <!-- Recent Sales -->


                        <!-- End Recent Sales -->
                    </div>
                </div>
                <!-- End Left side columns -->
            </div>
        </section>
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>PJD</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by
            <a href="https://mrcode-six.vercel.app/index.html" target="_blank">Mr.Code</a>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>