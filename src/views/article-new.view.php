<h2>
    <?= $model['heading'] ?>
</h2>
<section>
    <form method="POST">


        <label for="titre">Titre</label> <br>

        <input type="text" name="titre" id="titre" <?php if (isset($model['titre'])):
            $model['titre'];
        endif;
        ?>><br>

        <label for="content">Recipe :</label><br>

        <textarea name="content" id="content" cols="30" rows="10">

        <?php if (isset($model['content'])):
            $model['content'];
        endif;
        ?>
        </textarea><br>

        <input type="submit" value="Add">


    </form>


    <p>
        <?php
        if (isset($model['errors']) && !empty($model['errors'])):
            foreach ($model['errors'] as $error):
                ?>
            <p class="error">
                <?= $error ?>
            </p>
            <?php
            endforeach;
        endif;
        ?>
    </p>

</section>