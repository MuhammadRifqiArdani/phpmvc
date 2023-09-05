<?php
class Blog_model
{
    private $blog = [
        [
            "penulis" => "Guru RPL",
            "judul" => "Belajar PHP MVC",
            "tulisan" => "models"
        ],
        [
            "penulis" => "Guru RPL",
            "judul" => "Belajar PHP MVC",
            "tulisan" => "view"
        ],
        [
            "penulis" => "Guru RPL",
            "judul" => "Belajar PHP MVC",
            "tulisan" => "conto"
        ],
    ];
    public function getAllBlog()
    {
        return $this->blog;
    }
}