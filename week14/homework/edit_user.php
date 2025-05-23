<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
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

        #form {
            border: #000 solid 1px;
            padding: 12px;
            width: 45%;
            margin: 25px 0;
            margin-left: auto;
            margin-right: auto;
        }

        #form input {
            margin: 5px 0;
        }

        button {
            cursor: pointer;
        }

        h4 {
            font-size: 18px;
            text-align: center;
            margin: 35px 0;
        }

        a {
            /* border: black solid 1px; */
            text-align: center;
            display: block;
            width: 225px;
            margin-left: auto;
            margin-right: auto;
            font-size: 18px;
        }
    </style>
    <title>Edit User</title>
</head>
<?php require('../dbconnection.php'); ?>
<?php
// $user_id = $_GET['id'];
// $query = "SELECT * FROM users_tbl WHERE id = $user_id";
// $result = mysqli_query($connection, $query);
// $row = mysqli_fetch_array($result);
//if the form has been submitted, do the update process
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // print_r($_POST);
    $user_id = $_POST['id'];
    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $email = $_POST['email'];
    $status = $_POST['status'];

    $update_query = "UPDATE users_tbl 
    SET first_name = '$first_name', 
    last_name = '$last_name', 
    email = '$email', 
    status = '$status'
    WHERE id = $user_id";

    $update_result = mysqli_query($connection, $update_query);
    if ($update_result) {
        echo '<h4>Success! The list of users has been successfully updated!</h4>
        <h4>Click Below to return to list users page.</h4>
		<p><a href="list_users.php">Return to List Users</a></p>';
        exit;
    } else {
        echo "Update Failed";
    }
} else {
    $user_id = $_GET['id'];
    $query = "SELECT * FROM users_tbl WHERE id = $user_id";
    //query results
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);
    //user testing
    echo $user_id;
    echo $query;
}



?>

<body>
    <form action="edit_user.php" id="form" method="POST">
        <h2>Status</h2>
        <div>
            <label for="id">User ID: </label>
            <input type="text" name="id" value="<?php echo $row['id']; ?>" readonly>
        </div>
        <div class="first-name-div">
            <label for="first-name">First Name: </label>
            <input type="text" id="first-name" value="<?php echo $row['first_name']; ?>" name="first-name">
        </div>
        <div class="last-name-div">
            <label for="last-name">Last Name: </label>
            <input type="text" id="last-name" value="<?php echo $row['last_name']; ?>" name="last-name">
        </div>
        <div class="email-div">
            <label for="email">Email: </label>
            <input type="email" id="email" value="<?php echo $row['email']; ?>" name="email">
        </div>
        <div class="status-div">
            <label for="status">Status: </label>
            <input type="text" id="status" value="<?php echo $row['status']; ?>" name="status">
        </div>
        <div class="button-field">
            <button type="submit">Submit</button>
        </div>
    </form>
</body>

</html>