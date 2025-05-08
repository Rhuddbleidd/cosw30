<!DOCTYPE html>
<html>

<head>
    <title>List Orders</title>
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

        .form-error {
            color: #f00;
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
    <?php include '../includes/header.php'; ?>
    <?php
    require('../dbconnection.php'); // use require because we want to force this to exist before running our queries

    echo "<h1>Order Information</h1>";
    //And now to perform a simple query to make sure it's working
    $query = "SELECT first_name, last_name, email, product_name, product_price FROM users_tbl 
    INNER JOIN products ON users_tbl.id = products.product_id;";
    $result = mysqli_query($connection, $query);


    echo "<table><thead><td class='center'>First Name</td><td>Last Name</td><td>Email</td><td>Product Name</td><td>Product Price</td></thead>"; // open table and include table headings

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td class='center'>" . $row['first_name'] . "</td><td>" . $row['last_name'] . "</td><td>" . $row['email'] . "</td><td>" . $row['product_name'] . "</td><td>" . "$" . $row['product_price'] . "</td></tr>";
    }
    echo "</table>"; // close table

    ?>
</body>

</html>