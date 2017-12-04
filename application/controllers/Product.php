<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Source: Joko Purwanto
 */
class Product extends CI_Controller
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

        $data['warning']     = '';
        $data['title']       = 'Produk';
        $data['get_product'] = $this->Product_model->get_all_product();
        $data['content']     = 'product/product_list';

        $this->load->view('administrator/index', $data);
    }

    public function add()
    {
        $data['warning'] = '';
        $data['title']   = 'Produk';

        if ($this->input->post('submit', true)):
            $this->form_validation->set_rules('product_title', 'Judul Produk', 'required');
            $this->form_validation->set_rules('categories', 'Kategori', 'required');
            $this->form_validation->set_rules('product_status', 'Ketersediaan', 'required');
            $this->form_validation->set_rules('product_price', 'Harga', 'required');
            $this->form_validation->set_rules('product_description', 'Deskripsi', 'required');

            if ($this->form_validation->run() == true):
                $config['upload_path']   = '.' . $this->config->item('upload_path_product');
                $config['allowed_types'] = $this->config->item('allowed_types');
                $config['encrypt_name']  = true;

                $this->load->library('image_lib');
                $this->load->library('upload');

                $this->upload->initialize($config);

                if (!$this->upload->do_upload('product_image')):
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

                    $this->db->set('product_id', $this->get_kode_product());
                    $this->Product_model->add_product($img_path);
                    $this->session->set_flashdata('message', 'Produk telah berhasil ditambahkan');
                    redirect('product');
                endif;
            else:
                $data['warning'] = validation_errors();
            endif;
        endif;

        $data['get_categories'] = $this->Categories_model->all_categories();
        $data['content']        = 'product/product_main';
        $this->load->view('administrator/index', $data);
    }

    public function get_kode_product()
    {
        $categories_product = $this->input->post('categories', true);
        //$categories_product='6';
        $read = $this->Categories_model->readbykode($categories_product);

        $kode_kategori = $read->categories_abbrev;

        $gt_kode = $this->Product_model->get_kode_product($kode_kategori);

        $product_kd = '';

        foreach ($gt_kode->result() as $gtkode):
            if (($gtkode->product_id == null) || (substr($gtkode->product_id, 0, 3) != $kode_kategori)):
                $product_kd = $kode_kategori . '-' . '0001';
            else:
                $substr_kd  = (int) substr($gtkode->product_id, 5);
                $count_kd   = $substr_kd + 1;
                $product_kd = $kode_kategori . '-' . sprintf("%04s", $count_kd);
            endif;
        endforeach;
        //print_r($product_kd);

        return $product_kd;

    }

    public function delete($product_id)
    {
        $this->Product_model->delete_product($product_id);
        $this->session->set_flashdata('message' . "Produk berhasil dihapus");
        redirect('product');
    }

    public function update($product_id)
    {
        $data['warning']        = '';
        $data['title']          = 'Update Produk';
        $data['content']        = 'product/product_update';
        $data['read']           = $this->Product_model->read($product_id);
        $data['get_categories'] = $this->Categories_model->all_categories();
        if ($this->input->post('submit', true)):
            $this->form_validation->set_rules('product_title', 'Judul Product', 'required');
            $this->form_validation->set_rules('product_description', 'Deskripsi', 'required');
            $this->form_validation->set_rules('product_price', 'Harga', 'required');
            if ($this->form_validation->run() == true):
                $this->Product_model->update($product_id);
                $this->session->set_flashdata('message', 'Produk berhasil diubah');
                redirect('product');
            else:
                $data['warning'] = validation_errors();
            endif;
        endif;
        $this->load->view('administrator/index', $data);
    }

    public function update_status($product_id = '', $status = '')
    {
        if ($product_id == '') {
            redirect($this->uri->segment(3) . '/' . $this->uri->segment(4));
        }

        if ($status == 'y') {
            $status = 'n';
        } else {
            $status = 'y';
        }

        $this->db->where('product_id', $product_id);
        $this->db->set('product_status', $status);
        $this->db->update('tb_product');

        $this->session->set_flashdata('message', 'Status produk sudah diubah');
        redirect('product');
    }

    public function update_image($product_id)
    {
        $data['warning'] = '';
        $data['read']    = $this->Product_model->read($product_id);
        $data['content'] = "product/product_image_update";

        if ($this->input->post('submit', true)):
            //$this->form_validation->set_rules('product_title', 'Judul Produk', 'required');

            //if ($this->form_validation->run() == true):
            $config['upload_path']   = '.' . $this->config->item('upload_path_product');
            $config['allowed_types'] = $this->config->item('allowed_types');
            $config['encrypt_name']  = true;

            $this->load->library('image_lib');
            $this->load->library('upload');

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('product_image')):
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

                // $this->db->set('product_id', $this->get_kode_product());
                // $this->Product_model->add_product($img_path);
                //
                $this->Product_model->unlink_product($product_id);
                $this->Product_model->update_image($product_id, $img_path);
                $this->session->set_flashdata('message', 'Image produk telah berhasil diubah');
                redirect('product');
            endif;
            //else:
            // $data['warning'] = validation_errors();
            //endif;
        endif;
        $this->load->view('administrator/index', $data);
    }
}
