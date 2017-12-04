<?php
/**
 * Source : Joko Purwanto
 */
class User_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function check_password()
    {
        $this->db->where('user_username', $this->session->userdata('username'));
        $this->db->where('user_password', md5($this->input->post('old_password', true)));
        $result = $this->db->get('tb_user')->num_rows();

        if ($result == 1) {
            return true;
        } else {
            return false;
        }

    }

    function change_password(){
    	$this->db->set('user_password',md5($this->input->post('new_password',TRUE)));
    	$this->db->where('user_username',$this->session->userdata('username'));
    	$this->db->update('tb_user');
    }

    function read(){
        $this->db->where('user_username',$this->session->userdata('username'));
         return $this->db->get('tb_user')->row();
    }

    function update_avatar($image_path){
        $this->db->set('user_avatar',$this->config->item('upload_path_avatar').$image_path);
        $this->db->where('user_mail',$this->session->userdata('mail'));
        return $this->db->update('tb_user');
    }

    function unlink_avatar(){
        $this->db->where('user_mail',$this->session->userdata('mail'));
        $gtdata=$this->db->get('tb_user')->row();

        unlink(".$gtdata->user_avatar");
    }
}
