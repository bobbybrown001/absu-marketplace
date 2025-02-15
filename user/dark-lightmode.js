// Dark to light mode on a large screen
document.addEventListener("DOMContentLoaded", function () {
  const lightMode = document.getElementById("light_mode");
  const darkMode = document.getElementById("dark_mode");

  // Function to enable dark mode
  function enableDarkMode() {
    document.body.classList.add("darkMode");
    localStorage.setItem("theme", "dark");
  }

  // Function to enable light mode
  function enableLightMode() {
    document.body.classList.remove('darkMode');
    localStorage.setItem("theme", "light");
  }

  // Check Local Storage and Apply Theme
  if (localStorage.getItem("theme") === "dark") {
    enableDarkMode();
  }
  else if (localStorage.getItem('theme') === 'light') {
    enableLightMode()
  }

  darkMode.addEventListener("click", enableDarkMode);
  lightMode.addEventListener("click", enableLightMode);
})


// Dark to light mode on a small screen 
document.addEventListener("DOMContentLoaded", function () {
  const lightMode = document.getElementById("sm-light_mode");
  const darkMode = document.getElementById("sm-dark_mode");

  // Function to enable dark mode
  function enableDarkMode() {
    document.body.classList.add("darkMode");
    localStorage.setItem("theme", "dark");
  }

  // Function to enable light mode
  function enableLightMode() {
    document.body.classList.remove('darkMode');
    localStorage.setItem("theme", "light");
  }

  // Check Local Storage and Apply Theme
  if (localStorage.getItem("theme") === "dark") {
    enableDarkMode();
  }
  else if (localStorage.getItem('theme') === 'light') {
    enableLightMode()
  }

  darkMode.addEventListener("click", enableDarkMode);
  lightMode.addEventListener("click", enableLightMode);
})