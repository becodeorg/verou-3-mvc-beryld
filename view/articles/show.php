<?php require 'View/includes/header.php'?>

<?php ;// Use any data loaded in the controller here ?>

    <section>

        <h1><?= $articles[$_GET['id']-1]->title;?></h1>
        <p><?= $articles[$_GET['id']-1]->formatPublishDate() ?></p>
        <p><?= $articles[$_GET['id']-1]->description ?></p>


        <?php // TODO: links to next and previous
        echo($articles[$_GET['id']-1]->id); ?>
        <?php //TODO: NEED THE CNODITIONS IF UNDER 0
        // ?>
        <a href="index.php?page=articles-show&id=<?php echo($articles[$_GET['id']-2]->id) ?>">Previous article</a>
        <a href="index.php?page=articles-show&id=<?php echo($articles[$_GET['id']+1]->id) ?>">Next article</a>
    </section>

<?php require 'View/includes/footer.php'?>