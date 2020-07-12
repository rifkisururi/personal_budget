<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Category extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Category_model');
    } 

    /*
     * Listing of category
     */
    function index()
    {
        $data['category'] = $this->Category_model->get_all_category();
        
        $data['_view'] = 'category/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new category
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $id_pengguna = $this->session->userdata("id");
            $params = array(
				'id_pengguna' => $this->session->userdata("id"),
				'jenis' => $this->input->post('jenis'),
				'nama' => $this->input->post('nama'),
            );
            
            $category_id = $this->Category_model->add_category($params);
            redirect('category/index');
        }
        else
        {            
            $data['_view'] = 'category/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a category
     */
    function edit($id)
    {   
        // check if the category exists before trying to edit it
        $data['category'] = $this->Category_model->get_category($id);
        
        if(isset($data['category']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'id_pengguna' => $this->input->post('id_pengguna'),
					'jenis' => $this->input->post('jenis'),
					'nama' => $this->input->post('nama'),
                );

                $this->Category_model->update_category($id,$params);            
                redirect('category/index');
            }
            else
            {
                $data['_view'] = 'category/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The category you are trying to edit does not exist.');
    } 

    /*
     * Deleting category
     */
    function remove($id)
    {
        $category = $this->Category_model->get_category($id);

        // check if the category exists before trying to delete it
        if(isset($category['id']))
        {
            $this->Category_model->delete_category($id);
            redirect('category/index');
        }
        else
            show_error('The category you are trying to delete does not exist.');
    }
    
}
