<?php
$name = $_POST['name'];
$email = $_POST['email'];
$package_name = $_POST['package_name'];
$package_price = $_POST['package_price'];
$people_count = $_POST['people_count'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
</head>
<body>
<div class="container">
        <h1>Booking Confirmation</h1>
        <p>Thank you, <span class="highlight"><?= htmlspecialchars($name) ?></span>, for booking the <strong><?= htmlspecialchars($package_name) ?></strong> travel package.</p>
        <p>The booking details will be sent to your email: <strong><?= htmlspecialchars($email) ?></strong>.</p>
    </div>

    <div class="confirmation-info">
            <p>Total amount to be paid:</p>
            <p class="price">Rp<?= number_format($package_price * $people_count) ?></p>
        </div>

        <footer>
            <p>If you have any questions, please contact <a href="mailto:support@wisata.com">support@wisata.com</a></p>
        </footer>
</body>
</html>