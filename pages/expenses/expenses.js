
// Get references to the form elements and output div
    const amountInput = document.getElementById('amount');
    const dateInput = document.getElementById('date');
    const placeInput = document.getElementById('place');
    const categoryInput = document.getElementById('category');
    var count = 0;

    // Listen for the form submission event
    document.getElementById('submit-button').addEventListener('click', function (event) {
        event.preventDefault();

        // Get the values of the form elements
        const amount = amountInput.value;
        const date = dateInput.value;
        const place = placeInput.value;
        const category = categoryInput.value;
        count += 1;

        // Build the output string
        const outputString = `Amount: ${amount}, Date: ${date}, Place: ${place}, Category: ${category}`;

        //log the data to the console
        console.log(`New Entry ${count}: [${outputString}]`);
      });

//generateCSV():
//input: none
//out: csv file w/ data from txt fields
function generateCSV() {
  // Get input values from HTML
  const amount = document.getElementById("amount").value;
  const date = document.getElementById("date").value;
  const place = document.getElementById("place").value;
  const category = document.getElementById("category").value;

  // Define header titles and data for CSV file
   //TODO: modify this string once connected to DB to:
          // - use loop to add to csvData 2D array under the titles
          // - [0] = amount, [1] = date, [2] = place, [3] = category
  const csvData = [
    ["Amount", "Date", "Place", "Category"],
    [amount, date, place, category]
  ];

  // Convert CSV data to a string
  const csvString = csvData.map(row => row.join(',')).join('\n');

  // Create a temporary HTML link element to download the CSV file
  const link = document.createElement('a'); //creates link element
  link.setAttribute('href', 'data:text/csv;charset=utf-8,' + encodeURIComponent(csvString)); //adds a data to the file through the href
  link.setAttribute('download', 'expenses.csv'); //adds download to link
  link.style.display = 'none'; //hide link
  document.body.appendChild(link); //add link to the page

  // "Click" the link to download the CSV file
  link.click();

  // Remove the link element from the HTML
  document.body.removeChild(link);

}