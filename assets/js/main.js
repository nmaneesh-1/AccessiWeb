document.addEventListener("DOMContentLoaded", () => {
  const signupform = document.querySelector("#signupForm");
  const loginform = document.querySelector("#loginForm");
  if (signupform) {
    function validateSignupform() {
      // Namevalidation function
      function Namevalidation() {
        const nameInput = document.querySelector("#signup-name");
        const nameError = document.querySelector(".name-error");
        const NameRegex = /^[A-Za-z\s'-]{3,30}$/;
        const nameValue = nameInput.value.trim();
        nameError.innerHTML = "";
        nameError.style.visibility = "hidden";
        // Validation checks
        if (nameValue === "") {
          nameError.innerHTML = "Name is required";
          nameError.style.visibility = "visible";
          console.log("Name is invalid");
        } else if (nameValue.length < 3 && nameValue.length > 30) {
          nameError.innerHTML = "Name is between 3 to 30 characters";
          nameError.style.visibility = "visible";
          console.log("Name is invalid");
        } else if (!NameRegex.test(nameValue)) {
          nameError.innerHTML =
            "Name can only contain letters, spaces, hyphens, or apostrophes";
          nameError.style.visibility = "visible";
          console.log("Name is invalid");
        } else {
          console.log("Name is valid");
        }
      }
      // Emailvalidation function
      function Emailvalidation() {
        const emailInput = document.querySelector("#signup-email");
        const emailError = document.querySelector(".email-error");
        const EmailRegex = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;
        const emailValue = emailInput.value.trim();
        // Reset error

        emailError.innerHTML = "";
        emailError.style.visibility = "hidden";
        // Validation checks
        if (emailValue === "") {
          emailError.innerHTML = "Email is required";
          emailError.style.visibility = "visible";
          console.log("Email is invalid");
        } else if (!EmailRegex.test(emailValue)) {
          emailError.innerHTML = "enter email with correct format";
          emailError.style.visibility = "visible";
          console.log("Email is invalid");
        } else {
          console.log("Email is valid");
        }
      }
      // Password validation
      function Passwordvalidate() {
        const passwordInput = document.querySelector("#signup-password");
        const passwordError = document.querySelector(".password-error");
        const PasswordRegex =
          /^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])[A-Za-z0-9]{8,}$/;
        const passwordValue = passwordInput.value.trim();

        // Reset error

        passwordError.innerHTML = "";
        passwordError.style.visibility = "hidden";

        // Validation checks
        if (passwordValue === "") {
          passwordError.innerHTML = "password is required";
          passwordError.style.visibility = "visible";
          console.log("password is invalid");
        } else if (!PasswordRegex.test(passwordValue)) {
          passwordError.innerHTML = "enter a valid password ";
          passwordError.style.visibility = "visible";
          console.log("password is invalid");
        } else {
          console.log("password is valid");
        }
      }

      signupform.addEventListener("submit", (event) => {
        event.preventDefault();
        //  name,email,password validate functions
        Namevalidation();
        Emailvalidation();
        Passwordvalidate();
        if (validateSignupform()) {
          signupform.submit();
        }
      });
    }

    validateSignupform();
  }
  if (loginform) {
    function loginForm() {
      Emailvalidation();
      Passwordvalidate();
    }
    loginForm();
  }
});
