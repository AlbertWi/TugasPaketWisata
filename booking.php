<?php
$name = $_POST['name'];
$email = $_POST['email'];
$package_name = $_POST['package_name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Travel Package Booking</title>
</head>
<body>
<div class="container">
        <div class="booking-form">
            <h1>Book Package: <?= $package_name ?></h1>
            <p class="package-detail">You are about to book the <strong><?= $package_name ?></strong> travel package for <strong>Rp<?= number_format($package_price) ?></strong> during the <strong><?= $season ?></strong> season.</p>
            
        </div>
    </div>
</body>
</html>
