<?php
/**
 * Source : Joko Purwanto
 */
class Categories_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function set_categories()
    {
        $this->db->set('categories_title', $this->input->post('categories_title', true));
        $this->db->set('categories_abbrev', strtoupper($this->input->post('categories_abbrev', true)));
    }

    public function add_categories()
    {
        $this->set_categories();
        $this->db->insert('tb_categories');
    }

    public function all_categories()
    {
        //$this->db->limit($num,$offset);
        $this->db->order_by('categories_abbrev','ASC');
        return $this->db->get('tb_categories');
    }

    public function delete_categories($abbrev)
    {
        $this->db->where('categories_abbrev', $abbrev);
        return $this->db->delete('tb_categories');
    }

    public function read($abbrev)
    {
        $this->db->where('categories_abbrev', $abbrev);
        return $this->db->get('tb_categories')->row();
    }

    public function readbykode($kd){
    	$this->db->where('categories_id',$kd);
    	return $this->db->get('tb_categories')->row();
    }

    public function update($abbrev)
    {
        $this->set_categories();
        $this->db->where('categories_abbrev', $abbrev);
        $this->db->update('tb_categories');
    }

}
