    <style>
        /* Hide the sidebar by default on small screens */
        @media (max-width: 992px) {
            #setting-bar {
                display: none;
            }
        }
    </style>

    <!-- Main Navbar (Always Visible) -->
    <nav class="navbar navbar-light bg-danger d-lg-none">
        <div class="container-fluid">
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarOffcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="d-flex">
        <!-- Sidebar (Visible on Large Screens) -->
        <div id="setting-bar" class="bg-danger p-3" style="width: 250px; height: 100vh;">
            <ul class="nav flex-column">
                <li class="nav-item"><a href="#" class="nav-link">Dashboard</a></li>
                <li class="nav-item"><a href="#" class="nav-link">User</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Messages <span class="badge bg-danger">22</span></a></li>
                <li class="nav-item"><a href="#" class="nav-link">Profile</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Logout</a></li>
            </ul>
        </div>
    </div>

    <!-- Offcanvas Sidebar (for smaller screens) -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebarOffcanvas">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="nav flex-column">
                <li class="nav-item"><a href="#" class="nav-link">Dashboard</a></li>
                <li class="nav-item"><a href="#" class="nav-link">User</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Messages <span class="badge bg-danger">22</span></a></li>
                <li class="nav-item"><a href="#" class="nav-link">Profile</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Logout</a></li>
            </ul>
        </div>
    </div>
