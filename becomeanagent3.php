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
                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password: </label>
                    <input type="password" class="form-control" id="password" aria-describedby="phone" placeholder="New password" required>
                </div>
                <!-- Confirm Password -->
                <div class="mb-2">
                    <label for="confirmPassword" class="form-label">Confirm Password: </label>
                    <input type="password" class="form-control" id="confirmPassword" placeholder="confirm password" required>
                </div>
                <!-- Forget Password -->
                <div class="mb-3">
                    <a href="#" class="list-style-none" id="forget-password">Forget Password?</a>
                </div>
                <!-- Terms and Conditions -->
                <div class="mb-3">
                    <label for="t&c" class="d-flex align-items-start" style="cursor: pointer;">
                        <input type="checkbox" name="t&c" id="t&c" class="me-2" style="margin-top: 3px;">
                        <p style="font-size: 12px; margin-bottom: 0;">
                            By clicking "Register", you agree to our 
                            <a href="./terms&condition.html" class="text-primary" style="text-decoration: none;">Terms of Service</a>, 
                            <a href="#" class="text-primary" style="text-decoration: none;">Privacy Policy</a>, 
                            and 
                            <a href="#" class="text-primary" style="text-decoration: none;">Cookies Policy</a>.
                            You may receive an email notifications from us and can opt out at any time.
                        </p>
                    </label>
                </div>
                <!-- Register Button -->
                <button type="submit" class="btn btn-danger mb-2">Register</button>
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