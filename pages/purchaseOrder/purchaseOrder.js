// Get references to the form elements and output div
const amountInput = document.getElementById('amount');
const fromInput = document.getElementById('from');
const toInput = document.getElementById('to');
// const outputDiv = document.getElementById('output');
var count = 0;

// Listen for the form submission event
document.getElementById('submit-button').addEventListener('click', function (event) {
  event.preventDefault();

  // Get the values of the form elements
  const amount = amountInput.value;
  const from = fromInput.value;
  const to = toInput.value;
  count += 1;

  // Build the output string
  const outputString = `Amount: ${amount}, Coming From: ${from}, Going To: ${to}`;

  // Display the output string in the output div
  // outputDiv.innerHTML += `<div>New Entry ${count}: [${outputString}]</div>`;

  //log the data to the console
  console.log(`New Entry ${count}: [${outputString}]`)
});