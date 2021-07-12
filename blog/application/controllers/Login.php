<?php


class Login extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Login';
        $this->load->view('templates/header', $data);
        $this->load->view('login/index');
        $this->load->view('templates/footer');
    }

    public function tambahdata()
    {
        $data['title'] = 'tambah data';
        $this->load->view('templates/header', $data);
        $this->load->view('login/tambahdata');
        $this->load->view('templates/footer');
    }
}
