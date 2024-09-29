<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iss Pilot Application</title>
    <script src="validate.js"></script>
</head>
<body>
    <header>
        <h1>ISS Pilot Application</h1>
    </header>

    <main>
        <form name="appform" id="appForm" onsubmit="return validateForm();" action="pilotConfirmation.html" method="post">
            <!-- Full Name -->
            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="fullName">
            <br><br>

            <!-- Age -->
            <label for="age">Age (must be between 25 and 60):</label>
            <input type="number" id="age" name="age">
            <br><br>

            <!-- Flight Experience -->
            <label for="flightHours">Total Flight Hours (must be a positive number):</label>
            <input type="number" id="flightHours" name="flightHours" min="0">
            <br><br>

            <!-- Specialized Training -->
            <label for="training">Have you completed specialized spaceflight training?</label>
            <select id="training" name="training">
                <option value="">Select an option</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
            <br><br>

            <!-- Reason for Joining -->
            <label for="reason">Why do you want to become an ISS pilot?</label>
            <textarea id="reason" name="reason" rows="4" cols="50"></textarea>
            <br><br>

            <!-- Availability -->
            <label>Availability for Missions (Select all that apply):</label><br>
            <input type="checkbox" id="availability1" name="availability" value="Short-term Missions">
            <label for="availability1">Short-term Missions (3-6 months)</label><br>
            <input type="checkbox" id="availability2" name="availability" value="Long-term Missions">
            <label for="availability2">Long-term Missions (6-12 months)</label><br>
            <input type="checkbox" id="availability3" name="availability" value="On-call">
            <label for="availability3">On-call</label><br><br>

            <!-- Submit Button -->
            <input type="submit" value="Submit Application">
        </form>
    </main>
</body>
</html>
