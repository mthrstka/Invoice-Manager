<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <title>Purchase Order</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="../../index.css">
    <link rel="icon" href="../../Assests\logo.ico" type="image/icon type">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="purchaseOrder.js"></script>
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
      <h1>Purchase Orders</h1>
    </div>

    <div class="group">
      <div class="grid">
        <label for="amount">Amount</label>
        <input type="number" class = "txt" id="amount" name="amount">  

        <label for="from">Coming From</label>
        <select name="from" class = "txt" id="from">
          <option value="VTM">VTM</option>
          <option value="Magnum">Magnum</option>
        </select>

        <label for="to">Going To</label>
        <select name="to" class = "txt" id="to">
          <option value="NSE">NSE</option>
          <option value="Wisco">Wisco</option>
          <option value="Provision">Provision</option>
          <option value="RC">RC</option>
        </select>
      </div>
    </div>
    <br>
    <br>

    <input type="submit" class = "submit" value="Submit" id="submit-button">
    <input type="submit" class = "submit" value="Generate CSV" id="csv-button" onclick="generateCSV()"> 
    <br>

    <!-- Pre-deployment: Display an output of the inputs submitted below the form -->
    <!-- For deployment: Display the ouput of the inputs submitted to the console or a log file, only display to user if there is an exception sending it to the DB. -->
    <div id="output"></div>
    <br>
    <br>
    <table id="consult" class="display" style="width:100%">
            <thead>
                <th>PID</th>
                <th>PODATE</th>
                <th>MILL</th>
                <th>RATES</th>
            </thead>
            <tbody>
                <?php
                        $connection = new mysqli("localhost", "ubuntu", "", "PureProduction");

                        $result = $connection->query("SELECT * FROM PurchaseOrders");

                        while($row = $result->fetch_assoc()){
                                echo    "<tr>
                                                <td>" . $row['PID'] . "</td>
                                                <td>" . $row['PODATE'] . "</td>
                                                <td>" . $row['MILL'] . "</td>
                                                <td>" . $row['RATES'] . "</td>
                                        </tr>";
                        }
                ?>
            </tbody>
        </table>

        <script>
            $(document).ready(function () {
                $('#consult').DataTable();
            });
        </script>

  </body>
</html>

<!-- Load HTML content, then JS  -->
<script src="purchaseOrder.html"> </script>