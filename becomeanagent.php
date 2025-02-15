<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Become an Agent</title>
    <!-- css nav link -->
    <link rel="stylesheet" href="./css/nav.css">
    <!-- css link -->
    <link rel="stylesheet" href="./css/agentregister.css">
    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"/>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/country-region-dropdown-menu/2.4.1/js/geodatasource-cr.min.js"></script>
</head>
<body>
    <div class="overflow-x-hidden overflow-y-auto">
        <!-- Nav bar - This uses the navbar stlye from include/register-->
        <?php require("include/nav/registernav.php") ?>

        <div class="form-container ">
            <div class="form-body">
                <img src="./asset/image/young-cheerful-courier-delivering-parcel-large-box.jpg" alt="Image" class="background-image">
            </div>
            <form class="register-form">
                <h1 class="text-center text-danger fw-bold">BECOME AN AGENT</h1>
                <p class="text-center" style="font-size: 13px;">Create a agent account with us, it's quick and easy </p>
                <hr>
                <!-- Full Name -->
                <div class="mb-3">
                    <label for="fullname" class="form-label">Full Name: </label>
                    <input type="text" class="form-control" id="fullname" aria-describedby="fullname" placeholder="Input Full name" required>
                </div>
                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email: </label>
                    <input type="email" class="form-control" id="email"  placeholder="Input email" required>
                </div>
                <!-- Phone Number -->
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number: </label>
                    <input type="phone" class="form-control" id="phone"  placeholder="Input Phone Number" required>
                </div>
                <!-- Date of birth  -->
                <div class="mb-2">
                    <label for="dob" class="form-label">Date of birth: </label>
                    <input type="date" class="form-control" id="dob" required>
                </div>
                <!-- Gender -->
                <div class="mb-2">
                    <label for="male" class="form-label">Gender:
                        <input type="radio" name="gender" id="male" class="gender-option"> Male
                    </label>
                    <label for="female" class="form-label">
                        <input type="radio" name="gender" id="female" class="gender-option"> Female
                    </label>
                </div>                
                <!-- Next Button -->
                <a href="./becomeanagent2.html" class="btn btn-danger mb-2">Next</a>
                <!-- Already have aan account -->
                <div>
                    <a href="./login.html" class="text-dark list-style-none" id="not-yet-register">Already have an account? <span class="text-primary">login</span></a>
                </div>
                <div>
                    <a href="./register.html" class="text-dark list-style-none" id="not-yet-register">Want to become a user? <span class="text-primary">Sign up here</span></a>
                </div>
            </form>
        </div>
        

    <!-- javascript link-->
    <script src="./javascript/index.js"></script>
</body>
</html>