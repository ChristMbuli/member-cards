<?php
// Vérifie si l'URL actuelle correspond à 'members.php'
$isMembersPage = basename($_SERVER['PHP_SELF']) === 'members.php';
$isDashboardPage = basename($_SERVER['PHP_SELF']) === 'index.php' || 'update.php';
$isCityPage = basename($_SERVER['PHP_SELF']) === 'all-city.php';

?>
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link <?php echo $isDashboardPage ? '' : 'collapsed'; ?>" href="index.php">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link <?php echo $isMembersPage ? '' : 'collapsed'; ?>" href="members.php">
                <i class="bi bi-people"></i>
                <span>Membres</span>
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link <?php echo $isCityPage ? '' : 'collapsed'; ?>" href="all-city.php">
                <i class="bi bi-globe"></i>
                <span>Ville</span>
            </a>
        </li>
        <!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-calendar"></i>
                <span>Calendrier</span>
            </a>
        </li>
        <!-- End F.A.Q Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-envelope"></i>
                <span>Message</span>
            </a>
        </li>
        <!-- End Contact Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-card-list"></i>
                <span>Blog</span>
            </a>
        </li>
        <!-- End Register Page Nav -->

        <!-- End Login Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-book"></i>
                <span>Archives</span>
            </a>
        </li>


        <!-- End Error 404 Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-image"></i>
                <span>Galerie</span>
            </a>
        </li>
        <!-- End Blank Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="../../backend/logout.php">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Déconnexion</span>
            </a>
        </li>
    </ul>
</aside>