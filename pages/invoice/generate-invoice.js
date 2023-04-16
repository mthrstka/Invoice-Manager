
function getInput() {
  const customer = document.getElementById("select").value;
  const description = document.getElementById("descr").value;
  const quantity = document.getElementById("qty").value;
  const price = document.getElementById("price").value;
  const message = document.getElementById("msg").value;
}

 function generatePDF() {

      const doc = new jsPDF();
      // Add company logo
      // doc.addImage("logo.png", "PNG", 10, 10, 50, 50);
 

       

      // Add company information
      doc.setFontSize(14);
      doc.setFontType("bold");
      doc.text("Pure Production Consulting LLC", 50, 20);
      doc.setFontType("normal");
      doc.text("W4259 Capital Rd. ", 50, 28);
      doc.text("Loyal, WI 54446", 50, 36);
      doc.text("Phone: (715) 937-6745", 50, 44);
      doc.text("Email: jim@pureproduction.com", 50, 52);
      
      // Add invoice information
      doc.setFontSize(12);
      doc.setFontType("bold");
      doc.text("Invoice", 10, 70);
      doc.setFontType("normal");
      doc.text("Invoice #12345", 10, 78);
      doc.text("Invoice Date: " + new Date().toLocaleDateString(), 10, 86);
      
      // Add table header
      const tableHeaders = ["Description", "Quantity", "Price", "Total"];
      let y = 100;
      doc.setFontType("bold");
      doc.text(tableHeaders[0], 10, y);
      doc.text(tableHeaders[1], 80, y);
      doc.text(tableHeaders[2], 120, y);
      doc.text(tableHeaders[3], 160, y);
      doc.line(10, y + 3, 200, y + 3);
      y += 10;
      
      // Add table rows
      const tableRows = [
        ["Item 1", "2", "$10.00", "$20.00"],
        ["Item 2", "3", "$15.00", "$45.00"],
        ["Item 3", "1", "$25.00", "$25.00"],
        ["Item 4", "5", "$5.00", "$25.00"]
      ];
      doc.setFontType("normal");
      doc.setFontSize(10);
      for (let i = 0; i < tableRows.length; i++) {
        doc.text(tableRows[i][0], 10, y);
        doc.text(tableRows[i][1], 80, y);
        doc.text(tableRows[i][2], 120, y);
        doc.text(tableRows[i][3], 160, y);
        y += 10;
      }
      
      // Add totals
      doc.setFontType("bold");
      doc.text("Subtotal:", 120, y);
      doc.text("$115.00", 160, y);
      y += 10;
      doc.text("Tax (10%):", 120, y);
      doc.text("$11.50", 160, y);
      y += 10;
      doc.text("Total:", 120, y);
      doc.text("$126.50", 160, y);
      
      // Save the PDF
      doc.save("invoice.pdf");
    }