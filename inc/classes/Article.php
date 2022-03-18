<?php

class article
{
    public $title;
    public $content;
    public $date;
    public $author;
    public $category;

    public function __construct($title = '', $content = '', $author = '', $date = '', $category = '')
    {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
        $this->date = $date;
        $this->category = $category;
    }

    public function getDateFr()
    {
        return date('d/m/Y', strtotime($this->date));
    }
}