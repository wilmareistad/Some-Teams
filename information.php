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
        <a href="about.php">About</a>
        <a href="information.php">Information</a>
    </nav>
    <h1>Explore Football Teams</h1>
    <?php require __DIR__ . '/data.php' ?>

    <ul>
        <main class="teams-information">
            <?php foreach ($teams as $team) : ?>
                <div class="team-box-information">
                    <div class="info-information">
                        <img src="<?php echo $team['logo']; ?>" alt="<?php echo $team['league']; ?>" class="logo-information">
                        <h2> <?php echo $team['city']; ?> </h2>
                        <h2><?php echo "Ranking:" . $team['uefa-coefficient-ranking'] ?></h2>
                        <h2>Opponents:</h2>
                        <ul>
                            <?php foreach ($team['opponents'] as $opponent) : ?>
                                <li><?php echo $opponent; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <a class="linklogo" href="<?php echo $team['url'] ?>" target="_blank">
                        <h2><?php echo $team['league']; ?></h2>
                    </a>


                </div>
            <?php endforeach; ?>
        </main>
    </ul>

    <!-- Footer -->

    <?php require __DIR__ . '/footer.php'; ?>

    </html>