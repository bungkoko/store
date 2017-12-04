<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Source by: Joko Purwanto
 */
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //$this->load->model('Member_md');
        if ($this->session->userdata('logged') == false):
            redirect('Administrator');
        endif;
    }

    public function index()
    {
        $data['counter_categories']=$this->Categories_model->all_categories()->num_rows();
        $data['counter_product']=$this->Product_model->get_all_product()->num_rows();
        $data['title']   = "HerbalStore";
        $data['content'] = "dashboard";

        $this->load->view('administrator/index', $data);
    }

}
