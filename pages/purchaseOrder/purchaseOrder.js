// Get references to the form elements and output div
const amountInput = document.getElementById('amount');
const fromInput = document.getElementById('from');
const toInput = document.getElementById('to');
// const outputDiv = document.getElementById('output');
var count = 0;

// Listen for the form submission event
document.getElementById("submit-button").addEventListener('click', function (event) {
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


//generateCSV():
//input: none
//out: csv file w/ data from txt fields
function generateCSV() {
  // Get input values from HTML
  const amount = document.getElementById("amount").value;
  const from = document.getElementById("from").value;
  const to = document.getElementById("to").value;

  // Define header titles and data for CSV file
  const csvData = [
    ["Amount", "From", "To"],
    [amount, from, to]
  ];

  // Convert CSV data to a string
  const csvString = csvData.map(row => row.join(',')).join('\n');

  // Create a temporary HTML link element to download the CSV file
  const link = document.createElement('a'); //creates link element
  link.setAttribute('href', 'data:text/csv;charset=utf-8,' + encodeURIComponent(csvString)); //adds a data to the file through the href
  link.setAttribute('download', 'data.csv'); //adds download to link
  link.style.display = 'none'; //hide link
  document.body.appendChild(link); //add link to the page

  // "Click" the link to download the CSV file
  link.click();

  // Remove the link element from the HTML
  document.body.removeChild(link);

}