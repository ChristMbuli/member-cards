<?php
require ('../../backend/security.php');

require ('../../backend/viewmembre.php');
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
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">
                                        <span>| </span> Nouveaux demandes
                                    </h5>

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
                                                    <a href="update.php?id_member=<?= $member['id_member'] ?>"
                                                        style="cursor: pointer">en
                                                        attente...</a>
                                                </td>
                                            </tr>
                                            <?php }
                                            } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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