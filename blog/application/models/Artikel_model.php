<?php

class Artikel_model extends CI_Model
{

    public function getAllArtikel()
    {
        return $this->db->get('blog')->result_array();
        // return $this->db->get('blog')->result_array();

    }
}
