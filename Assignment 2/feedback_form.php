<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
        }

        label, input, textarea {
            display: block;
            margin-bottom: 10px;
        }

        .rating {
            display: flex;
            flex-direction: row-reverse;
            justify-content: center;
            align-items: center;
        }

        .rating input {
            display: none;
        }

        .rating label {
            cursor: pointer;
            color: #ccc;
            font-size: 30px;
            transition: color 0.3s ease;
        }

        .rating label:before {
            content: '\2605';
        }

        .rating input:checked ~ label,
        .rating label:hover,
        .rating label:hover ~ label {
            color: #ff9800;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .success {
            color: #4CAF50;
            font-weight: bold;
        }

        .error {
            color: #f44336;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Feedback Form</h1>
        <?php
        // Database configuration
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "feedback";

        // Create database connection
        $conn = new mysqli($host, $username, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Define variables and set to empty values
        $name = $email = $message = $rating = "";
        $nameErr = $emailErr = $messageErr = $ratingErr = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Validate name
            if (empty($_POST["name"])) {
                $nameErr = "Name is required";
            } else {
                $name = test_input($_POST["name"]);
            }

            // Validate email
            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            } else {
                $email = test_input($_POST["email"]);
            }

            // Validate message
            if (empty($_POST["message"])) {
                $messageErr = "Message is required";
            } else {
                $message = test_input($_POST["message"]);
            }

            // Validate rating
            if (empty($_POST["rating"])) {
                $ratingErr = "Rating is required";
            } else {
                $rating = test_input($_POST["rating"]);
            }

            // If all fields are valid, insert the data into the database
            if (empty($nameErr) && empty($emailErr) && empty($messageErr) && empty($ratingErr)) {
                $sql = "INSERT INTO feedback (name, email, message, rating) VALUES ('$name', '$email', '$message', '$rating')";

                if ($conn->query($sql) === TRUE) {
                    echo '<p class="success">Thank you for your feedback!</p>';
                    $name = $email = $message = $rating = "";
                } else {
                    echo '<p class="error">Error: ' . $sql . '<br>' . $conn->error . '</p>';
                }
            }
        }

        // Close the database connection
        $conn->close();

        // Function to sanitize input values
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $name; ?>">
            <span class="error"><?php echo $nameErr; ?></span>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" value="<?php echo $email; ?>">
            <span class="error"><?php echo $emailErr; ?></span>

            <label for="message">Message:</label>
            <textarea id="message" name="message"><?php echo $message; ?></textarea>
            <span class="error"><?php echo $messageErr; ?></span>

            <label for="rating">Rating:</label>
            <div class="rating">
                <input type="radio" id="star5" name="rating" value="5" <?php if ($rating == "5") echo "checked"; ?>>
                <label for="star5"></label>
                <input type="radio" id="star4" name="rating" value="4" <?php if ($rating == "4") echo "checked"; ?>>
                <label for="star4"></label>
                <input type="radio" id="star3" name="rating" value="3" <?php if ($rating == "3") echo "checked"; ?>>
                <label for="star3"></label>
                <input type="radio" id="star2" name="rating" value="2" <?php if ($rating == "2") echo "checked"; ?>>
                <label for="star2"></label>
                <input type="radio" id="star1" name="rating" value="1" <?php if ($rating == "1") echo "checked"; ?>>
                <label for="star1"></label>
            </div>
            <span class="error"><?php echo $ratingErr; ?></span>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
