<?php 

/**
* Source : Joko Purwanto
*/
class Contact_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function read(){
		$contact_id=1;
		$this->db->where('tb_contact_id',$contact_id);
		return $this->db->get('tb_contact')->row();
	}

	function set_contact(){
		$this->db->set('tb_contact_website_title',$this->input->post('website_title',TRUE));
		$this->db->set('tb_contact_website_slogan',$this->input->post('website_slogan',TRUE));
		$this->db->set('tb_contact_address',$this->input->post('contact_address',TRUE));
		$this->db->set('tb_contact_telephone',$this->input->post('contact_telephone',TRUE));
		$this->db->set('tb_contact_mail',$this->input->post('contact_mail',TRUE));
		$this->db->set('tb_contact_facebook',$this->input->post('contact_facebook',TRUE));
		$this->db->set('tb_contact_instagram',$this->input->post('contact_instagram',TRUE));
	}
	function save(){
		$contact_id=1;
		$this->set_contact();
		$this->db->where('tb_contact_id',$contact_id);
		return $this->db->update('tb_contact');
	}
}


?>