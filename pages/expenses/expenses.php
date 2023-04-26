<!DOCTYPE html>

<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Expenses</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="../../index.css">
    <link rel="icon" href="../../Assests\logo.ico" type="image/icon type">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
      <h1>Expenses</h1>
    </div>

    <!-- 'group' class places the content into the box
         'grid' aligns the labels and inputs
         these must be separate to work correctly -->
    <div class="group"> 
      <div class="grid">
        <label>Amount </label>
        <input type="text" class = "txt" id="amount" name="amount">
      

        <label for="date">Date of Delivery</label>
        <input type="date" class = "txt" name="Date" id="date">
      

        <label>Place of Purchase </label>
        <input type="text" class = "txt" id="place" name="place">
      

        <label for="category">Choose a Category</label>
        <select name="category" class = "txt" id="category">
          <option value="Advertising">Advertising</option>
          <option value="Cell">Cell</option>
          <option value="Consulting Services">Consulting Services</option>
          <option value="Donations">Donations</option>
          <option value="Feed">Feed</option>
          <option value="Financial Planning">Financial Planning</option>
          <option value="Gifts">Gifts</option>
          <option value="Internet">Internet</option>
          <option value="Machinery">Machinery</option>
          <option value="Meals">Meals</option>
          <option value="Supplies">Supplies</option>
        </select>
      </div>
    </div>
    <br>
    <br>
    <input type="submit" class="submit" value="Submit" id="submit-button">
    <input type="submit" class = "submit" value="Generate CSV" id="csv-button" onclick="generateCSV()">
    <br>
    <br>
    <table id="expenses" class="display" style="width:100%">
            <thead>
                <th>PLACE</th>
                <th>ECATAGORY</th>
                <th>EID</th>
                <th>ECOST</th>
                <th>EDATE</th>
            </thead>
            <tbody>
                <?php
                        $connection = new mysqli("localhost", "ubuntu", "", "PureProduction");

                        $result = $connection->query("SELECT * FROM Expenses");

                        while($row = $result->fetch_assoc()){
                                echo    "<tr>
                                                <td>" . $row['PLACE'] . "</td>
                                                <td>" . $row['ECATAGORY'] . "</td>
                                                <td>" . $row['EID'] . "</td>
                                                <td>" . $row['ECOST'] . "</td>
                                                <td>" . $row['EDATE'] . "</td>
                                        </tr>";
                        }
                ?>
            </tbody>
        </table>

        <script>
            $(document).ready(function () {
                $('#expenses').DataTable();
            });
        </script>

  </body>
</html>

<!-- Load HTML content, then JS  -->
<script src="expenses.js"> </script>