<?php


declare(strict_types=1);

class Article
{
    public int $id;
    public string $title;
    public ?string $description;
    public ?string $publishDate;

    public function __construct(int $id, string $title, ?string $description, ?string $publishDate)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->publishDate = $publishDate;
    }

    public function formatPublishDate($format = 'DD-MM-YYYY')
    {
        $date = $this->publishDate;
        $newDate = date("d-m-Y", strtotime($date));
        return "$newDate";
//        return $date;
        // TODO: return the date in the required format
        // transform from us to correct one -
    }
}