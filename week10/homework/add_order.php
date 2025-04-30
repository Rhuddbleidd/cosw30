<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        h1 {
            text-align: center;
            margin: 50px 0;
            font-family: "Lato", sans-serif;
            font-weight: 500;
            font-style: normal;
        }

        body {
            background-color: rgb(245, 224, 159);
            font-family: monospace;
        }

        form {
            border: solid #ccc 1px;
            width: 31.25rem;
            padding: 8px;
            background-color: #fff;
            border-radius: 6px;
            margin-left: auto;
            margin-right: auto;
        }

        form input {
            display: block;
            width: 60%;
            height: 1.60rem;
            margin: 25px 0;
            margin-left: auto;
            margin-right: auto;
        }

        form button {
            display: block;
            width: 75px;
            margin: 25px 0;
            margin-left: auto;
            margin-right: auto;
            height: 1.60rem;
            cursor: pointer;
        }

        table,
        th,
        td {
            border: 1px solid;
        }

        td {
            width: 100px;
        }

        thead {
            font-weight: bold;
            background-color: red;
        }

        .center {
            text-align: center;
        }

        .form-error {
            color: #f00;
        }

        header {
            width: 100%;
            padding: 25px;
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
    <title>Add Order</title>
</head>

<body>
    <?php include '../includes/header.php'; ?>
    <main>
        <section>
            <article>
                <h1>Place An Order Here</h1>
                <form action="add_order.php" method="post">
                    <label for="guitars">Choose Your Order Below</label>
                    <select name="guitars" id="guitars">
                        <option value="">Select Order</option>
                        <option value="1">Carvin V220</option>
                        <option value="2">Ibanez Jem Evo</option>
                        <option value="3">FrankenStrat</option>
                        <option value="4">Polka Dot V</option>
                        <option value="5">JB Numbers Guitar</option>
                        <option value="6">Fender YM Stratocaster</option>
                        <option value="7">KH-202</option>
                        <option value="8">KH White Zombie</option>
                        <option value="9">Sawtooth Double Guitar</option>
                        <option value="10">Despagni Flame</option>
                        <option value="11">Ibanez JPM100</option>
                        <option value="12">KH 2 Vintage</option>
                        <option value="13">KH Demonology</option>
                    </select>
                    <button type="submit">Click Here</button>
                    <?php

                    // Check if the form has been submitted:
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                        $problem = false; // No problems so far. 

                        // Check for each value...
                        if (empty($_POST['guitars'])) {
                            $problem = true;
                            print '<p><span class="form-error">Please enter your Selection.</span></p>';
                        }

                        if (!$problem) { // If there weren't any problems...

                            // Add user to database

                            $order_number = $_POST['guitars'];
                            $id_num = rand(1, 20);

                            require('../dbconnection.php');

                            $sql = "INSERT INTO orders (product_id, user_id)
    VALUES ('" . $order_number . "','" . $id_num . "')";

                            if (mysqli_query($connection, $sql)) {
                                echo '<p><span class="form-success">Thank you for ordering.</span></p>';
                            } else {
                                echo "Error: " . $sql . "<br>" . mysqli_error($connection);
                            }

                            mysqli_close($connection);

                            // Clear the posted values:
                            $_POST = [];
                        } else { // Forgot a field.
                            print '<p><span class="form-error">Please try again!</span></p>';
                        }
                    } // End of handle form IF.

                    ?>
                </form>
            </article>
        </section>
    </main>
</body>
<html>