<?php require 'View/includes/header.php'?>

<?php // Use any data loaded in the controller here ?>

    <section>
        <h1>Articles </h1>
        <ul>

            <?php foreach ($articles as $article) : ?>
                <li><a href="index.php?page=articles-show&id=<?=$article->id ?>"><?= $article->title ?> (<?= $article->formatPublishDate()  ?>)</li>
<!--                --><?php //setcookie("article-id",  $article->id); ?>
            <?php endforeach; ?>
        </ul>
    </section>

<?php require 'View/includes/footer.php'?>