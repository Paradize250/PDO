
<?php dbug($model)?>
<h3>
    <?= $model['article']['titre'] ?>
</h3>
<p>
    <?= $model['article']['content'] ?>
</p>
<p>created at :
    <?= $model['article']['created_at'] ?>
</p>
<p><a href="/article-delete?id=<?=$model['article']['id']?>" onclick="return confirm('Are you sure to delete this article!?');">Delete this article</a></p>
<p><a href="/article-update?id=<?=$model['article']['id']?>">update this article</a></p>
<p><a href="/articles">Back to the list of articles</a></p>