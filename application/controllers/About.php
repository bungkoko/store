<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Source : Joko Purwanto
 */
class About extends CI_Controller
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

        $data['title']     = "About";
        $data['warning']   = '';
        $data['get_about'] = $this->About_model->get_about();
        $data['content']   = 'about/about_list';

        $this->load->view('administrator/index', $data);
    }

    public function add()
    {
        $data['title']   = "Tambah Halaman About";
        $data['warning'] = '';
        if ($this->input->post('submit', true)):
            $this->form_validation->set_rules('about_title', 'About', 'required');
            $this->form_validation->set_rules('about_description', 'Deskripsi', 'required');

            if ($this->form_validation->run() == true):
                $this->About_model->add();
                $this->session->set_flashdata('message', 'berhasil ditambahkan');
                redirect('about');
            else:
                $data['warning'] = validation_errors();
            endif;

        endif;

        $data['content'] = 'about/about_main';
        $this->load->view('administrator/index', $data);

    }

    public function delete($about_id)
    {
        $this->About_model->delete($about_id);
        $this->session->set_flashdata('message', 'berhasil dihapus');
        redirect('about');
    }

    public function update($about_id)
    {
        $data['warning'] = '';
        $data['title']   = 'Update Halaman Tentang';
        $data['content'] = 'about/about_update';
        $data['read']    = $this->About_model->read($about_id);
        if ($this->input->post('submit', true)):
            $this->form_validation->set_rules('about_title', "Judul Halaman Tentang", 'required');
            $this->form_validation->set_rules('about_description', 'Deskripsi', 'required');
            if ($this->form_validation->run() == true):
                $this->About_model->update($about_id);
                $this->session->set_flashdata('message', 'Kategori berhasil diubah');
                redirect('about');
            else:
                $data['warning'] = validation_errors();
            endif;
        endif;
        $this->load->view('administrator/index', $data);
    }

}
