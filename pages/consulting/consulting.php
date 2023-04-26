<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <title>Pure Production</title>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="../../index.css">
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min">
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    </head>

<body>

    <div class="topbar">
        <a class="homeButton" href='../../index.html'><i class="fa fa-home"></i></a>
        <a href="../expenses/expenses.php">Expenses</a>
        <a href="../delivery/delivery.php">Deliveries</a>
        <a href="../consulting/consulting.php">Consulting</a>
        <a href="../invoice/invoice.php">Invoices</a>
        <a href="../purchaseOrder/purchaseOrder.php">Purchase Order</a>
    </div>

        <div class="title">
            <h1>Consulting</h1>
        </div>

        <table id="consult" class="display" style="width:100%">
            <thead>
                <th>CID</th>
                <th>MDATE</th>
                <th>PRODUCTS</th>
                <th>CONSULTANT</th>
                <th>PRICEPERLB</th>
            </thead>
            <tbody>
                <?php
                        $connection = new mysqli("localhost", "ubuntu", "", "PureProduction");

                        $result = $connection->query("SELECT * FROM Consulting");

                        while($row = $result->fetch_assoc()){
                                echo    "<tr>
                                                <td>" . $row['CID'] . "</td>
                                                <td>" . $row['MDATE'] . "</td>
                                                <td>" . $row['PRODUCTS'] . "</td>
                                                <td>" . $row['CONSULTANT'] . "</td>
                                                <td>" . $row['PRICEPERLB'] . "</td>
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
