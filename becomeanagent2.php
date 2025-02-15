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
                <!-- Address -->
                <div class="mb-2">
                    <div>
                        <h6>Address: </h6>
                        <label for="hostel" class="form-label">
                            <input type="radio" name="address" id="hostel">  Hostel
                        </label>
                        <label for="lodge" class="form-label">
                            <input type="radio" name="address" id="lodge">  Lodge
                        </label>
                    </div>
                    <div class="mb-2">
                        <!-- Room Number -->
                        <label for="room-number" class="form-label">Room Number: </label>
                        <input type="number" class="form-control" id="room-number"  placeholder="Room Number">                        
                    </div>
                
                    <!-- Address input -->
                    <input type="text" class="form-control mt-3" id="address"  placeholder="Input lodge / hostel name" required>
                </div>
                <!-- Country -->
                <div class="mb-3">
                    <label for="country" class="form-label">Country: </label>
                    <input type="text" class="form-control" id="country" value="Nigeria" placeholder="Input your state of Origin" readonly required style="cursor: default;">
                </div>
                <!-- Student or Not -->
                <div class="mb-2">
                    <h6>Select your membership:</h6>
                    <label for="student" class="form-label">
                        <input type="radio" name="membership" id="student"> Student
                    </label>
                    <label for="staff" class="form-label">
                        <input type="radio" name="membership" id="staff"> Staff
                    </label>
                    <label for="graduate" class="form-label">
                        <input type="radio" name="membership" id="graduate"> Graduate
                    </label>
                    <label for="aspirant" class="form-label">
                        <input type="radio" name="membership" id="aspirant"> Aspirant
                    </label>
                </div>
                <!-- Department -->
                <div class="mb-3">
                    <label for="department" class="form-label">Department: </label>
                    <input type="text" class="form-control" id="department" placeholder="Input your Department" required>
                </div>
                <!-- Level -->
                <div class="mb-3">
                    <label for="level" >Level: </label>
                    <select class="form-select form-select-sm" aria-label="Small select example">
                        <option selected>--select--</option>
                        <option value="100L">100 Level</option>
                        <option value="200L">200 Level</option>
                        <option value="300L">300 Level</option>
                        <option value="400L">400 Level</option>
                        <option value="500L">500 Level</option>
                        <option value="600L">600 Level</option>
                      </select>
                </div>
                <!-- Next Button -->
                <a href="./becomeanagent3.html" class="btn btn-danger mb-2">Next</a>
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