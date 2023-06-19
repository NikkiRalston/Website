<!DOCTYPE html>
<html>
<head>
    <title>Mars Tours - Pilot Application</title>
    <link rel="stylesheet" type="text/css" href="Mars.css">
    <script src="Mars.js"></script>
</head>
<body>
    <header>
        <h1>Welcome to Mars Tours</h1>
    </header>
    <nav>
        <ul>
            <li><a href="Mars.php.">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="tours.php">Tours</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
    <main>
        <section>
            <h2>Pilot Application Form</h2>
            <form id="pilotForm" action="Process-application.php" method="POST" onsubmit="return validateForm()">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required><br><br>

                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required><br><br>

                <label for="experience">Flight Experience (in hours):</label>
                <input type="number" id="experience" name="experience" required><br><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>

                <label for="reason">Reason for Wanting to be a Mars Pilot:</label>
                <textarea id="reason" name="reason" required></textarea><br><br>

                <input type="submit" value="Submit Application">
            </form>
        </section>
    </main>
</body>
</html>

