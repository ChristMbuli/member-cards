<?php
require ('../../backend/security.php');

require ('../../backend/getmember.php')
    ?>
<!DOCTYPE html>
<html lang="en">
<?php include ('./partials/head.php') ?>

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
                    <li class="breadcrumb-item active">Dashboard</li>
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

                        <!-- Recent Sales -->
                        <section class="section">
                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Ajouter les informations</h5>

                                            <!-- General Form Elements -->
                                            <form method="post">
                                                <input type="hidden" name="id_member" value="<?= $memberId ?>">
                                                <div class="row mb-3">
                                                    <label for="inputText"
                                                        class="col-sm-2 col-form-label">Prénom</label>
                                                    <div class="col-sm-10">
                                                        <input readonly type="text" value="<?= $fname ?>"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <!-- Autres champs similaires pour le nom, le téléphone, etc. -->
                                                <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label">Fonction</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-select" name="fonction" id="floatingSelect"
                                                            aria-label="State">
                                                            <option>Ajoutez une fonction</option>
                                                            <option value="Porte parole">Porte parole</option>
                                                            <option value="Resp. Comm">Resp. Comm</option>
                                                            <option value="Resp. Regional">Resp. Regional</option>
                                                            <option value="Chargé Finance">Chargé Finance</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <?php if (isset($error_message)): ?>
                                                <div class="row mb-3">
                                                    <div class="col-sm-10 offset-sm-2">
                                                        <div class="alert alert-danger" role="alert">
                                                            <?= $error_message ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                                <div class="row mb-3">
                                                    <div class="col-sm-5">
                                                        <a href="index.php" class="btn btn-danger">Annuler</a>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <button type="submit" name="save"
                                                            class="btn btn-primary">Sauvegarder</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- End General Form Elements -->

                                        </div>
                                    </div>

                                </div>


                            </div>
                        </section>

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