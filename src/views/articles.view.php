<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php foreach ($articles as $article): ?>
            <li>
                <a href="../controllers/show.php?id=<?= $article['id'] ?>">
                    <?= $article['titre'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>