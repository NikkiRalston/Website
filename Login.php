<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mars Tourism Login</title>
    <style>
        /*  the style of the page*/
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        input, button {
            margin-bottom: 10px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <!-- Login form container -->
    <div class="login-container">
        <h1>Mars Tourism Login</h1>
        <form id="login-form" action="" method="post">
            <label for="userid">User ID:</label>
            <input type="text" id="userid" name="userid">
            <br>
              <!-- Label and input field for password -->
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <br>
            <button type="submit">Login</button>
        </form>
    </div>
    <script>
          //JavaScript script to handle form submission and validation
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('login-form');

            form.addEventListener('submit', function(event) {
                const userid = document.getElementById('userid').value;
                const password = document.getElementById('password').value;

                if (userid.trim() === '' || password.trim() === '') {
                    event.preventDefault();
                    alert('Please enter both user ID and password.');
                }
            });
        });
    </script>

    <?php
   // Handle form submission and validation using PHP
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $userid = $_POST['userid'];
        $password = $_POST['password'];

        // user validation logic here.
        if (!empty($userid) && !empty($password)) {
            echo "<p>Login successful! Welcome, $userid!</p>";
        } else {
            echo "<p>Login failed. Please enter both user ID and password.</p>";
        }
    }
    ?>
</body>
</html>
