<!-- Header -->


<!DOCTYPE html>

<?php require __DIR__ . '/head.php';
?>

<body>
    <header>
        <img class="picture" src="https://assets.goal.com/images/v3/getty-2201476691/crop/MM5DKMBQGQ5DEOBRGU5G433XMU5DAORVGIYQ====/GettyImages-2201476691.jpg?auto=webp&format=pjpg&width=2048&quality=60" alt="Fotball">
    </header>
    <nav class="links">
        <a href="index.php">Start</a>
        <a href="information.php">Information</a>
        <a href="about.php">About</a>
    </nav>
    <h1>Explore Football Teams</h1>
    <?php require __DIR__ . '/data.php' ?>

    <ul>
        <main class="teams">
            <?php foreach ($teams as $team) : ?>
                <div class="team-box">
                    <img src="<?php echo $team['logo']; ?>" alt="<?php echo $team['league']; ?>" class="logo">
                    <a class="linklogo" href="information.php?team=<?php echo urlencode($team['league']); ?>">
                        <h2><?php echo $team['league']; ?></h2>
                    </a>
                    <!-- <p><?php echo $team['city']; ?></p> -->

                </div>
            <?php endforeach; ?>
        </main>
    </ul>

    <!-- Footer -->

    <?php require __DIR__ . '/footer.php'; ?>

    </html>