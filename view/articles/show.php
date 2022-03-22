<?php require 'View/includes/header.php'?>

<?php
    $thePreviousIndex = $articles[$_GET['id']-2];
    $theNextIndex = $articles[$_GET['id']];
?>

    <section>
        <h1><?= $articles[$_GET['id']-1]->title;?></h1>
        <p><?= $articles[$_GET['id']-1]->formatPublishDate() ?></p>
        <p><?= $articles[$_GET['id']-1]->description ?></p>


        <?php // TODO: links to next and previous
        echo($articles[$_GET['id']-1]->id); ?>
        <?php //TODO: NEED THE CNODITIONS IF UNDER 0

//        if ()

        // ?>
        <a href="index.php?page=articles-show&id=<?php echo$thePreviousIndex->id ?>">Previous article</a>
        <a href="index.php?page=articles-show&id=<?php echo $theNextIndex->id ?>">Next article</a>
    </section>

<?php require 'View/includes/footer.php'?>