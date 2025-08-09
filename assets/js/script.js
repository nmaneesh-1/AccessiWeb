const menuOpenIcon = document.querySelector(".menu-open-icon");
const menuCloseIcon = document.querySelector(".menu-close-icon");
const navLinks = document.querySelector(".nav-links");
menuOpenIcon.addEventListener("click", function () {
  navLinks.classList.add("active"); // Corrected: no dot
  menuOpenIcon.style.display = "none"; // Hide open icon
  menuCloseIcon.style.display = "block"; // Show close icon
});
menuCloseIcon.addEventListener("click", function () {
  navLinks.classList.remove("active");
  menuCloseIcon.style.display = "none";
  menuOpenIcon.style.display = "block";
});
