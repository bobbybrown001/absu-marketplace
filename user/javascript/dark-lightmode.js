document.addEventListener("DOMContentLoaded", function () {
  const themeCheckbox = document.getElementById("theme-checkbox");
  const body = document.body;

  if (!themeCheckbox) {
      console.error("Theme checkbox not found!");
      return;
  }

  // Load dark mode 
  if (localStorage.getItem("darkMode") === "enabled") {
      body.classList.add("darkMode");
      themeCheckbox.checked = true;
  } else {
      body.classList.add("lightMode");
  }

  // Toggle Dark Mode
  themeCheckbox.addEventListener("change", function () {
      if (themeCheckbox.checked) {
          body.classList.remove("lightMode");
          body.classList.add("darkMode");
          localStorage.setItem("darkMode", "enabled");
      } else {
          body.classList.remove("darkMode");
          body.classList.add("lightMode");
          localStorage.setItem("darkMode", "disabled");
      }
  });
});


