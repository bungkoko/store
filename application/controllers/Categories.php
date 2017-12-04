<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Source : Joko Purwanto
 */
class Categories extends CI_Controller
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
            $this->form_validation->set_rules('categories_title', 'Judul Kategori', 'required');
            $this->form_validation->set_rules('categories_abbrev', 'Kode Kategori', 'required|max_length[3]');

            if ($this->form_validation->run() == true):
                $this->Categories_model->add_categories();
                $this->session->set_flashdata('message', 'Kategori sudah ditambahkan');
                redirect('categories');
            else:
                $data['warning'] = validation_errors();
            endif;
        endif;

        $data['get_list'] = $this->Categories_model->all_categories();

        $data['title']   = 'Kategori Produk';
        $data['content'] = 'categories/categories_main';
        $this->load->view('administrator/index', $data);

    }

    public function delete($abbrev)
    {
        $this->Categories_model->delete_categories($abbrev);
        $this->session->set_flashdata('message', 'Kategori berhasil dihapus');
        redirect('categories');
    }

    function update($abbrev)
    {
    	$data['warning']='';
    	$data['title']='Update Kategori';
    	$data ['content']='categories/categories_update';
    	$data['read']=$this->Categories_model->read($abbrev);
    	if($this->input->post('submit',TRUE)):
    		$this->form_validation->set_rules('categories_title',"Judul Kategori",'required');
    		$this->form_validation->set_rules('categories_abbrev','Kode Kategori','required');
    		if($this->form_validation->run()==TRUE):
				$this->Categories_model->update($abbrev);
				$this->session->set_flashdata('message','Kategori berhasil diubah');
				redirect('categories');
			else:
				$data['warning']=validation_errors();
    		endif;
    	endif;
    	$this->load->view('administrator/index',$data);
    }
}
