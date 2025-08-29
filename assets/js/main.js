document.addEventListener("DOMContentLoaded", () => {
  // singup-form validation
  const signupform = document.querySelector("#signupForm");
  const nameinput = document.querySelector("#signup-name");
  const nameregex = /^[A-Za-z\s'-]{3,30}$/;
  const emailinput = document.querySelector("#signup-email");
  const emailregex = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;
  const passwordinput = document.querySelector("#signup-password");
  const passregex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])[A-Za-z0-9]{8,}$/;
  if (password && nameinput && emailinput && signupform) {
    signupform.addEventListener("submit", function (event) {
      event.preventDefault();
      const nameerr = document.querySelector(".name-error");
      const emailerr = document.querySelector(".email-error");
      const passworderr = document.querySelector(".password-error");
      const namevalue = nameinput.value.trim();
      const emailvalue = emailinput.value.trim();
      const passwordvalue = passwordinput.value.trim();
      if (passregex.test(passwordvalue)) {
        passworderr.innerHTML = "";
        passworderr.style.visibility = "hidden";
      } else {
        passworderr.innerHTML =
          "Password must include uppercase, lowercase, and a number";
        passworderr.style.visibility = "visible";
      }

      if (emailregex.test(emailvalue)) {
        emailerr.innerHTML = "";
        emailerr.style.visibility = "hidden";
      } else {
        emailerr.innerHTML = "Please enter a valid email";
        emailerr.style.visibility = "visible";
      }

      if (nameregex.test(namevalue)) {
        nameerr.innerHTML = "";
        nameerr.style.visibility = "hidden";
      } else {
        nameerr.innerHTML =
          "Name can only contain letters, spaces, hyphens, or apostrophes";
        nameerr.style.visibility = "visible";
      }
      if (
        passworderr.innerHTML === "" &&
        nameerr.innerHTML === "" &&
        emailerr.innerHTML === "" &&
        signupform.checkValidity()
      ) {
        console.log("Form is valid ");
        signupform.submit(); // Submit to backend
      } else {
        console.log("Form has errors - please fix them");
        signupform.reportValidity(); // Show browser-native validation messages
      }
    });
  }
});
