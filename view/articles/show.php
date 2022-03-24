<?php require 'View/includes/header.php'?>

<?php

//    $thePreviousIndex = $articles[$_GET['id']-1];
//var_dump($articles[$_GET['id']-1]);
if (isset($articles[$_GET['id']-1])){
    $thePreviousIndex = $articles[$_GET['id']-1];
}
else
    $thePreviousIndex =$articles[2];

if (isset($articles[$_GET['id']+1])){    $theNextIndex = $articles[$_GET['id']+1];}
else {
    $theNextIndex=$articles[0];
}
//    var_dump($theNextIndex);
//    if ($theNextIndex=== )
?>

    <section>
        <h1><?= $articles[$_GET['id']]->title;?></h1>
        <p><?= $articles[$_GET['id']]->formatPublishDate() ?></p>
        <p><?= $articles[$_GET['id']]->description ?></p>



<!--        --><?php ////TODO: NEED THE CNODITIONS IF UNDER 0
//
//        if ($theNextIndex === null){
//            var_dump($theNextIndex);
//            $theNextIndex=$articles[0];
//        }
//
//
//         ?>
        <a href="index.php?page=articles-show&id=<?php echo$thePreviousIndex->id ?>">Previous article</a>
        <a href="index.php?page=articles-show&id=<?php echo $theNextIndex->id ?>">Next article</a>

    </section>

<?php require 'View/includes/footer.php'?>