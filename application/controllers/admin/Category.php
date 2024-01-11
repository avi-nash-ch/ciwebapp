<?php
Defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller{


    public function __construct(){
        parent::__construct();
        $admin = $this->session->userdata('admin');
        
        if(empty($admin)){
            $this->session->set_flashdata('msg','Your session has been expired');
            redirect(base_url().'admin/login/index');
        }
    }

//This method will show category list page
    public function index($page=1) {

        $perpage = 4;
        $param['offset'] = $perpage;
        $param['limit'] = ($page*$perpage)-$perpage;
        $param['m'] = $this->input->get('m');
        
        $this->load->model('Category_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url('admin/category/index');
        $config['total_rows'] =$this->Category_model->getCategoriesCount($param);
        $config['per_page'] = $perpage;
        $config['use_page_numbers'] = true;

        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Prev';
        $config['full_tag_open'] = "<ul class = 'pagination' >";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li class= "page-item">';
        $config['num_tag_close'] = '</li >';
        $config['cur_tag_open'] = "<li class = 'disabled page-item' ><li class = 'active page-item' ><a href= '#' class = \"page-link\">";
        $config['cur_tag_close'] = "<span class= 'sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li class= \"page-item\">";
        $config['next_tag1_close'] = "</li>";
        $config['prev_tag_open'] = "<li class= \"page-item\">";
        $config['prev_tag1_close'] = "</li>";
        $config['first_tag_open'] = "<li class= \"page-item\">";
        $config['first_tag1_close'] = "</li>";
        $config['last_tag_open'] = "<li class= \"page-item\">";
        $config['last_tag1_close'] = "</li>";
        $config['attributes'] = array ('class' => 'page-link');


        $this->pagination->initialize($config);
        $pagination_links = $this->pagination->create_links();

         $this->load->model('Category_model');
         $queryString = $this->input->get('q');
         $params['queryString'] = $queryString;

         $categories = $this->Category_model->getCategories($params);
         $categories = $this->Category_model->getCategoriesPage($param);

         $data['categories']= $categories;
         $data['queryString']= $queryString;
         $data['pagination_links'] = $pagination_links;

         $data['mainModule'] = 'category';
        $data['subModule'] = 'viewCategory';

         $this->load->view('admin/category/list',$data);
    }


//This method will show create category page
    public function create(){

        //$this->load->helper('common_helper');

        $config['upload_path']      = './public/uploads/category/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['encrypt_name']     = true;
        
        $this->load->library('upload', $config);
        $this->load->model('Category_model');

        $data['mainModule'] = 'category';
        $data['subModule'] = 'createCategory';

        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<p class= "invalid-feedback">','</p>');
        $this->form_validation->set_rules('name', 'Name','trim|required');


        if ($this->form_validation->run() == TRUE) {

            if (!empty($_FILES['image']['name'])) {
                //Now user has selected the file so we will proceed

                if($this->upload->do_upload('image')) {
                    //File uploaded successfully

                    $data= $this->upload->data();

                    //Resizing part
                    // resizeImage($config['upload_path'].$data['file_name'],$config['upload_path'].'thumb/'.$data['file_name'],500,370);
               
                    //We will create category without image
                    $formArray['image'] = $data['file_name'];
                    $formArray['name'] = $this->input->post('name');
                    $formArray['status'] = $this->input->post('status');
                    $formArray['created_at'] = date('Y-m-d H:i:s');
                    $this->Category_model->create($formArray);

                    $this->session->set_flashdata('success', 'Category added successfully.');
                    redirect(base_url(). 'admin/category/index');


                }else {
                    //We got some errors
                    $error =$this->upload->display_errors('<p class= "invalid-feedback">','</p>');
                    $data ['errorImageUpload'] = $error;
                    $this->load->view('admin/category/create', $data);

                }

            } else {
                //We will create category without image
                $formArray['name'] = $this->input->post('name');
                $formArray['status'] = $this->input->post('status');
                $formArray['created_at'] = date('Y-m-d H:i:s');
                $this->Category_model->create($formArray);

                $this->session->set_flashdata('success', 'Category added successfully.');
                redirect(base_url(). 'admin/category/index');
            }

        }else{
            //will show erròr
            $this->load->view('admin/category/create', $data);
        } 
    }


//This method will show edit category page
    public function edit($id) {

        $this->load->model('Category_model');

        $data['mainModule'] = 'category';
        $data['subModule'] = '';

        $category = $this->Category_model->getCategory($id);
        
        if(empty($category)) {
            $this->session->set_flashdata('error', 'Category not found');
            redirect(base_url().'admin/category/index');
        }
        //$this->load->helper('common_helper');

        $config['upload_path']      = './public/uploads/category/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['encrypt_name']     = true;
        
        $this->load->library('upload', $config);
     
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<p class= "invalid-feedback">','</p>');
        $this->form_validation->set_rules('name', 'Name','trim|required');

        if ($this->form_validation->run() == TRUE) {

            if (!empty($_FILES['image']['name'])) {

                if($this->upload->do_upload('image')) {
                    //File uploaded successfully

                    $data= $this->upload->data();

                    //Resizing part
                    // resizeImage($config['upload_path'].$data['file_name'],$config['upload_path'].'thumb/'.$data['file_name'],500,370);
               
                    $formArray['image'] = $data['file_name'];
                    $formArray['name'] = $this->input->post('name');
                    $formArray['status'] = $this->input->post('status');
                    $formArray['updated_at'] = date('Y-m-d H:i:s');

                    $this->Category_model->update($id,$formArray);

                    if (file_exists('./public/uploads/category/'.$category['image'])) {
                        unlink('./public/uploads/category/'.$category['image']);
                    }

                    $this->session->set_flashdata('success', 'Category updated successfully.');
                    redirect(base_url(). 'admin/category/index');

                }else {
                    $error =$this->upload->display_errors('<p class= "invalid-feedback">','</p>');
                    $data ['errorImageUpload'] = $error;
                    $data['category'] = $category;
                    $this->load->view('admin/category/edit', $data);
                }

            } else {
                $formArray['name'] = $this->input->post('name');
                $formArray['status'] = $this->input->post('status');
                $formArray['updated_at'] = date('Y-m-d H:i:s');
                $this->Category_model->update($id,$formArray);

                $this->session->set_flashdata('success', 'Category updated successfully.');
                redirect(base_url(). 'admin/category/index');
            }

        }else {
            $data['category'] = $category;
            $this->load->view('admin/category/edit', $data);
        }

    }


//This method will delete category
    public function delete($id) {

        $this->load->model('Category_model');
        $category = $this->Category_model->getCategory($id);
        
        if(empty($category)) {
            $this->session->set_flashdata('error', 'Category not found');
            redirect(base_url().'admin/category/index');
        }

        if (file_exists('./public/uploads/category/'.$category['image'])) {
            unlink('./public/uploads/category/'.$category['image']);
        }

        $this->Category_model->delete($id);

        $this->session->set_flashdata('success','Category deleted successfully.');
        redirect(base_url().'admin/category/index');

    }


 }
?>