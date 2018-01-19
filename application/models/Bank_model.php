<?php

/**
 * Source By : Joko Purwanto
 */
class Bank_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function set()
    {
        $this->db->set('bank_title', $this->input->post('bank_title', true));
        $this->db->set('bank_atas_nama', $this->input->post('bank_atas_nama', true));
        $this->db->set('bank_rekening', $this->input->post('bank_rekening', true));
    }

    public function add($logo)
    {
        $this->set();
        $this->db->set('bank_logo', $this->config->item('upload_path_bank') . $logo);
        return $this->db->insert('tb_bank');
    }

    public function all_bank()
    {
        $this->db->order_by('bank_title', 'ASC');
        return $this->db->get('tb_bank');
    }

    public function delete($bank_id)
    {
        $this->db->where('bank_id', $bank_id);

        $gtdata = $this->db->get('tb_bank')->row();

        unlink(".$gtdata->bank_logo");
        return $this->db->delete('tb_bank', array('bank_id' => $bank_id));
    }

    public function read($bank_id)
    {
        $this->db->where('bank_id', $bank_id);
        return $this->db->get('tb_bank')->row();
    }

    public function update($bank_id)
    {
        $this->set();
        $this->db->where('bank_id', $bank_id);
        $this->db->update('tb_bank');
    }

    public function update_logo($bank_id, $logo)
    {
        $this->db->set('bank_logo', $this->config->item('upload_path_bank') . $logo);
        $this->db->where('bank_id', $bank_id);
        $this->db->update('tb_bank');
    }

    public function unlink_bank_logo($bank_id)
    {
        $this->db->where('bank_id', $bank_id);
        $gtdata = $this->db->get('tb_bank')->row();

        unlink(".$gtdata->bank_logo");
    }

}
