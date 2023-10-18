<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <h3><?= $article['titre'] ?></h3>
        <p><?= $article['content'] ?></p>
        <p>created at : <?= $article['created_at'] ?></p>
        <p><a href="/articles">Back to the list of articles</a></p>
    </main>
</body>
</html>