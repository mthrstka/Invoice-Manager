// Get references to the form elements and output div
const farmInput = document.getElementById('farm');
const dateInput = document.getElementById('date');
var count = 0;

// Listen for the form submission event
document.getElementById('submit-button').addEventListener('click', function (event) {
  event.preventDefault();

  // Get the values of the form elements
  const farm = farmInput.value;
  const date = dateInput.value;
  count += 1;

  // Build the output string
  const outputString = `Farm: ${farm}, Date: ${date}`;

  //log the data to the console
  console.log(`New Entry ${count}: [${outputString}]`)
});