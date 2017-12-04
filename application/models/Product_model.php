<?php
/**
 * Source : Joko Purwanto
 */
class Product_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function set_product()
    {
        $this->db->set('product_title', $this->input->post('product_title', true));
        $this->db->set('product_price', $this->input->post('product_price', true));
        $this->db->set('product_status', $this->input->post('product_status', true));
        $this->db->set('tb_categories_categories_id', $this->input->post('categories', true));
        $this->db->set('product_description', $this->input->post('product_description', true));
    }

    public function add_product($image)
    {
        $this->set_product();
        $this->db->set('product_image', $this->config->item('upload_path_product') . $image);
        return $this->db->insert('tb_product');
    }

    public function get_kode_product($categories_abbrev)
    {
        $this->db->select_max('product_id');
        $this->db->join('tb_categories', 'tb_categories.categories_id=tb_product.tb_categories_categories_id');
        $this->db->where('categories_abbrev',$categories_abbrev);
        return $this->db->get('tb_product');
    }

    public function get_all_product()
    {
        $this->db->order_by('product_id','ASC');
        $this->db->join('tb_categories', 'tb_categories.categories_id=tb_product.tb_categories_categories_id');
        return $this->db->get('tb_product');
    }

    public function delete_product($product_id)
    {
        $this->db->where('product_id', $product_id);

        $gtdata = $this->db->get('tb_product')->row();

        unlink(".$gtdata->product_image");
        return $this->db->delete('tb_product', array('product_id' => $product_id));
    }

    public function read($product_id)
    {
        $this->db->where('product_id', $product_id);
        return $this->db->get('tb_product')->row();
    }

    public function update($product_id)
    {
        $this->set_product();
        $this->db->where('product_id', $product_id);
        $this->db->update('tb_product');
    }

    public function update_image($product_id, $image_path)
    {
        $this->db->set('product_image',$this->config->item('upload_path_product').$image_path);
        $this->db->where('product_id',$product_id);
        return $this->db->update('tb_product');
    }

    function unlink_product($product_id){
        $this->db->where('product_id',$product_id);
        $gtdata=$this->db->get('tb_product')->row();

        unlink(".$gtdata->product_image");
    }
}
