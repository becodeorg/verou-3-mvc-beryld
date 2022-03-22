<?php


declare(strict_types=1);

class ArticleController
{
    private DatabaseManager $databaseManager;
//
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function index()
    {
        // Load all required data
        $articles = $this->getArticles(); // HEY I NEED IT HERE

        // Load the view
        require 'View/articles/index.php';
    }



    // Note: this function can also be used in a repository - the choice is yours
    private function getArticles()
    {


        require_once 'config.php';
        require 'databaseManager.php';

        $databaseManager = new DatabaseManager('localhost', 'root', '', 'times_paper');
//        $databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password'], $config['dbname']);
        $databaseManager->connect();
        $sth = $this->databaseManager->prepare( 'SELECT * FROM articles ');

        $sth->execute();

//        $stm = $this->databaseManager->prepare($sqlSelect);

//
//
//
//
//        // TODO: prepare the database connection
//        // Note: you might want to use a re-usable databaseManager class - the choice is yours
//        // TODO: fetch all articles as $rawArticles (as a simple array)
//
//
//        $rawArticles = [$sth->fetchALL()];



//        $articles = [];
//        foreach ($rawArticles as $rawArticle) {
//            // We are converting an article from a "dumb" array to a much more flexible class
//            $articles[] = new Article($rawArticle['title'], $rawArticle['description'], $rawArticle['publish_date']);
//        }

//        return $articles;
    }

    public function show($articles)
    {
        var_dump($articles);

        // TODO: this can be used for a detail page
    }
}