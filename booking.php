<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Package Booking</title>
</head>
<body>
<div class="container">
        <div class="booking-form">
            <h1>Book Package: <?= $package_name ?></h1>
            <p class="package-detail">You are about to book the <strong><?= $package_name ?></strong> travel package for <strong>Rp<?= number_format($package_price) ?></strong> during the <strong><?= $season ?></strong> season.</p>
            <form action="confirm.php" method="POST">
                <input type="hidden" name="package_name" value="<?= $package_name ?>">
                <input type="hidden" name="package_price" value="<?= $package_price ?>">

                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>

                <label for="date">Departure Date:</label>
                <input type="date" id="date" name="date" required>
                <label for="people_count">Number of People:</label>
                <input type="number" id="people_count" name="people_count" min="1" required>

                <label for="notes">Additional Notes:</label>
                <textarea id="notes" name="notes" placeholder="Write any special requests if needed"></textarea>

                <button type="submit" class="btn">Confirm Booking</button>
                </form>
</body>
</html>