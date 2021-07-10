<?php
class Artikel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Artikel_model');
    }

    public function index()
    {
        $data['title'] = 'Artikel';
        $data['blog'] = $this->Artikel_model->getAllArtikel();
        $this->load->view('templates/header', $data);
        $this->load->view('artikel/index', $data);
        $this->load->view('templates/footer');
    }
}
