<?php
session_start();

// Include database connection file
include("../config/config.php");

//take user to login if they are not logged in
if(!(isset($_SESSION['userid']))){
    header('location: ../login.php');
    exit();
}
?>

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
    
    <!-- css link for dark light mode -->
    <link rel="stylesheet" href="./css/dark-lightmode.css">
    
    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Google Material Icons CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Symbols+Outlined" rel="stylesheet">

    <!-- google fonts import - Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <!-- google fonts import - Gochi Hand -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&family=Titan+One&display=swap" rel="stylesheet">
    
    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"/>

    <!-- JQuery cdn-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
    <title> user dashboard </title>
</head>
<body>
    <div class="overflow-x-hidden overflow-y-auto" id="container">

        <!-- Nav Bar -->
        <div class="sidenavbar">
            <?php include ('./include/sidebar.php') ?>
        </div>

        <!-- Main Content -->
        <div class="maincontainer col-lg-10 col-md-12 col-sm-12">

            <header>
                <h1 class="mt-4 ms-4 fw-bold">Dashboard</h1>

                <!-- profile -->
                <div class="profile">
                    <div class="profile-info">
                        <small>
                            Welcome! <br><b>
                            <?php 
                            // echo $_SESSION['fullname'];
                            $id = $_SESSION['userid'];
                            $sql = mysqli_query($connection, "SELECT * FROM users WHERE id='$id' ");
                            if (mysqli_num_rows($sql)>0){
                                if ($row = mysqli_fetch_assoc($sql)) {
                                    $username = $row['username'];
                                    echo $username;
                                }
                            }else {
                                echo "No user found";
                            }
                            ?></b>
                        </small>
                    </div>
                    <!-- profile photo -->
                    <a href="./user-profile.php">
                        <div class="profile-photo">
                            <img src="../asset/image/image1.png" alt="">
                        </div>
                    </a>
                </div>
            </header>

            <section>
                <div class="first_section">
                    <div class="row">
                        <!-- Total user -->
                        <div class="col-12 col-md-4 mb-3">
                            <div class="card">
                                <!-- icon -->
                                <span class="material-symbols-outlined bg-info">person</span>
                                <!-- middle -->
                                <div class="middle col-12">
                                    <div class="left">
                                        <h3>Active User</h3>
                                        <h1>25,00</h1>
                                    </div>
                                    <div class="progresss col-12">
                                        <svg>
                                            <circle r="30" cy="40" cx="40"></circle>
                                        </svg>
                                        <div class="number">40%</div>
                                    </div>
                                </div>
                                <small>Total User online</small>
                            </div>
                        </div>

                        <!-- Total Agent -->
                        <div class="col-12 col-md-4 mb-3">
                            <div class="card">
                                <!-- icon -->
                                <span class="material-symbols-outlined bg-danger">person</span>
                                <!-- middle -->
                                <div class="middle">
                                    <div class="left">
                                        <h3>Activity Score</h3>
                                        <h1>700</h1>
                                    </div>
                                    <div class="progresss col-12">
                                        <svg>
                                            <circle r="30" cy="40" cx="40"></circle>
                                        </svg>
                                        <div class="number">10%</div>
                                    </div>
                                </div>
                                <small>Total Engagement</small>
                            </div>
                        </div>

                        <!-- Total Agent -->
                        <div class="col-12 col-md-4 mb-3">
                            <div class="card">
                                <!-- icon -->
                                <span class="material-symbols-outlined bg-warning">person</span>
                                <!-- middle -->
                                <div class="middle">
                                    <div class="left">
                                        <h3>Active Chats</h3>
                                        <h1>55,00</h1>
                                    </div>
                                    <div class="progresss col-12">
                                        <svg>
                                            <circle r="30" cy="40" cx="40"></circle>
                                        </svg>
                                        <div class="number">50%</div>
                                    </div>
                                </div>
                                <small>Ongoing conversation</small>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

                        
            <section>
                <div class="first_section">
                    <div class="row">
                        <!-- Total user -->
                        <div class="col-lg-8 col-md-12 mb-3">
                            <div class="card">
                                <!-- Featured Listings -->
                                <div class="featured_listings">
                                    <h1 class="fw-bold fs-4">Featured Listings</h1>
                                    <div class="table">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Category</th>
                                                    <th scope="col">Product</th>
                                                    <th scope="col">status</th>
                                                    <th scope="col">info</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Emmanuel</td>
                                                    <td>Gadget</td>
                                                    <td>Phone</td>
                                                    <td class="text-danger">Available</td>
                                                    <td class="text-primary"><a href="">Details</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Chimaobi</td>
                                                    <td>Electronics</td>
                                                    <td>Ring light</td>
                                                    <td class="text-danger">Available</td>
                                                    <td class="text-primary"><a href="">Details</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Daniel</td>
                                                    <td>House appliance</td>
                                                    <td>Chair</td>
                                                    <td class="text-danger">Available</td>
                                                    <td class="text-primary"><a href="">Details</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>Hope</td>
                                                    <td>House appliance</td>
                                                    <td>Fan</td>
                                                    <td class="text-danger">Available</td>
                                                    <td class="text-primary"><a href="">Details</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">5</th>
                                                    <td>Faith</td>
                                                    <td>Gadget</td>
                                                    <td>Power bank</td>
                                                    <td class="text-danger">Available</td>
                                                    <td class="text-primary"><a href="">Details</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">6</th>
                                                    <td>Gift</td>
                                                    <td>Lodge</td>
                                                    <td>Free room</td>
                                                    <td class="text-danger">Available</td>
                                                    <td class="text-primary"><a href="">Details</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12 mb-3">
                            <div class="card">
                                <!-- Recent Charts -->
                                <div class="recent-charts">
                                    <h2 class="fw-bold ">Recent Charts</h2>

                                    <div class="charts_updates col-sm-12">
                                        <div class="charts">
                                            <div class="profile-photo">
                                                <img src="../asset/image/ada.jpeg" alt="">
                                            </div>
                                            <div class="message ">
                                                <p><b>Hope Briggs</b> <small>when do you need it?</small> </p>
                                            </div>
                                        </div>
                                        <div class="charts">
                                            <div class="profile-photo">
                                                <img src="../asset/image/esuku.jpeg" alt="">
                                            </div>
                                            <div class="message">
                                                <p><b>Emmanuel Esuku</b> <small>Hello, how can i help you</small></p>
                                            </div>
                                        </div>
                                        <div class="charts">
                                            <div class="profile-photo">
                                                <img src="../asset/image/mom.jpeg" alt="">
                                            </div>
                                            <div class="message">
                                            <p><b>Precious samuel</b> <small>for now the price is 30k</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

        </div>
    </div>
    <!-- javascript cdn -->
    <script src="./javascript/dark-lightmode.js"></script>
    <script src="./javascript/user_dashboard.js"></script>
</body>
</html>