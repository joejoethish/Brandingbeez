<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_blog extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('blog_model');
    }

    function blog($type = '',$id='')
    {
        $model = 'blog_model';
        switch ($type) {
            case 'add':
                $this->load->view('blogs/add_blog');
                break;
            case 'list':
                $this->load->view('blogs/list');
                break;
            case 'get_blog_detail':
                $data =  $this->$model->get_blog_detail();
                echo json_encode($data);
                break;
            case 'update_blog':

                $blog_title =  $_POST['blog_title'];
                $blog_content =  $_POST['blog_content'];

                $updateData = [
                    'blog_title' => $blog_title,
                    'blog_content' => $blog_content,
                    'updated_on' => date("Y-m-d H:i:s"),
                ];
                // print_r($updateData);exit;
                $data = $this->$model->updateData($updateData, 'id_blog', $_POST['id_blog'], 'blogs');

                echo json_encode($data);
                break;
            case 'save_blog':
                // print_r($_POST);exit;
            // if(isset($_POST['id_blog']) && !empty($_POST['id_blog'])){

            //     $this->$model->deleteData('id_blog', $_POST['id_blog'], 'blogs');
            // }
            // print_r('no');exit;

                $blog_title =  $_POST['blog_title'];
                $blog_content =  $_POST['blog_content'];

                $addData = [
                    'blog_title' => $blog_title,
                    'blog_content' => $blog_content,
                    'created_on' => date("Y-m-d H:i:s"),
                ];

                $data = $this->$model->insertData($addData, 'blogs');
                echo json_encode($data);

                break;
            case 'get_blog_list':
                $data =  $this->$model->get_blog_list();
                echo json_encode($data);
                break;
            case 'delete':
                $data =  $this->$model->deleteData('id_blog', $_POST['id_blog'], 'blogs');
                echo json_encode($data);
                break;
            case 'view_blog':
                $data['view_blog'] =  $this->$model->get_blog_content($id);
                // echo "<pre>";print_r($data);exit;
                $this->load->view('blogs/blog_content',$data);

                break;
            case 'edit_blog':
                $data['edit_blog'] =  $this->$model->get_blog_content($id);
                echo json_encode($data);
                break;

            default:
                $this->load->view('blogs/list');
                break;
        }
    }
}
