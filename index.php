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
    <link rel="stylesheet" href="css/styles.css">
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
<style>
    body {
    font-family: 'Noto Sans', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-color: #f5f5f5;
    color: #333;
}
.hero {
    height: 100vh;
    background: url('https://i.redd.it/d94nia7ieow41.jpg') no-repeat center center/cover;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    position: relative;
}

.hero:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
}

.hero-content {
    position: relative;
    z-index: 2;
}

.hero-content h1 {
    font-size: 4rem;
    color: #ffd700;
    font-family: 'Cinzel', serif;
    margin-bottom: 1rem;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
}

.hero-content p {
    font-size: 1.5rem;
    color: #fff;
    margin-bottom: 2rem;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
}

.cta-btn {
    background-color: #d32f2f;
    border: none;
    padding: 1rem 2rem;
    color: white;
    font-size: 1.2rem;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.cta-btn:hover {
    background-color: #b71c1c;
}

.popular-destinations {
    padding: 2rem;
    text-align: center;
    background-color: #fff;
}

.popular-destinations h2 {
    font-size: 2.5rem;
    color: #d32f2f;
    margin-bottom: 1.5rem;
    font-family: 'Cinzel', serif;
    border-bottom: 3px solid #ffd700;
    display: inline-block;
    padding-bottom: 0.5rem;
}

.destination-list {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

.destination-item {
    background-color: #ffe0b2;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 30%;
    margin-bottom: 2rem;
    transition: transform 0.3s ease;
}

.destination-item:hover {
    transform: translateY(-10px);
}

.destination-item img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.destination-item h3 {
    font-size: 1.5rem;
    margin: 1rem 0;
    color: #d32f2f;
    font-family: 'Cinzel', serif;
}

.destination-item p {
    padding: 0 1rem;
    margin-bottom: 1rem;
    color: #333;
}
.cta-section {
    text-align: center;
    padding: 2rem;
    background-color: #d32f2f;
    color: white;
    font-family: 'Noto Sans', sans-serif;
}

.cta-section h2 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    color: #ffd700;
    font-family: 'Cinzel', serif;
}

.cta-section p {
    font-size: 1.2rem;
    margin-bottom: 2rem;
}

.cta-link {
    background-color: #ffd700;
    color: #d32f2f;
    padding: 1rem 2rem;
    font-size: 1.2rem;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.cta-link:hover {
    background-color: #fff9c4;
}

@media (max-width: 768px) {
    .destination-list {
        flex-direction: column;
        align-items: center;
    }

    .destination-item {
        width: 80%;
    }

    .hero-content h1 {
        font-size: 3rem;
    }

    .hero-content p {
        font-size: 1.2rem;
    }

    .cta-btn {
        font-size: 1rem;
    }
}
</style>