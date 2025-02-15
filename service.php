<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Css Link -->
    <link rel="stylesheet" href="./css/service.css">
    <!-- Css Nav link -->
    <link rel="stylesheet" href="./css/nav.css">
    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"/>

    <title>Services</title>
</head>
<body>
    <div class="overflow-x-hidden overflow-y-auto">
       <!-- Nav bar This uses the navbar stlye from include/indexnav-->
       <?php require("include/nav/indexnav.php"); ?>

    
        <!-- Service Image -->
        <div class="service-image">
            <img src="./asset/image/lifestyle-people-office.jpg" class="img-fluid" alt="...">
        </div>

        <div class="container mt-5 justify-content-center align-items-center text-center">
            <div class="">
                <h1 class="text-center fw-bolder" style="font-size: 55px;">OUR <span class="text-danger">SERVICES</span></h1>
            
                <h3>We Specialize in making Your Life <span class="text-danger">Easier</span></h3>
                <p style="font-size: medium; font-weight:500;">
                We offer a range of services to simplify your day, from running errands to managing
                tasks and chores. <br> Our team provides fast, reliable, and tailored solutions to meet your needs.
                </p>
            </div>

                    <!-- <h4>
                        Explore the wide range of services we offer below, and let us handle the small 
                        stuff so you can focus on the big things.
                    </h4> -->
           
            
            <div class="container">
                <div class="row justify-content-center mt-3">
                
                    <!-- Contact us on Phone Number -->
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="border border-dark text-center">
                            <div class="card-body">
                                <i class="fa-solid fa-truck mt-5 text-danger" style="font-size: 55px;"></i>
                                <h5 class="card-title fw-bolder mt-4 fs-4">Pick up</h5>
                                <p class="card-text mt-4"> We're here to help you answer any question you might have.</p>
                                <p class="fw-bold"></p>
                            </div>
                        </div>
                    </div>

                    <!-- Contact us on Email -->
                    <div class="col-12 col-md-6 col-lg-4 mb-5 ">
                        <div class="border border-dark text-center">
                            <div class="card-body">
                                <i class="fa-regular fa-envelope mt-5 text-danger" style="font-size: 60px;"></i>
                                <h5 class="card-title fw-bolder mt-4 fs-4">Delivery</h5>
                                <p class="card-text mt-4">We look forward to hearing from you. Drop us a Mail.</p>
                                <p class="fw-bold"></p>
                            </div>
                        </div>
                    </div>
                
                    <!-- Contact us on Whatsapp -->
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="border  border-dark text-center">              
                            <div class="card-body">
                            <i class="fa-solid fa-location-dot mt-5 text-danger" style="font-size: 60px;"></i>
                                <h5 class="card-title fw-bolder mt-4 fs-4">Services</h5>
                                <p class="card-text mt-4">SUG Building, before hostel I, Abia state university, Uturu. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Users Remark -->
        <div class="users-remark" >
            <div class="first-user">
                <img src="./asset/image/image1.png" class="img-fluid" alt="">
            </div>
        </div>
            

    </div>

       <!-- Footer This uses the footer stlye from include/footer/footernav-->
       <?php include ("include/footer/indexnav.php"); ?>
    </div>

    <!-- javascript link-->
    <script src="./javascript/index.js"></script>
</body>
</html>