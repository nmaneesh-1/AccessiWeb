document.addEventListener("DOMContentLoaded", () => {
  // Menu toggle functionality (if needed)
  const menuOpenIcon = document.querySelector(".menu-open-icon");
  const menuCloseIcon = document.querySelector(".menu-close-icon");
  const navLinks = document.querySelector(".nav-links");

  if (menuOpenIcon && menuCloseIcon && navLinks) {
    menuOpenIcon.addEventListener("click", () => {
      navLinks.classList.add("active");
      menuOpenIcon.style.display = "none";
      menuCloseIcon.style.display = "block";
    });

    menuCloseIcon.addEventListener("click", () => {
      navLinks.classList.remove("active");
      menuCloseIcon.style.display = "none";
      menuOpenIcon.style.display = "block";
    });
  }

  // Sidebar AJAX functionality
  const links = document.querySelectorAll(".dashboard-links a");
  links.forEach((link) => {
    link.addEventListener("click", (event) => {
      event.preventDefault();
      const page = link.getAttribute("data-page");
      console.log("Fetching:", page); // Debug log with correct variable
      fetch(page)
        .then((response) => {
          if (!response.ok)
            throw new Error(`HTTP error! Status: ${response.status}`);
          return response.text();
        })
        .then((data) => {
          document.querySelector(".main-content").innerHTML = data;
          links.forEach((l) => l.parentElement.classList.remove("active"));
          link.parentElement.classList.add("active");
          console.log("Content loaded");
        })
        .catch((error) => {
          console.error("Fetch error:", error);
          document.querySelector(".main-content").innerHTML =
            "<p>Error loading content.</p>";
        });
    });
  });

  // Load default content (e.g., _overview.php) on page load
  const defaultLink = document.querySelector("#overview a");
  if (defaultLink) {
    const defaultPage = defaultLink.getAttribute("data-page");
    console.log("Default fetching:", defaultPage); // Debug log
    fetch(defaultPage)
      .then((response) => response.text())
      .then((data) => {
        document.querySelector(".main-content").innerHTML = data;
        defaultLink.parentElement.classList.add("active");
      })
      .catch((error) => console.error("Default content error:", error));
  }
});
