<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css nav link -->
    <link rel="stylesheet" href="./css/nav.css">
    <!-- css link -->
    <link rel="stylesheet" href="./css/contact.css">
    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"/>

    <title>Contact Page</title>
</head>
<body>
    <div class="overflow-x-hidden overflow-y-auto">
        <!-- Nav bar This uses the navbar stlye from include/nav/indexnav -->
        <?php require("include/nav/indexnav.php"); ?>
    
        <div class="contact-container">
            <!-- Card -->
            <div class="container" style="cursor: default !important;">
                <h2 class="fw-bolder fs-1">CONTACT US ON </h2>
                <div class="row justify-content-center mt-3" id="service-items">
                
                    <!-- Contact us on Phone Number -->
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="">
                            <div class="card-body">
                                <i class="fa-solid fa-phone mt-5 text-danger" style="font-size: 55px;"></i>
                                <h5 class="card-title fw-bolder mt-4 fs-4">Phone</h5>
                                <p class="card-text mt-4"> We're here to help you answer any question you might have.</p>
                                <p class="fw-bold"> 08082958171, 09048912173</p>
                            </div>
                        </div>
                    </div>

                    <!-- Contact us on Email -->
                    <div class="col-12 col-md-6 col-lg-4 mb-5 ">
                        <div class="">
                            <div class="card-body">
                                <i class="fa-regular fa-envelope mt-5 text-danger" style="font-size: 60px;"></i>
                                <h5 class="card-title fw-bolder mt-4 fs-4">Email</h5>
                                <p class="card-text mt-4">We look forward to hearing from you. Drop us a Mail.</p>
                                <p class="fw-bold"> bobby0brown101@gmail.com </p>
                            </div>
                        </div>
                    </div>
                
                    <!-- Contact us on Whatsapp -->
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="">              
                            <div class="card-body">
                            <i class="fa-solid fa-location-dot mt-5 text-danger" style="font-size: 60px;"></i>
                                <h5 class="card-title fw-bolder mt-4 fs-4">Location</h5>
                                <p class="card-text mt-4">SUG Building, before hostel I, Abia state university, Uturu. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Form to collect users complain-->
            <div class="form-container bg-light mt-5">
                <form action="" method="">
                    <div class="text-center" id="form-text">
                        <h2 class="text-danger">Leave us a message</h2>
                        <h6>We will get back to you</h6>
                    </div>
                    <!-- form input  -->
                    <div>
                        <input type="text" name="fullname" class="form-control" placeholder="Full Name">
                    </div>
                    <div>
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div>
                        <input type="tel" name="phone"  class="form-control" placeholder="Phone Number">
                    </div>
                    <div>
                        <input type="text" name="subject" class="form-control" placeholder="Subject">
                    </div>
                    <div>
                        <textarea id="message" name="message" rows="4" cols="50"  class="form-control" placeholder="Type your message here..."></textarea>
                    </div>
                    <div class="button">
                        <input type="submit"  class="form-control" value="SEND MESSAGE" class="text-light">
                    </div>
                </form>



            </div>

            <!-- Social Icons -->
            <div class="social text-center mt-5">
                <a href="#" class="text-dark mr-3 me-3"  style="font-size: 20px;"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-dark mr-3 me-3"  style="font-size: 22px;"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-dark mr-3 me-3"  style="font-size: 22px;"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </div>
    
    <!-- Footer This uses the footer stlye from include/footer/footernav-->
    <?php include ("include/footer/indexnav.php"); ?>

    <!-- javascript link-->
    <script src="./javascript/index.js"></script>
</body>
</body>
</html>