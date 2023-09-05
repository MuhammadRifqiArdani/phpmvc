<?php
class Data_guru
{
    private $guru = [
        [
            "penulis" => "fikrotu dwi",
            "judul" => "pemrograman web",
            "tulisan" => "models"
        ],
        [
            "penulis" => "ivan zuwanta",
            "judul" => "perangkat lunak",
            "tulisan" => "view"
        ],
        [
            "penulis" => "Labib fayumi",
            "judul" => "PKWU",
            "tulisan" => "controlllers"
        ],
    ];
    public function getAllBlog()
    {
        return $this->guru;
    }
}