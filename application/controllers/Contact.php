<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Source : Joko Purwanto
 */
class Contact extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('logged') == false):
            redirect('administrator');
        endif;
    }

    public function index()
    {
        $data['warning'] = '';
        $data['title']   = 'Setting Kontak';
        $data['read']    = $this->Contact_model->read();
        if ($this->input->post('submit', true)):
            $this->Contact_model->save();
            $this->session->set_flashdata('message', 'berhasil disimpan');
            redirect('contact');
        endif;
        $data['content'] = 'contact/contact_main';
        $this->load->view('administrator/index', $data);
    }

}
