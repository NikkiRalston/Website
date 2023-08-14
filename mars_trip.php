<!DOCTYPE html>
<html>
<head>
    <title>Mars Trip</title>
    <style>
        .navigation {
            background-color: #333;
            color: white;
            padding: 10px 0;
        }
        .navigation ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .navigation li {
            display: inline-block;
            margin-right: 20px;
        }
        .navigation a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
        .content {
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="navigation">
        <ul>
            <li><a href="Mars.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="tours.php">Tours</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="Mars_trip.php">Trip Countdown</a></li>
        </ul>
    </div>
    
    <div class="content">
        <h1>Mars Trip Information</h1>
        <div id="clock"></div>
        <div id="message"></div>
    </div>

    <script>
        function updateClock() {
            var now = new Date();
            var tripDate = new Date('2023-09-01'); // Setting trip date here
            var timeLeft = tripDate - now;
            
            if (timeLeft <= 0) {
                document.getElementById('clock').innerHTML = 'The trip has already left.';
                document.getElementById('message').innerHTML = '';
            } else {
                var days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
                
                if (days <= 7) {
                    document.getElementById('message').innerHTML = 'Pack your bags!';
                } else {
                    document.getElementById('message').innerHTML = 'Planning in progress...';
                }
                
                document.getElementById('clock').innerHTML = days + ' days left until the trip.';
            }
        }

        // Update the clock every minute
        setInterval(updateClock, 60000);

        // Initial clock update
        updateClock();
    </script>
</body>
</html>
