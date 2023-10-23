<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipes</title>
    <style>
#top {
    display: flex;
    justify-content: space-between;
    align-items: center;
}


    </style>
</head>

<body>
    <header>
        <div id="top">
            <h1>Recipes</h1>
            <?php include 'partials/nav.php' ?>
        </div>
    </header>

    <main>
        <?php include("$name.view.php"); ?>
    </main>

    <footer>
        <h3>2023</h3>
    </footer>
</body>

</html>