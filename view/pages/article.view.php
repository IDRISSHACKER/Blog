<?php
global $article;
global $title;
$title = $article["titre"];
?>

<div class="article-area">
    <div class="row-a">
        <div class="card article-title mt3"><?= @$article["titre"] ?></div>
        <div class="article-display card">
            <div class="article-img">
                <img src="files/post/<?= @$article['apercu'] ?>" alt="<?= @$article['titre'] ?>" class="fw">
            </div>
            <div class="article-text">
                <p><?= @$article["contenu"] ?></p>
            </div>
        </div>
    </div>
</div>
