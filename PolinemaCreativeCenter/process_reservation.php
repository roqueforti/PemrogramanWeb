<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reservation Confirmation</title>
<style>
    body {
        font-family: 'Quicksand', sans-serif;
        padding: 20px;
        color: #0554F2;
        background-color: white;
        margin-top: 20px;
        margin-left: 125px;
        margin-right: 125px;
    }

    .confirmation-box {
        border-radius: 25px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        background-color: #0554F2;
        padding: 20px;
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: white;
    }

    p {
        margin-bottom: 10px;
        color: white;
    }
</style>
</head>
<body>
<div class="confirmation-box">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h2>Reservation Confirmation</h2>";
        echo "<p>Name: " . $_POST["name"] . "</p>";
        echo "<p>Email: " . $_POST["email"] . "</p>";
        echo "<p>Building/Room: " . $_POST["building"] . "</p>";
        echo "<p>Date: " . $_POST["date"] . "</p>";
        echo "<p>Time Slot: " . $_POST["time"] . "</p>";
        echo "<p>Your reservation has been confirmed. Thank you!</p>";
    } else {
        echo "<h2>Error</h2>";
        echo "<p>Sorry, there was an error processing your request.</p>";
    }
    ?>
</div>
</body>
</html>
