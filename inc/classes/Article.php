<?php

class article
{
    public $title;
    public $resume;
    public $content;
    public $date;
    public $author_id;
    public $category_id;

    public function __construct($title = '', $resume = '', $content = '', $author_id = '', $date = '', $category_id = '')
    {
        $this->title = $title;
        $this->resume = $resume;
        $this->content = $content;
        $this->author_id = $author_id;
        $this->date = $date;
        $this->category_id = $category_id;
    }

    public function getDateFr()
    {
        return date('d/m/Y', strtotime($this->date));
    }
}