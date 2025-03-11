<?php
    //Check for page that is active 
    $currentPage = $_SERVER['REQUEST_URI'];
?>


    <!-- Sidebar (Visible on Large Screens) -->
    <div class="sidebar p-3">

        <!-- top -->
        <div class="top">
            <div class="logo">
                <img src="../asset/image/logo.png" alt="" width="50px">
                <h5>Absu Marketplace</h5>
            </div>
        </div>

        <ul class="nav flex-column" >
            <li class="nav-item">
                <a class="<?= (strpos($currentPage, 'user_dashboard.php') !== false) ? 'active' : '' ?>" href="./user_dashboard.php">
                    <span class="material-symbols-outlined">dashboard</span>
                    <h4>Dashboard</h4>
                </a>    
            </li>
            <li class="nav-item">
                <a class="<?= (strpos($currentPage, 'product.php') !== false) ? 'active' : '' ?>" href="./product.php">
                    <span class="material-symbols-outlined">storefront</span>
                    <h4>Products</h4>
                </a>
            </li>
            <li class="nav-item">
                <a class="<?= (strpos($currentPage, 'message.php') !== false) ? 'active' : '' ?>" href="./message.php">
                    <span class="material-symbols-outlined">mail</span>
                    <h4>Message <span class="msg_count">22</span> </h4>
                </a>
            </li>
            <li class="nav-item">
                <a class="<?= (strpos($currentPage, 'your_products.php') !== false) ? 'active' : '' ?>" href="./your_products.php">
                    <span class="material-symbols-outlined">edit_square</span>
                    <h4>Workspace</h4>
                </a>
            </li>
            <li class="nav-item">
                <a class="<?= (strpos($currentPage, 'user-profile.php') !== false) ? 'active' : '' ?>" href="./user-profile.php">
                    <span class="material-symbols-outlined">person</span>
                    <h4>Profile</h4>
                </a>
            </li>
            <li class="nav-item">
                <a class="<?= (strpos($currentPage, 'settings.php') !== false) ? 'active' : '' ?>" href="./settings.php">
                    <span class="material-symbols-outlined">settings</span>
                    <h4>Settings</h4>
                </a>
            </li>

            <!-- mode toggler -->
            <?php include ('./include/dark-lightmode.php') ?>

            <li class="nav-item">
                <!-- Button trigger modal -->
                <div class="d-flex gap-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <a href="#">    
                        <span class="material-symbols-outlined">logout</span>
                        <h4>Logout</h4>
                    </a>
                </div>
                <!-- Logout -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-dark">
                                Are you sure you want to logout?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                <a href="logout.php"><button type="button" class="btn btn-primary"> Yes </button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>


    

    <!-- offcanvas Nav Bar -->
    <div class="toggle-background d-lg-none">
        <span class="hamburger material-symbols-outlined fs-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="staticBackdrop">menu_open</span>
        <h5 class="text-danger">Absu Marketplace</h5>
    </div>

    <div class="offcanvas offcanvas-start d-lg-none" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <img src="../asset/image/logo.png" alt="" width="50px">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Absu Marketplace</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <hr>
        <div class="offcanvas-body">
        <ul class="nav flex-column" >
                <li class="nav-item">
                    <a class="<?= (strpos($currentPage, 'user_dashboard.php') !== false) ? 'active' : '' ?>" href="./user_dashboard.php">
                        <span class="material-symbols-outlined">dashboard</span>
                        <h4>Dashboard</h4>
                    </a>    
                </li>
                <li class="nav-item">
                    <a class="<?= (strpos($currentPage, 'product.php') !== false) ? 'active' : '' ?>" href="./product.php">
                        <span class="material-symbols-outlined">storefront</span>
                        <h4>Products</h4>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="<?= (strpos($currentPage, 'message.php') !== false) ? 'active' : '' ?>" href="./message.php">
                        <span class="material-symbols-outlined">mail</span>
                        <h4>Message <span class="msg_count">22</span> </h4>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="<?= (strpos($currentPage, 'workspace.php') !== false) ? 'active' : '' ?>" href="./workspace.php">
                        <span class="material-symbols-outlined">edit_square</span>
                        <h4>Workspace</h4>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="<?= (strpos($currentPage, 'user-profile.php') !== false) ? 'active' : '' ?>" href="./user-profile.php">
                        <span class="material-symbols-outlined">person</span>
                        <h4>Profile</h4>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="<?= (strpos($currentPage, 'settings.php') !== false) ? 'active' : '' ?>" href="./settings.php">
                        <span class="material-symbols-outlined">settings</span>
                        <h4>Settings</h4>
                    </a>
                </li>

                <!-- mode toggler -->
                <?php include ('./include/dark-lightmode.php') ?>

                <li class="nav-item">
                    <!-- Button trigger modal -->
                    <div class="d-flex gap-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <a href="#">    
                            <span class="material-symbols-outlined">logout</span>
                            <h4>Logout</h4>
                        </a>
                    </div>

                    <!-- Logout -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-dark">
                                    Are you sure you want to logout?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                    <a href="logout.php"><button type="button" class="btn btn-primary"> Yes </button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>