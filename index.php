<!-- Header -->
<?php
require __DIR__ . '/header.php';
?>

<!DOCTYPE html>

<body>
    <h1>Explore Football Teams</h1>
    <?php require __DIR__ . '/data.php' ?>

    <ul>
        <?php foreach ($teams as $team => $info); ?>
    </ul>

    <!-- Footer -->

    <?php require __DIR__ . '/footer.php'; ?>

    </html>