<!DOCTYPE html>

<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Delivery</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="../../index.css">
    <!-- Add icon library -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
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
      <h1>Deliveries</h1>
    </div>

    <div class="group">
      <div class="grid">
        <label for="farm">Select Farm</label>
        <select name="Farm" class = "txt" id="farm">
          <option value="Wisco">Wisco</option>
          <option value="Heeg">Heeg</option>
          <option value="Brandner">Brandner</option>
          <option value="Bergert">Bergert</option>
          <option value="Marti">Marti</option>
        </select>

        <label for="date">Date of Delivery</label>
        <input type="date" class = "txt" name="Date" id="date" required>
      </div>
    </div>
    <br>
    <br>
    <input type="submit" class = "submit" value="Submit" id="submit-button">
    <br>
    <br>
    <table id="delivery" class="display" style="width:100%">
            <thead>
                <th>DID</th>
                <th>FARM</th>
                <th>DDATE</th>
            </thead>
            <tbody>
                <?php
                        $connection = new mysqli("localhost", "ubuntu", "", "PureProduction");

                        $result = $connection->query("SELECT * FROM Deliveries");

                        while($row = $result->fetch_assoc()){
                                echo    "<tr>
                                                <td>" . $row['DID'] . "</td>
                                                <td>" . $row['FARM'] . "</td>
                                                <td>" . $row['DDATE'] . "</td>
                                        </tr>";
                        }
                ?>
            </tbody>
        </table>

        <script>
            $(document).ready(function () {
                $('#delivery').DataTable();
            });
        </script>
  </body>
</html>

<!-- Load HTML content, then JS  -->
<script src="delivery.js"> </script>