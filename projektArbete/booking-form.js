// Ellements
const bookingForm = document.querySelector("form#booking");
console.log("form", bookingForm);

const nameInput = document.querySelector("form#booking #name");
console.log("nameInput", nameInput);

const emailInput = document.querySelector("form#booking #email");
console.log("emailInput", emailInput);

const descriptionInput = document.querySelector("form#booking #description");

const nameLabel = document.querySelector("form#booking #nameLabel");

console.log("Hello, world");

// standard values
nameInput.value = "Sven Svensson";
emailInput.value = "sven.svensson@example.com";
descriptionInput.value = "Jag behöver hjälp med ... ";

bookingForm.addEventListener("submit", bookingFormSubmit);

function bookingFormSubmit(event) {
  event.preventDefault();

  const nameValue = nameInput.value.trim();
  console.log("name value ", nameValue);
  const emailValue = emailInput.value.trim();

  if (nameValue.length > 3 && nameValue.includes(" ")) {
    console.log("valid");
    bookingForm.submit();
  } else if (!nameValue.includes(" ")) {
    nameLabel.innerText = "Namn (för OCH efternamn)";
  } else {
    console.log("invalid");
  }

  console.log(event);
}
