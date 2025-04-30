<!DOCTYPE html>
<html>

<head>
    <title>Orders</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: monospace;
        }

        h1,
        h2 {
            display: block;
            width: 225px;
            margin: 35px 0;
            margin-left: auto;
            margin-right: auto;
        }

        table {
            margin: 10px 0;
            margin-left: auto;
            margin-right: auto;
            width: 65%;
            overflow: hidden;

        }

        table,
        th,
        td {
            border: 1px solid #000;
            border-collapse: collapse;
            text-align: center;
        }

        td {
            width: 100px;
        }

        td,
        th {
            padding: 12px 15px;
        }

        thead {
            font-weight: bold;
            background-color: rgb(21, 237, 187);
        }

        thead tr {
            color: #fff;
            font-weight: bold;
        }

        .center {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    require('../dbconnection.php'); // use require because we want to force this to exist before running our queries

    echo "<h1>Guitar Store</h1>";
    echo "<h2>Orders Placed Below</h2>";
    //And now to perform a simple query to make sure it's working
    $query = "SELECT * FROM orders";
    $result = mysqli_query($connection, $query);


    echo "<table><thead><td class='center'>Order ID</td><td>Product ID</td><td>User ID</td><td>Order Status</td></thead>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td class='center'>" . $row['order_id'] . "</td><td>" . $row['product_id'] . "</td><td>" . $row['user_id'] . "</td><td>" . $row['order_status'] . "</td></tr>";
    }
    echo "</table>"; // close table

    ?>
</body>

</html>