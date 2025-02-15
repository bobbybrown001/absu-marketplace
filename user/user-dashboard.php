<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css link -->
    <link rel="stylesheet" href="./css/user-dashboard.css">
    <!-- css link for light to dark mood -->
    <link rel="stylesheet" href="./css/dark-lightmode.css">
    <!-- css link for side bar -->
    <link rel="stylesheet" href="./css/sidebar.css">
    
    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Google Material Icons CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Symbols+Outlined" rel="stylesheet">

    <!-- google fonts import - Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <title> user dashboard </title>
</head>
<body>    
    <!-- nav.bar -->
    <?php include ('./include/sidebar.php') ?>

    <!-- Main Content -->
    <div class="maincontainer">

        <div class="content">
            <h1 class="mt-4 ms-4 fw-bold">Dashboard</h1>




            <div class="insights">
                <!-- card -->
                <div class="row">

                    <!-- Total user -->
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                        <div class="card shadow col-10">
                            <!-- icon -->
                            <span class="material-symbols-outlined bg-info">person</span>
                            <!-- middle -->
                            <div class="middle">
                                <div class="left">
                                    <h3>Total Users</h3>
                                    <h1>25, 00</h1>
                                </div>
                                <div class="progresss col-12">
                                    <svg>
                                        <circle r="30" cy="40" cx="40"></circle>
                                    </svg>
                                    <div class="number">80%</div>
                                </div>
                            </div>
                            <small>Last 24 Hours</small>
                        </div>
                    </div>

                    <!-- Total Agent -->
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                        <div class="card shadow col-10">
                            <!-- icon -->
                            <span class="material-symbols-outlined bg-danger">person</span>
                            <!-- middle -->
                            <div class="middle">
                                <div class="left">
                                    <h3>Total Agents</h3>
                                    <h1>55, 00</h1>
                                </div>
                                <div class="progresss col-12">
                                    <svg>
                                        <circle r="30" cy="40" cx="40"></circle>
                                    </svg>
                                    <div class="number">50%</div>
                                </div>
                            </div>
                            <small>Last 24 Hours</small>
                        </div>
                    </div>


                    <!-- Active Charts -->
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                        <div class="card shadow col-10">
                            <!-- icon -->
                            <span class="material-symbols-outlined bg-success">communication</span>
                            <!-- <span class="material-symbols-outlined bg-warning">person</span> -->
                            <!-- middle -->
                            <div class="middle">
                                <div class="left">
                                    <h3>Active Charts</h3>
                                    <h1>75, 00</h1>
                                </div>
                                <div class="progresss col-12">
                                    <svg>
                                        <circle r="30" cy="40" cx="40"></circle>
                                    </svg>
                                    <div class="number">30%</div>
                                </div>
                            </div>
                            <small>Last 24 Hours</small>
                        </div>
                    </div>

                </div>
            </div>

        

            <!-- start recent order -->
            <!-- <div class="recent-order m-4">
                <h1 class="fw-bold fs-2">Recent order</h1>
                <div class="table shadow p-4 rounded-4">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Product Number</th>
                                <th scope="col">Payment</th>
                                <th scope="col">status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mini USB</td>
                                <td>456</td>
                                <td>@Due</td>
                                <td class="text-danger">Pending</td>
                                <td class="text-primary">Details</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Mini USB</td>
                                <td>456</td>
                                <td>@Due</td>
                                <td class="text-danger">Pending</td>
                                <td class="text-primary">Details</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Mini USB</td>
                                <td>456</td>
                                <td>@Due</td>
                                <td class="text-danger">Pending</td>
                                <td class="text-primary">Details</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div> -->
        </div>


        <!-- RightSide Section -->
        <div class="right">
            <div class="top">

                <!-- profile -->
                <div class="profile">
                    <div class="profile-info">
                        <p><b>Bobby</b></p>
                        <p>Admin</p>
                        <small class="text-muted"></small>
                    </div>
                    <!-- profile photo -->
                    <div class="profile-photo">
                        <img src="../asset/image/image1.png" alt="">
                    </div>
                </div>
            </div>

            <!-- Recent Update -->

            <div class="recent-update">
                <h2 class="fw-semibold">Recent Update</h2>

                <div class="updates card p-2 rounded-4 shadow col-lg-11 col-md-10 col-sm-10">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="../asset/image/image1.png" alt="">
                        </div>
                        <div class="message">
                            <p><b>Bobby</b> Recent order</p>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="../asset/image/image1.png" alt="">
                        </div>
                        <div class="message">
                            <p><b>Bobby</b> Recent order</p>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="../asset/image/image1.png" alt="">
                        </div>
                        <div class="message">
                            <p><b>Bobby</b> Recent order</p>
                        </div>
                    </div>
                </div>

                <!-- Analysts update -->
                <!-- <div class="sale_analystics">
                    <h2 class="fw-semibold">Sale Analystics</h2>

                    
                    <div class="item_online rounded-4 shadow">
                        <div class="Icon">
                            <span class="material-symbols-outlined">shopping_cart</span>
                        </div>
                        <div>
                            <div class="info">
                                <h3>Online order</h3>
                                <small class="text_muted">Last seen 2 Hours</small>
                            </div>
                            <h5 class="text-danger">-17%</h5>
                            <h3>3849</h3>
                        </div>
                    </div>
                    <div class="item_online rounded-4 shadow">
                        <div class="Icon">
                            <span class="material-symbols-outlined">shopping_cart</span>
                        </div>
                        <div>
                            <div class="info">
                                <h3>Online order</h3>
                                <small class="text_muted">Last seen 2 Hours</small>
                            </div>
                            <h5 class="text-danger">-17%</h5>
                            <h3>3849</h3>
                        </div>
                    </div>
                    <div class="item_online rounded-4 shadow">
                        <div class="Icon">
                            <span class="material-symbols-outlined">shopping_cart</span>
                        </div>
                        <div>
                            <div class="info">
                                <h3>Online order</h3>
                                <small class="text_muted">Last seen 2 Hours</small>
                            </div>
                            <h5 class="text-danger">-17%</h5>
                            <h3>3849</h3>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>

    <!-- javascript cdn -->
    <script src="./dark-lightmode.js"></script>
    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
</body>
</html>