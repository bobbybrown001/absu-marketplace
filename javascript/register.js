// Create a variable to store the 'next' button
const firstPageButton = document.getElementById("firstPageButton");
const secondPageButton = document.getElementById("secondPageButton");
const thirdPageButton = document.getElementById("thirdPageButton");

// Create a variable to store the "back" buttons
const backButton2 = document.getElementById("backButton2");
const backButton3 = document.getElementById("backButton3");

// Create a variable to store the 'form containers'
const firstPageForm = document.getElementById("firstContainer");
const secondPageForm = document.getElementById("secondContainer");
const thirdPageForm = document.getElementById("thirdContainer");

// Create a variable to store the first 'form data'
const fullname = document.getElementById('fullName');
const username = document.getElementById('userName');
const email = document.getElementById('email');
const phone = document.getElementById('phone');
const gender = document.querySelectorAll('input[name="gender"]');            
const dob = document.getElementById('dob');


// Create a variable to store the second 'form data'
const address = document.getElementById('address');
const addressName = document.getElementById('addressName');
const roomNumber = document.getElementById('roomNumber');
const   Status = document.getElementById('status');
const department = document.getElementById('department');
const level = document.getElementById('level');

// Create a variable to store the Third 'form data'
const password = document.getElementById('password');
const confirmPassword = document.getElementById('confirmPassword');

const array = [];

// Using eventlistener to diplay the 'next' page
firstPageButton.addEventListener('click', function(){
  
  let selectedGen;
    for (const gen of gender) {
        if (gen.checked) {
          selectedGen = gen.value;
            break;
        }
    }
  if(fullname.value == '' || username.value == '' || email.value == '' || phone.value == '' || selectedGen == null || dob.value == '' ){
    secondPageForm.style.display = "none";
    firstPageForm.style.display = "block";
    console.log('No data')
  }
  else{
    secondPageForm.style.display = "block";
    firstPageForm.style.display = "none";

    array[0] =fullname.value;
    array[1] =username.value;
    array[2] =email.value;
    array[3] =phone.value;
    array[4] =selectedGen;
    array[5] =dob.value;

    
    console.log(array);
  }
})

// Using eventlistener to diplay the 'next' page
secondPageButton.addEventListener('click', function(){

    secondPageForm.style.display = "none";
    thirdPageForm.style.display = "block";

    if(address.value == '' || addressName.value == '' || roomNumber.value == '' || Status.value == '' || department.value == '' || level.value == '' ){
      secondPageForm.style.display = "block";
      thirdPageForm.style.display = "none";
      console.log('No data')
    }
    else{
      secondPageForm.style.display = "none";
      thirdPageForm.style.display = "block";
  
      array[6] = address.value;
      array[7] =addressName.value;
      array[8] =roomNumber.value;
      array[9] =Status.value;
      array[10] =department.value;
      array[11] =level.value;
  
      
      console.log(array);
    }
})

// Using eventlistener to diplay the 'submit' page
thirdPageButton.addEventListener('click', function(){

  // thirdPageForm.style.display = "block";
  // thirdContainer.style.display = "none";
  // secondContainer.style.display = "block";
  

  if(password.value == '' || confirmPassword.value == ''){
    // secondPageForm.style.display = "block";
    thirdPageForm.style.display = "block";
    console.log('No data')
  }
  else{
    if(password.value != confirmPassword.value){
      // console.log('password do not match ')
      document.getElementById('message').innerHTML = '<span style="color: red;">password do not match</span>';
    }
    else{
      console.log('password match ')
      array[12] = password.value;

      $.ajax({
        url: "agent-insert.php",
        method: "POST",
        dataType: "json",
        data: { fullname : array[0], username : array[1], email : array[2], phone : array[3], gender : array[4],  dob: array[5], address : array[6], addressName : array[7], roomNumber : array[8], Status : array[9], department : array[10], level : array[11], password : array[12],},
        success:function(res){
          console.log(res);
          if(res.status == 'success'){
            // window.location.replace("login.php")
            window.location.href = 'http://localhost/absu-marketplace/login.php/file.php';
          }else{
            console.log(res.status);
          }
        }
      });
      
      // window.location.replace=('login.php');
    }

    
    console.log(array);
  }
})



// Move 'back' from Step 2 to Step 1
backButton2.addEventListener('click', function() {
  // Hide Second page and Show first page
  secondContainer.style.display = "none";
  firstContainer.style.display = "block";
});

// Move 'back' from Step 3 to Step 2
backButton3.addEventListener('click', function() {
  // Hide third page and Show second page
  thirdContainer.style.display = "none";
  secondContainer.style.display = "block";
});
