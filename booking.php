<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Book Your Session</title>
    <link rel="stylesheet" href="booking.css" />
</head>
<body>
    <div class="booking-container">
        <h1>Book Your Gym Session</h1>
        <form action="process.php" method="POST">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required />

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required />

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required />

            <label for="date">Preferred Date:</label>
            <input type="date" id="date" name="date" required />

            <label for="time">Preferred Time:</label>
            <input type="time" id="time" name="time" required />

            <label for="session">Session Type:</label>
            <select id="session" name="session" required>
                <option value="">Select a session</option>
                <option value="personal_training">Personal Training</option>
                <option value="group_class">Group Class</option>
                <option value="nutrition_consultation">Nutrition Consultation</option>
            </select>

            <button <a href= "index.php"></a> type="submit">Book Now 
            </button>
        </form>
    </div>
</body>
</html>
