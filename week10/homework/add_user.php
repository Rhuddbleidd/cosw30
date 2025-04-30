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
    <title>Add Users</title>
</head>

<body>
    <?php include '../includes/header.php'; ?>
    <main>
        <section>
            <article>
                <h1>Add New User Here</h1>
                <form action="add_user.php" method="post">
                    <!-- first name input below  -->
                    <input type="text" name="first-name" id="first-name" placeholder="First Name" value="<?php if (isset($_POST['first-name'])) {
                                                                                                                print htmlspecialchars($_POST['first-name']);
                                                                                                            } ?>">
                    <!-- last name input below  -->
                    <input type="text" name="last-name" id="last-name" placeholder="Last Name" value="<?php if (isset($_POST['last-name'])) {
                                                                                                            print htmlspecialchars($_POST['last-name']);
                                                                                                        } ?>">
                    <!-- email input below  -->
                    <input type="email" name="email" id="email" placeholder="Email" value="<?php if (isset($_POST['email'])) {
                                                                                                print htmlspecialchars($_POST['email']);
                                                                                            } ?>">

                    <!-- password fields below-->
                    <input type="password" name="password" id="password" placeholder="Password">
                    <input type="password" name="confirm-password" id="confirm-password" placeholder="Confirm Password">
                    <button type="submit">Click Here</button>

                    <?php
                    // Check if the form has been submitted:
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                        $problem = false; // No problems so far. 

                        // Check for each value...
                        if (empty($_POST['first-name'])) {
                            $problem = true;
                            print '<p><span class="form-error">Please enter your first name.</span></p>';
                        }

                        if (empty($_POST['last-name'])) {
                            $problem = true;
                            print '<p><span class="form-error">Please enter your last name.</span></p>';
                        }

                        if (empty($_POST['email'])) {
                            $problem = true;
                            print '<p><span class="form-error">Please enter your email address.</span></p>';
                        }

                        if (empty($_POST['password'])) {
                            $problem = true;
                            print '<p><span class="form-error">Please enter a password!</span></p>';
                        }

                        if ($_POST['password'] != $_POST['confirm-password']) {
                            $problem = true;
                            print '<p><span class="form-error">Your password did not match your confirmed password!</span></p>';
                        }

                        if (!$problem) { // If there weren't any problems...

                            // Add user to database

                            $firstname = $_POST['first-name'];
                            $lastname = $_POST['last-name'];
                            $email = $_POST['email'];
                            $password = $_POST['password'];

                            require('dbconnection.php');

                            $sql = "INSERT INTO users_tbl (first_name, last_name, email, password)
                            VALUES ('" . $firstname . "','" . $lastname . "','" . $email . "','" . $password . "')";

                            if (mysqli_query($connection, $sql)) {
                                echo '<p><span class="form-success">' . $firstname . ' ' . $lastname . ' added as a new user.</span></p>';
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