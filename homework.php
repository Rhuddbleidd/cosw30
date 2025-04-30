<html>

<head>
    <title>Basic Form</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Orbitron:wght@400..900&display=swap");

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-image: linear-gradient(to bottom right,
                    rgb(244, 252, 7),
                    rgb(255, 172, 18),
                    rgb(252, 7, 7));

            font-family: "Comfortaa", sans-serif;
            font-optical-sizing: auto;
        }

        h1 {
            margin: 20px;
            text-align: center;
            color: rgb(0, 191, 32);
            font-family: "Orbitron", monospace;
            font-optical-sizing: auto;
        }

        h2 {
            font-family: "Comfortaa", sans-serif;
            color: rgb(0, 191, 32);
        }

        form {
            width: 65%;
            min-width: 350px;
            padding: 30px;
            background-color: #ffffff;
            margin: 25px 0;
            margin-left: auto;
            margin-right: auto;
            border-radius: 8px;
        }

        form span {
            margin: 3px;
            color: #f00;
        }

        form input,
        label {
            margin: 0;
        }

        form input {
            padding: 1px;
            border: 1.5px rgb(141, 1, 111) solid;
            border-radius: 3px;
            outline: none;
            /* color: rgb(0, 191, 32); */
        }

        form input:focus {
            box-shadow: 1px 1px 3px rgb(141, 1, 111);
        }

        form input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            display: block;
        }

        textarea {
            min-width: 225px;
            max-height: 250px;
            min-height: 100px;
            max-width: 100%;
            padding: 1px;
            border: 1.5px rgb(141, 1, 111) solid;
            border-radius: 3px;
            outline: none;
        }

        textarea:focus {
            box-shadow: 1px 1px 3px rgb(141, 1, 111);
        }

        input[type="radio"] {
            margin: 0 6px;
            padding: 2px;
            color: #ebebeb;
        }

        input[type="checkbox"] {
            margin: 4px 5px;
            padding: 2px;
            color: #ebebeb;
        }

        input[type="submit"] {
            background-color: rgb(141, 1, 111);
            color: rgb(9, 255, 0);
            padding: 6px;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: rgb(26, 79, 255);
            box-shadow: 1px 1px 2px;
        }
    </style>
</head>

<body>
    <?php
    // define variables and set to empty values
    $passwordErr = $nameErr = $emailErr = $genderErr = $commentErr = $websiteErr
        = $occupationErr = $offerErr = "";

    $password = $name = $email = $gender = $comment = $website = $occupation
        = $offer = "";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = $_POST["name"];
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = $_POST["email"];
        }

        if (empty($_POST["website"])) {
            $websiteErr = "Your website is required";
        } else {
            $website = $_POST["website"];
        }

        if (empty($_POST["occupation"])) {
            $occupationErr = "Enter your Occupation Please";
        } else {
            $occupation = $_POST["occupation"];
        }


        if (empty($_POST["comment"])) {
            $commentErr = "Please Enter A Comment In The Textbox";
        } else {
            $comment = $_POST["comment"];
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = $_POST["gender"];
        }

        if (empty($_POST["offer"])) {
            $offerErr = "Please select a subscription option";
        } else {
            $offer = $_POST["offer"];
        }

        if (empty($_POST["password"])) {
            $passwordErr = "Password is required";
        } else {
            $password = $_POST["password"];
        }
    }

    ?>
    <h1>Sign in to our page</h1>
    <form method="POST" action="homework.php">

        <label for="name">Name: </label>
        <input type="text" name="name" id="name" value="<?php echo $name; ?>">
        <span class="error"> <?php if ($nameErr != "") echo "&lowast; ";
                                echo $nameErr; ?></span>
        <br><br>
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" value="<?php echo $email; ?>">
        <span class="error"><?php if ($nameErr != "") echo "&lowast; ";
                            echo $emailErr; ?></span>
        <br><br>
        <label for="website">Website:</label>
        <input type="text" name="website" id="website" value="<?php echo $website; ?>">
        <span class="error"><?php if ($nameErr != "") echo "&lowast; ";
                            echo $websiteErr; ?></span>
        <br><br>
        <label for="password">Password: </label>
        <input type="password" name="password" id="password"
            placeholder="Enter Password Here" value="<?php echo $password; ?>">
        <span class="error"><?php if ($nameErr != "") echo "&lowast; ";
                            echo $passwordErr; ?></span>
        <br><br>
        <label for="occupation"></label>
        <select name="occupation" id="occupation">
            <option disabled <?php if ($occupation == "") echo "selected"; ?>>
                Enter Occupation</option>
            <option value="student" <?php if ($occupation == "student") echo "selected"; ?>>Student</option>
            <option value="programmer" <?php if ($occupation == "programmer") echo "selected"; ?>>Programmer</option>
            <option value="other" <?php if ($occupation == "other") echo "selected"; ?>>Other</option>
        </select>
        <span class="error"><?php if ($nameErr != "") echo "&lowast; ";
                            echo $occupationErr; ?></span>
        <br><br>
        <label for="comment">Enter Your Comment Below: </label>
        <br>
        <textarea name="comment" rows="5" cols="40" id="comment"><?php echo $comment ?></textarea>
        <br>
        <span class="error"> <?php if ($nameErr != "") echo "&lowast; ";
                                echo "$commentErr" ?></span>
        <br><br>
        <!-- radio button field below -->
        <label for="gender">Gender:</label>
        <input type="radio" name="gender" value="female" id="gender"
            <?php if (isset($gender) && $gender == "female") echo "checked"; ?>>Female
        <input type="radio" name="gender" value="male" id="gender"
            <?php if (isset($gender) && $gender == "male") echo "checked"; ?>>Male
        <input type="radio" name="gender" value="other" id="gender"
            <?php if (isset($gender) && $gender == "other") echo "checked"; ?>>Other
        <span class="error"><?php if ($nameErr != "") echo "&lowast; ";
                            echo $genderErr; ?></span>
        <br><br>
        <!-- checkbox below -->
        <label for="offer"> I'm Interested In: </label>
        <span class="error"><?php if ($nameErr != "") echo "&lowast; ";
                            echo $offerErr ?></span>
        <br>
        <input type="checkbox" name="offer" id="offer" value="newsletter1"
            <?php if ($offer != NULL && $offer == "newsletter1") echo "checked"; ?>>Suscbribe To Newsletter 1
        <br>
        <input type="checkbox" name="offer" id="offer" value="newsletter2"
            <?php if ($offer != NULL && $offer == "newsletter2") echo "checked"; ?>>Suscbribe To Newsletter 2
        <br>
        <input type="checkbox" name="offer" id="offer" value="both"
            <?php if ($offer != NULL && $offer == "both") echo "checked"; ?>>Both
        <br><br>
        <input type="submit" name="submit" value="Submit">

    </form>
    <?php
    echo "<h2>Your Input:</h2>";
    echo "<br>";
    //name input result
    if ($name != NULL) echo "<h3>Your Name: </h3>";
    echo $name;
    echo "<br>";
    //email input result
    if ($email != NULL) echo "<h3>Your Email: </h3>";
    echo $email;
    echo "<br>";
    //website input result
    if ($website != NULL) echo "<h3>Your Website: </h3>";
    echo $website;
    echo "<br>";

    if ($password != NULL) echo "<h3>Your Password: </h3>";
    echo $password;
    echo "<br>";

    if ($occupation != NULL) echo "<h3>Your Occupation: </h3>";
    echo $occupation;
    echo "<br>";

    if ($comment != NULL) echo "<h3>Your Comment: </h3>";
    echo $comment;
    echo "<br>";

    if ($gender != NULL) echo "<h3>Your Gender: </h3>";
    echo $gender;
    echo "<br>";

    if ($offer != NULL) echo "<h3>Your Selected Offer: </h3>";
    echo $offer;

    ?>
</body>

</html>