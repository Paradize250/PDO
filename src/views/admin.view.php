<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($model['articles'] as $article): ?>
                <tr>
                    <td><?= $article['id'] ?></td>
                    <td><a href="/article?id=<?= $article['id'] ?>"><?= $article['titre'] ?></a></td>
                    <td>
                        <a href="/article-delete?id=<?= $article['id']?>" onclick="return confirm('Are you sure to delete this article!?');">Delete</a> | <a href="/article-update?id=<?= $article['id']?>" onclick="return confirm('Are you sure to modify this article!?');">Update</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <p><a href="/article-new">Add a new recipe</a></p>
</body>

</html>