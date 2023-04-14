console.log("Hello, world");
// ellements for registration
const authform = document.querySelector("form#auth-form");
console.log("form", authform);

const nameInput = document.querySelector("form#auth-form #name");
console.log("nameInput", nameInput);

const emailInput = document.querySelector("form#auth-form #email");
console.log("emailInput", emailInput);

const passwordInput = document.querySelector("form#auth-form #password");
console.log("password", passwordInput);

const passwordValidationInput = document.querySelector(
  "form#auth-form #password-validation"
);
console.log("password validation", passwordValidationInput);

// // Standardvalues for registration
// nameInput.value = "Sven Svensson";
// emailInput.value = "sven.svensson@example.com";
// passwordInput.value = "1234567890";
// passwordValidationInput.value = "1234567890";

// authform.addEventListener("submit", authFormSubmit);

// function authFormSubmit(event) {
//   event.preventDefault();

//   const nameValue = nameInput.value.trim();
//   console.log("name value ", nameValue);
//   const emailValue = emailInput.value.trim();
//   const passwordValue = passwordInput.value.trim();
//   const passwordValidationValue = passwordValidationInput.value.trim();

//   //validation of name
//   if (nameValue.length > 3 && nameValue.includes(" ")) {
//     console.log("name is valid");
//   } else if (!nameValue.includes(" ")) {
//     nameLabel.innerText = "Namn (för OCH efternamn)";
//   } else {
//     console.log("name is invalid");
//   }

//   //   validation of password
//   if (passwordValue.length > 7 && passwordValue == passwordValidationValue) {
//     console.log("du är registrerad");
//     const registered = true;
//     authform.submit();
//   } else if (passwordValue != passwordValidationValue) {
//     passwordLabel.innerText = "Lösenorden måste matcha";
//   } else {
//     console.log("ditt lösenord är för kort");
//   }
// }
