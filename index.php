<?php
$destinations = [
    [
        "name" => "The Great Wall of China",
        "description" => "An iconic symbol of China's ancient history and culture.",
        "image" => "https://images.unsplash.com/photo-1608037521277-154cd1b89191?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDN8fHxlbnwwfHx8fHw%3D"
    ],
    [
        "name" => "The Forbidden City",
        "description" => "The majestic palace complex located in the heart of Beijing.",
        "image" => "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgoslGP37iRTUu6ceNvB3xCRnnbDiCCjmw2z2zgcOsq0WmSDmK9FdWjd8y1WUR7k9xhN98rb1hZZlkHDN7z5ELsh2xGFA94SreWSTe_jkGgaHhuv6cMwoDFGhpTTwl0ZGdD4DjNileuCLMq/s1600/IMG_0199.JPG"
    ],
    [
        "name" => "Terracotta Army",
        "description" => "A collection of terracotta sculptures depicting the armies of the first Emperor of China.",
        "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtLz80JbOEeWj-sNRTqBSz30HRaaYOuZhkKg&s"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WanderLao - Discover China's Wonders</title>
</head>
<body>
<header class="hero">
        <div class="hero-content">
            <h1>Welcome to WanderLao</h1>
            <p>Discover the Wonders of China</p>
            <button class="cta-btn" onclick="scrollToDestinations()">Explore Packages</button>
        </div>
    </header>
    <section class="popular-destinations" id="destinations">
        <h2>Popular Destinations</h2>
        <div class="destination-list">
            <?php foreach ($destinations as $destination): ?>
                <div class="destination-item">
                <img src="<?php echo $destination['image']; ?>" alt="<?php echo $destination['name']; ?>">
                <h3><?php echo $destination['name']; ?></h3>
                    <p><?php echo $destination['description']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="cta-section">
        <h2>Start Your Journey with WanderLao</h2>
        <p>Explore our exclusive travel packages to experience the best of China.</p>
        <a href="homepage.php" class="cta-link">View Travel Packages</a>
    </section>

    <script>
        function scrollToDestinations() {
            document.getElementById('destinations').scrollIntoView({ behavior: 'smooth' });
        }
    </script>
</body>
</html>