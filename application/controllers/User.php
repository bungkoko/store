<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Source : Joko Purwanto
 */
class User extends CI_Controller
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
        $data['title']   = 'User';
        $data['warning'] = '';
        $data['read']    = $this->User_model->read();
        $data['content'] = 'user/user_main';
        $this->load->view('administrator/index', $data);
    }

    public function change_password()
    {
        $data['title']   = "Ubah password";
        $data['warning'] = '';

        if ($this->input->post('submit', true)):
            $this->form_validation->set_rules('old_password', 'Password Lama', 'required');
            $this->form_validation->set_rules('new_password', 'Password Baru', 'required');
            $this->form_validation->set_rules('new_password_confirm', "Konfirmasi Password Baru", 'required|matches[new_password]');
            if ($this->form_validation->run() == true):
                if ($this->User_model->check_password() == true):
                    $this->User_model->change_password();
                    $this->session->set_flashdata('message', 'Password telah berhasil diubah');
                    redirect('dashboard');
                else:
                    $data['warning'] = "Masukkan password yang benar";
                endif;
            else:
                $data['warning'] = validation_errors();
            endif;

        endif;
        $data['content'] = 'user/user_change_password';
        $this->load->view('administrator/index', $data);
    }

    public function avatar()
    {
        $data['warning'] = '';
        $data['title']   = "Ubah Avatar";
        if ($this->input->post('submit', true)):
            $config['upload_path']   = '.' . $this->config->item('upload_path_avatar');
            $config['allowed_types'] = $this->config->item('allowed_types');
            $config['encrypt_name']  = true;

            $this->load->library('image_lib');
            $this->load->library('upload');

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('user_avatar')):
                $data['warning'] = $this->upload->display_errors();
            else:
                $dt_img = $this->upload->data();

                $img_nm       = $dt_img['raw_name'];
                $img_ext      = $dt_img['file_ext'];
                $img_path     = $dt_img['file_name'];
                $img_fullpath = $dt_img['full_path'];

                $config['image_library']  = $this->config->item('image_library');
                $config['maintain_ratio'] = $this->config->item('maintain_ratio');
                $config['width']          = '300';
                $config['height']         = '240';

                $config['source_image'] = $img_fullpath;

                $this->image_lib->initialize($config);
                $this->image_lib->resize();
                $this->image_lib->clear();

                $this->User_model->unlink_avatar();
                $this->User_model->update_avatar($img_path);
                $this->session->set_flashdata('message', 'Image produk telah berhasil diubah');
                redirect('user');
            endif;
        endif;
        $data['content'] = 'user/user_image_update';
        $this->load->view('administrator/index', $data);
    }

}
