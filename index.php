<?php


declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
var_dump($_GET);
//include all your model files here

require 'databaseManager.php';
require 'Model/Article.php';
require 'Controller/HomepageController.php';
require 'Controller/ArticleController.php';




// Get the current page to load
// If nothing is specified, it will remain empty (home should be loaded)
$page = $_GET['page'] ?? null;

// Load the controller
// It will *control* the rest of the work to load the page
switch ($page) {
    case 'articles-index':
        var_dump('hey what');
        // This is shorthand for:
        // $articleController = new ArticleController;
        // $articleController->index();
        (new ArticleController())->index();

        break;
    case 'articles-show':
        (new ArticleController())->show();
        var_dump('hey what2');
        // TODO: detail page
    break;
    case 'home':
    default:
        (new HomepageController())->index();
    var_dump('hey what');
        break;
}