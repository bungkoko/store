<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Source : Joko Purwanto
 */
class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['get_product'] = $this->Product_model->get_all_product();
        $data['get_list']    = $this->Categories_model->all_categories();
        $this->load->view('home', $data);
    }
}
