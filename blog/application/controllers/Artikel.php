<?php
class Artikel extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Artikel';
        $this->load->view('templates/header', $data);
        $this->load->view('artikel/index');
        $this->load->view('templates/footer');
    }
}
