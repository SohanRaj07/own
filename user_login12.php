<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="user_login.php" method="POST">
            <div class="form-group">
                <label for="email">Email:</label>
                <!-- Add a dropdown select for email -->
                <select id="email" name="email" required>
                    <option value="" disabled selected>Select an email</option>
                    <?php
                    // Database connection
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "employees";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Fetch emails from the database
                    $sql = "SELECT email FROM employee_info";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row["email"] . "'>" . $row["email"] . "</option>";
                        }
                    }

                    // Close connection
                    $conn->close();
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="button-group">
                <button type="submit" class="create-btn">Login</button>
                <button type="button" class="cancel-btn">Cancel</button>
            </div>
            <div class="loginbtn"><a href="userregister.html">New User? Sign up</a></div>
        </form>
    </div>
    <style>
        .loginbtn{
            padding-top: 15px;
        }
    </style>
</body>
<link rel="stylesheet" href="./styles/adduser.css">
</html>
