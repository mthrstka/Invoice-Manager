<!DOCTYPE html>

<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Invoicing</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="../../index.css">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
<script src="https://unpkg.com/jspdf-invoice-template@1.4.3/dist/index.js"></script>


  </head>

  <div class="topbar">
        <a class="homeButton" href='../../index.html'><i class="fa fa-home"></i></a>
        <a href="../expenses/expenses.php">Expenses</a>
        <a href="../delivery/delivery.php">Deliveries</a>
        <a href="../consulting/consulting.php">Consulting</a>
        <a href="../invoice/invoice.php">Invoices</a>
        <a href="../purchaseOrder/purchaseOrder.php">Purchase Order</a>
  </div>

  <body>

    <div class="title">
      <h1>Invoices</h1>

    </div>

    <div class="group">
      <div class="grid">

        <label>Customer</label>
        <select id="select" class="txt">
          <option value="op1">op1</option>
          <option value="op2">op2</option>
          <option value="op3">op3</option>
          <option value="op4">op4</option>
          <option value="op5">op5</option>
        </select>

        <label>Description</label>
        <input type="text" class = "txt" id="descr">
        <label>Quantity</label>
        <input type ="number" class = "txt" id="qty">
        <label>Price</label>
        <input type = "number" class = "txt" id="price">
        <label>Customer Message</label>
        <input type = "text" class = "txt" id="msg">
        <p>Invoice Number</p>


      </div>
    </div>
    <br>
    <br>
    <input type="submit" class = "submit" value="Generate Invoice" id="submit-button" onclick="generatePDF()">
    <br>
    <br>
    <input type="button" class = "addCust" value="Add Customer"  onclick="window.location.href='../addcust/addcust.html'">
    <br>
    <br>
    <table id="invoice" class="display" style="width:100%">

      <thead>
          <th>IID</th>
          <th>CUSTOMER</th>
          <th>DESCRIPTION</th>
          <th>QUANTITY</th>
          <th>PRICE</th>
          <th>CMESSAGE</th>
      </thead>
      <tbody>
          <?php
                  $connection = new mysqli("localhost", "ubuntu", "", "PureProduction");

                  $result = $connection->query("SELECT * FROM Invoices");

                  while($row = $result->fetch_assoc()){
                          echo    "<tr>
                                          <td>" . $row['IID'] . "</td>
                                          <td>" . $row['CUSTOMER'] . "</td>
                                          <td>" . $row['DESCRIPTION'] . "</td>
                                          <td>" . $row['QUANTITY'] . "</td>
                                          <td>" . $row['PRICE'] . "</td>
                                          <td>" . $row['CMESSAGE'] . "</td>
                                  </tr>";
                  }
          ?>
      </tbody>
  </table>

  <script>
      $(document).ready(function () {
          $('#invoice').DataTable();
      });
  </script>
    <br><br>
    <img src="../../Assests/logo-original-200.jpeg" id = "logo" alt="My Image" class="img" style="float: center;">

  </body>
</html>

<!-- Load HTML content, then JS  -->
  <script src="../invoice/generate-invoice.js"></script>