
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <ul>
        <?php foreach ($model['articles'] as $article): ?>
            <li>
                <?php echo $article['id'] ?>
                <a href="/article?id=<?= $article['id'] ?>">
                    <?= $article['titre'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<p><a href="/article-new">add a new recipe</a></p>
</body>

</html>