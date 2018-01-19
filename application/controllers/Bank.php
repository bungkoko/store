<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Source by : Joko Purwanto
 */
class Bank extends CI_Controller
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
        if ($this->input->post('submit', true)):
            $this->form_validation->set_rules('bank_title', 'Nama Bank', 'required');
            $this->form_validation->set_rules('bank_rekening', 'Rekening Bank', 'required');
            $this->form_validation->set_rules('bank_atas_nama', 'Rekening Atas Nama', 'required');
            if ($this->form_validation->run() == true):
                $config['upload_path']   = '.' . $this->config->item('upload_path_bank');
                $config['allowed_types'] = $this->config->item('allowed_types');
                $config['encrypt_name']  = true;

                $this->load->library('image_lib');
                $this->load->library('upload');

                $this->upload->initialize($config);

                if (!$this->upload->do_upload('bank_logo')):
                    $data['warning'] = $this->upload->display_errors();
                else:
                    $dt_logo = $this->upload->data();

                    $logo_nm       = $dt_logo['raw_name'];
                    $logo_ext      = $dt_logo['file_ext'];
                    $logo_path     = $dt_logo['file_name'];
                    $logo_fullpath = $dt_logo['full_path'];

                    $config['image_library']  = $this->config->item('image_library');
                    $config['maintain_ratio'] = $this->config->item('maintain_ratio');
                    $config['width']          = '300';
                    $config['height']         = '240';

                    $config['source_image'] = $logo_fullpath;

                    $this->image_lib->initialize($config);
                    $this->image_lib->resize();
                    $this->image_lib->clear();

                    $this->Bank_model->add($logo_path);
                    $this->session->set_flashdata('message', 'Bank telah berhasil ditambahkan');
                    redirect('bank');
                endif;
            else:
                $data['warning'] = validation_errors();

            endif;
        endif;
        $data['get_list'] = $this->Bank_model->all_bank();

        $data['title']   = 'Bank';
        $data['content'] = 'bank/bank_main';
        $this->load->view('administrator/index', $data);

    }

    public function delete($bank_id)
    {
        $this->Bank_model->delete($bank_id);
        $this->session->set_flashdata('message', 'Bank berhasil dihapus');
        redirect('bank');
    }

    public function update($bank_id)
    {
        $data['warning'] = '';
        $data['title']   = 'Update Bank';
        $data['content'] = 'bank/bank_update';
        $data['read']    = $this->Bank_model->read($bank_id);

        if ($this->input->post('submit', true)):
            $this->form_validation->set_rules('bank_title', 'Nama Bank', 'required');
            $this->form_validation->set_rules('bank_rekening', 'Rekening Bank', 'required');
            $this->form_validation->set_rules('bank_atas_nama', 'Rekening Atas Nama', 'required');
            if ($this->form_validation->run() == true):
                $this->Bank_model->update($bank_id);
                $this->session->set_flashdata('message', 'Bank berhasil diubah');
                redirect('bank');
            else:
                $data['warning'] = validation_errors();
            endif;
        endif;
        $this->load->view('administrator/index', $data);
    }

    public function update_logo($bank_id)
    {
        $data['warning'] = '';
        $data['read']    = $this->Bank_model->read($bank_id);
        $data['content'] = 'bank/bank_logo_update';

        if ($this->input->post('submit', true)):
            $config['upload_path']   = '.' . $this->config->item('upload_path_bank');
            $config['allowed_types'] = $this->config->item('allowed_types');
            $config['encrypt_name']  = true;

            $this->load->library('image_lib');
            $this->load->library('upload');

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('bank_logo')):
                $data['warning'] = $this->upload->display_errors();
            else:

                $dt_logo = $this->upload->data();

                $logo_nm       = $dt_logo['raw_name'];
                $logo_ext      = $dt_logo['file_ext'];
                $logo_path     = $dt_logo['file_name'];
                $logo_fullpath = $dt_logo['full_path'];

                $config['image_library']  = $this->config->item('image_library');
                $config['maintain_ratio'] = $this->config->item('maintain_ratio');
                $config['width']          = '300';
                $config['height']         = '240';

                $config['source_image'] = $logo_fullpath;

                $this->image_lib->initialize($config);
                $this->image_lib->resize();
                $this->image_lib->clear();

                $this->Bank_model->unlink_bank_logo($bank_id);
                $this->Bank_model->update_logo($bank_id, $logo_path);
                $this->session->set_flashdata('message', 'Logo telah berhasil diubah');
                redirect('bank');
            endif;

        endif;
        $this->load->view('administrator/index', $data);

    }
}
