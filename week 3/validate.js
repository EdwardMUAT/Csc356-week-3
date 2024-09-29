function validateForm() {
    let fullName = document.getElementById("fullName").value;
    let age = document.getElementById("age").value;
    let flightHours = document.getElementById("flightHours").value;
    let training = document.getElementById("training").value;
    let reason = document.getElementById("reason").value;

    if (fullName == "") {
        alert("Full Name must be filled out");
        return false;
    }

    if (age < 25 || age > 60) {
        alert("Age must be between 25 and 60");
        return false;
    }

    if (flightHours < 0 || flightHours == "") {
        alert("Flight hours must be a positive number");
        return false;
    }

    if (training == "") {
        alert("Please select if you have completed spaceflight training");
        return false;
    }

    if (reason == "") {
        alert("Please provide a reason for joining");
        return false;
    }

    return true; // Proceed to the next page if all validations are correct
}
