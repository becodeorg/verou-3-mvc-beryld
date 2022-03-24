<?php


declare(strict_types=1);

class ArticleController
{
    public DatabaseManager $databaseManager;

    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function index()
    {
        // Load all required data
        $articles = $this->getArticles();

        // Load the view
        require 'View/articles/index.php';
    }

    // Note: this function can also be used in a repository - the choice is yours
    private function getArticles()
    {

        // TODO: prepare the database connection

        // Note: you might want to use a re-usable databaseManager class - the choice is yours
        // TODO: fetch all articles as $rawArticles (as a simple array)
        $rawArticles = [];
        $query = "SELECT * FROM articles";

        $rawArticles = $this->databaseManager->connection->query($query)->fetchAll();

        $articles = [];
        foreach ($rawArticles as $rawArticle) {
            // We are converting an article from a "dumb" array to a much more flexible class
            $articles[] = new Article($rawArticle['id']-1, $rawArticle['title'], $rawArticle['description'], $rawArticle['publish_date']);
            //this array has all in the form of models now
        }
//        var_dump($articles);
        return $articles;
    }

    public function show()
    {
        $articles = $this->getArticles();
//        var_dump($articles);
        require "view/articles/show.php";
        return $articles;
//        $query = "SELECT * FROM articles";
//        $rawArticles = $this->databaseManager->connection->query($query)->fetchAll();




//        return $rawArticles;



    }
}