<?php
    class admin extends MY_Controller
    {
        // public function __construct()
        // {
        //     parent::__construct();
        //     if(! $this->session->userdata('id'))
        //     {
        //     return redirect('admin/login');
        //     }

        public function home()
        {
            $this->load->view('adminlogin.php');
        }
        public function login()
        {
            $this->session->unset_userdata('id');                        
            $this->form_validation->set_rules('email','Email','required|valid_email');
            $this->form_validation->set_rules('password','Password','required');
            if($this->form_validation->run() == false)
            {
                $this->load->view('adminlogin');
            }
            else{
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $this->load->model('Admin_model');
                $id = $this->Admin_model->validate($email,$password);
                if($id)
                {
                    $this->session->set_userdata('id',$id);
                }
                else
                {
                    echo "Data Not Matched";
                }
                if(!$this->session->userdata('id'))
                {
                    return redirect('login');
                }
                if($id =="1")
                    {
                        return redirect('admin');
                    }
                    elseif($id =="2")
                    {
                        return redirect('principal');
                    }
                    elseif($id =="3")
                    {
                        return redirect('teacher'); 
                    }
                    else
                    {
                        return redirect('loginpage');
                    }
                    
                } 
        }
        public function adminpage()
        {
            if(!$this->session->userdata('id')){
            return redirect('loginpage');
            }
            else
            {
                $this->load->view('adminhome');
            }
        }
        public function principalhome()
        {
            if(!$this->session->userdata('id'))
            {
                return redirect('loginpage');
            }      
            else
            {
                $this->load->view('principalhome');
            }
        }
        public function teacherhome()
        {
            if(!$this->session->userdata('id'))
            {
                return redirect('loginpage');
            }
            else{
                $this->load->view('teacherhome');
            }
        }
        public function changes()
        {
            $id1 = $this->input->get($id);
            $this->load->model('Admin_model');
            $user = $this->Admin_model->get($id);
            $data = array();
            $data['user']=$user;
        }
        public function edit($id)
        {
            $this->load->model('Admin_model');
            $data['user'] = $this->Admin_model->data_id($id);
            // echo "<pre>";
            // print_r($id);
            // echo "<pre>";
            $this->load->view('edit',$data);
        }
        public function update($id)
        {
            $this->load->model('Admin_model');
            $data['user'] = $this->Admin_model->update($id);
            
            
            $up['user'] = $this->Admin_model->updated($id);
            $this->load->view('submitted',$up);
            // echo "<pre>";
            // print_r($up);
            // echo "<pre>";
        }
        public function admission()
        {
            $this->load->model('Admin_model');
            $arr['data'] = $this->Admin_model->admission();
            $this->load->view('adminadmissionview',$arr);
        }
        public function adminback()
        {
            $this->load->view('principalhome');
        }
        public function teacherdb()
        {
            if(!$this->session->userdata('id'))
            return redirect('admin/login');
            $this->load->model('Admin_model');
            $arr['data']=$this->Admin_model->teacherdb();
            $this->load->view('teacherdb',$arr);
        }
        public function logout()
        {
            $this->session->unset_userdata('id');
            return redirect('loginpage');
        }
        public function aboutus()
        {
            $this->load->view('about');
        }
    }
?>