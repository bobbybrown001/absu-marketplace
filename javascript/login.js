// Create a variable to store the user & agent button
const userLogin = document.getElementById("userLogin");
const agentLogin = document.getElementById("agentLogin");

// Create a variable to store the 'form containers'
const userContainer = document.getElementById("userContainer");
const agentContainer = document.getElementById("agentContainer");

agentLogin.addEventListener('click', function(){

    userContainer.style.display = "none";
    agentContainer.style.display = "block";
})

userLogin.addEventListener('click', function(){

    agentContainer.style.display = "none";
    userContainer.style.display = "block";
})
