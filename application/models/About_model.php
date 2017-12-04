<?php

/**
 * Source : Joko Purwanto
 */
class About_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function set_about()
    {
        $this->db->set('about_title', $this->input->post('about_title', true));
        $this->db->set('about_description', $this->input->post('about_description', true));
    }

    public function add()
    {
        $this->set_about();
        return $this->db->insert('tb_about');
    }

    public function update($about_id)
    {
        $this->set_about();
        $this->db->where('about_id', $about_id);
        $this->db->update('tb_about');
    }

    public function delete($about_id)
    {
        $this->db->where('about_id', $about_id);
        return $this->db->delete('tb_about');
    }

    public function read($about_id)
    {
        $this->db->where('about_id', $about_id);
        return $this->db->get('tb_about')->row();
    }

    public function get_about()
    {
        return $this->db->get('tb_about');
    }
}
