<?php
class Guru extends Controller
{
    public function index()
    {
        $data['judul'] = "Guru";
        $data['guru'] = $this->model("Data_guru")->getAllBlog();
        $this->view('templates/header', $data);
        $this->view('guru/index', $data);
        $this->view('templates/footer');
    }
}