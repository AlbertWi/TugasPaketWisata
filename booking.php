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
</body>
</html>