// Function to display message
function displayMessage() {
    alert("Proceed to payment! We are verifing card details!");
  }
  
  // Adding event listener to the button
  document.addEventListener("DOMContentLoaded", function() {
    document.querySelector('.btn').addEventListener('click', displayMessage);
  });
  