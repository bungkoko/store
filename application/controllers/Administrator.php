<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Source by: Joko Purwanto
 */
class Administrator extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->signin();
    }

    public function signin()
    {
        $data['warning'] = '';
        $data['error']   = '';

        $this->form_validation->set_rules('user_name', 'username', 'required');
        $this->form_validation->set_rules('user_password', 'password', 'required');

        if ($this->form_validation->run() == true):
            $username = $this->input->post('user_name', true);
            $password = md5($this->input->post('user_password', true));

            //check admin auth
            $this->db->where('user_username', $username);
            $this->db->where('user_password', $password);
            $this->db->join('tb_user_role', 'tb_user.tb_user_role_user_role_id=tb_user_role.user_role_id');
            $query = $this->db->get('tb_user')->row();
            if (count($query)):
                $admin_auth = array('username' => $query->user_username,
                    'fullname'                     => $query->user_display_name,
                    'mail'                         => $query->user_mail,
                    'avatar'                       => $query->user_avatar,
                    'user_role'                    => $query->user_role_title,
                    'logged'                       => true,
                );
                $this->session->set_userdata($admin_auth);
                redirect('dashboard');
            else:
                $data['warning'] = "Username atau password tidak sesuai";
            endif;
        else:
            $data['error'] = validation_errors();
        endif;

        $data['title'] = 'Sign In Administrator';
        //$data['content'] = 'login/content';
        $this->load->view('administrator/signin', $data);
    }

    public function signout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('fullname');
        //$this->session->unset_userdata('email');
        $this->session->unset_userdata('user_role');
        $this->session->unset_userdata('logged');
        redirect('administrator');
    }
}
