<?php
    //Check for page that is active 
    $currentPage = $_SERVER['REQUEST_URI'];
?>


    <!-- Main Navbar (Always Visible) -->
    <nav class="navbar navbar-light d-lg-none">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarOffcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <!-- Sidebar (Visible on Large Screens) -->
    <div class="sidebar p-3">

        <!-- top -->
        <div class="top">
            <div class="logo">
                <h3 class="text-light">ABSU MARKETPLACE</h3>
            </div>
        </div>

        <ul class="nav flex-column" >
            <li class="nav-item">
                <a class="<?= (strpos($currentPage, 'user-dashboard.php') !== false) ? 'active' : '' ?>" href="./user-dashboard.php">
                    <span class="material-symbols-outlined">dashboard</span>
                    <h4>Dashboard</h4>
                </a>    
            </li>
            <li class="nav-item">
                <a class="<?= (strpos($currentPage, '#') !== false) ? 'active' : '' ?>" href="#">
                    <span class="material-symbols-outlined">person_3</span>
                    <h4>User</h4>
                </a>
            </li>
            <li class="nav-item">
                <a class="<?= (strpos($currentPage, 'message.php') !== false) ? 'active' : '' ?>" href="./message.php">
                    <span class="material-symbols-outlined">mail</span>
                    <h4>Message <span class="msg_count">22</span> </h4>
                </a>
            </li>
            <li class="nav-item">
                <a class="<?= (strpos($currentPage, 'user-profile.php') !== false) ? 'active' : '' ?>" href="./user-profile.php">
                    <span class="material-symbols-outlined">account_circle</span>
                    <h4>Profile</h4>
                </a>
            </li>

            <!-- light - dark Mood -->
            <div class="theme-toggler">
                <div id="light_mode" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="light mode">
                    <span class="material-symbols-outlined" id="light">light_mode</span>
                </div>
                <div id="dark_mode" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="dark mode">
                    <span class="material-symbols-outlined" id="dark">dark_mode</span>
                </div>        
            </div>

            <li class="nav-item">
                <a href="#">
                    <!-- Button trigger modal -->
                    <div class="d-flex gap-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <span class="material-symbols-outlined pt-1">login</span>
                        <h4>Logout</h4>
                    </div>
                    <!-- Logout -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-dark">
                                    Are you sure you want to logout?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                    <button type="button" class="btn btn-primary">Yes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </div>

    <!-- Offcanvas Sidebar (for smaller screens) -->
    <div class="offcanvas offcanvas-start d-lg-none" tabindex="-1" id="sidebarOffcanvas">
        <div class="offcanvas-header">
            <div class="logo">
                <h5 class="offcanvas-logo text-danger">ABSU MARKETPLACE</h5>
            </div>
            <button type="button" class="btn-close text-light" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="<?= (strpos($currentPage, 'user-dashboard.php') !== false) ? 'active' : '' ?>" href="./user-dashboard.php">
                        <span class="material-symbols-outlined">dashboard</span>
                        <h4>Dashboard</h4>
                    </a>    
                </li>
                <li class="nav-item">
                    <a class="<?= (strpos($currentPage, '#') !== false) ? 'active' : '' ?>" href="#">
                        <span class="material-symbols-outlined">person_3</span>
                        <h4>User</h4>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="<?= (strpos($currentPage, 'message.php') !== false) ? 'active' : '' ?>" href="./message.php">
                        <span class="material-symbols-outlined">mail</span>
                        <h4>Message <span class="msg_count">22</span> </h4>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="<?= (strpos($currentPage, 'user-profile.php') !== false) ? 'active' : '' ?>" href="./user-profile.php">
                        <span class="material-symbols-outlined">account_circle</span>
                        <h4>Profile</h4>
                    </a>
                </li>

                <!-- light - dark Mood -->
                <div class="theme-toggler">
                    <div id="sm-light_mode" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="light mode">
                        <span class="material-symbols-outlined" id="light">light_mode</span>
                    </div>
                    <div id="sm-dark_mode" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="dark mode">
                        <span class="material-symbols-outlined" id="dark">dark_mode</span>
                    </div>        
                </div>

                <li class="nav-item">
                    <a href="#">
                        <!-- Button trigger modal -->
                        <div class="d-flex gap-1">
                            <span class="material-symbols-outlined pt-1">login</span>
                            <h4>Logout</h4>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
