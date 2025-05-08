<!DOCTYPE html>
<html>

<head>
    <title>List Products</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: rgb(245, 224, 159);
            font-family: monospace;

        }

        h1,
        h2 {
            text-align: center;
        }

        table {
            margin: 25px 0;
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

        header {
            width: 100%;
            padding: 30px;
            border-bottom: rgb(9, 114, 200) solid 1.5px;
            margin-bottom: 30px;
        }

        header ul {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        header ul li {
            list-style: none;
            font-size: 17.5px;
        }

        header ul li a:hover {
            text-decoration: underline;
            color: rgb(21, 237, 187);
        }

        header ul li a {
            text-decoration: none;
            color: rgb(2, 123, 174);
        }
    </style>
</head>

<body>
    <?php
    require('../dbconnection.php'); // use require because we want to force this to exist before running our queries
    include '../includes/header.php';
    echo "<h1>List Of Guitars From Our Store</h1>";
    //And now to perform a simple query to make sure it's working
    $query = "SELECT * FROM products";
    $result = mysqli_query($connection, $query);


    echo "<table><thead><td class='center'>Product ID Number</td><td>Product Name</td><td>Color Selected</td><td>Created Date</td><td>Last Updated</td></thead>"; // open table and include table headings

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td class='center'>" . $row['product_id'] . "</td><td>" . $row['product_name'] . "</td><td>" . $row['color'] . "</td><td>" . $row['created_date'] . "</td><td>" . $row['last_updated'] . "</td></tr>";
    }
    echo "</table>"; // close table

    ?>
</body>

</html>