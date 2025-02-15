// Creating a Dark to light mode
document.getElementById("light").addEventListener('click', function(){
    // document.getElementsByTagName("body")[0].style.backgroundColor = "black"
    document.getElementsByTagName("body")[0].classList.toggle("lightMode")
})

document.getElementById("dark").addEventListener('click', function(){
    // document.getElementsByTagName("body")[0].style.backgroundColor = "black"
    document.getElementsByTagName("body")[0].classList.toggle("darkMode")
})