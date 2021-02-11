<?php
    class user extends CI_Controller
    {
        public function index()
        {
            $this->load->model('User_model');
            $data = $this->User_model->data();
            $abc['data1'] = $data;
            $this->load->view('view1',$abc);
            // echo "<pre>";
            // print_r($abc);
            // echo "</pre>";
        }
        public function sort()
        {
            if(!$this->session->userdata('id'))
                {
                    return redirect('admin/login');
                }
                else{
            $this->load->model('User_model','um');
            $data = $this->um->data();
            $roll_num = $this->um->roll_num();
            $name = $this->um->name();
            $adr = $this->um->adr();
            $city = $this->um->city();
            $contact = $this->um->contact();
            $std = $this->um->std();

            $array['data']=$data;
            $array['rn'] = $roll_num;
            $array['name'] = $name;
            $array['adr'] = $adr;
            $array['city'] = $city;
            $array['contact'] = $contact;
            $array['std'] = $std;   
            
            
            // print_r($roll_numb);
        
            $standard = $this->input->post('standard');
            $stdsort = $this->db->query("SELECT * FROM `stud` WHERE `std`= '$standard';")->result_array();
            $array['stdsort'] = $stdsort;
            
            // print_r($standard);
            // print_r($stdsort);
            $this->load->view('sort',$array);
        }
        }
        public function create()
        {   
            $this->form_validation->set_rules('roll_num','ROLL NUMBER','required|numeric');
            $this->form_validation->set_rules('std','STANDARD','required|numeric');
            $this->form_validation->set_rules('name','NAME','required');
            $this->form_validation->set_rules('adr','ADDRESS','required');
            $this->form_validation->set_rules('city','CITY','required');
            $this->form_validation->set_rules('contact','CONTACT','required|numeric');

            if($this->form_validation->run() == false)
            {
                $this->load->view('create');
            }
            else{
                $this->load->model('User_model');
                $data = array();
                $data['roll_num'] = $this->input->post('roll_num');
                $data['name'] = $this->input->post('name');
                $data['adr'] = $this->input->post('adr');
                $data['city'] = $this->input->post('city');
                $data['contact'] = $this->input->post('contact');
                $data['std'] = $this->input->post('std');
                $this->User_model->create($data);
                // $this->session->set_flashdata('success','data inserted');
                redirect(base_url('index.php/user/succ'));
            }
        }
        public function succ()
            {
                $this->load->view('success');
            }
        public function main()
            {
                $this->load->view('main');
            }
        public function newad()
            {
                
                
                $this->form_validation->set_rules('std','STANDARD','required|numeric');
                $this->form_validation->set_rules('fname','FIRST NAME','required');
                $this->form_validation->set_rules('lname','LAST NAME','required');
                $this->form_validation->set_rules('email','Email','required|valid_email');
                $this->form_validation->set_rules('mob','mob','required|numeric');

                if($this->form_validation->run() == false)
                {
                    $this->load->view('admission');
                }
                else{
                    $config['allowed_types']='jpg|png|jpeg';
                    $config['upload_path']='./marksheets/';
                    $data = $this->load->library('upload',$config);
                    
                    if($this->upload->do_upload('marksheet'))
                    {
                       
                        $file_name = $this->upload->data('file_name');
                        $full_path = $this->upload->data('full_path');
                        


                        $this->load->model('User_model');
                        $data = array();
                        $data['std'] = $this->input->post('std');
                        $data['fname'] = $this->input->post('fname');
                        $data['lname'] = $this->input->post('lname');
                        $data['email'] = $this->input->post('email');
                        $data['mob'] = $this->input->post('mob');
                        $data['upload'] = $file_name;
                        $data['filename'] = $full_path;
                        
                        $this->User_model->newad($data);
                        // $this->session->set_flashdata('success','data inserted');
                        $this->load->view('success',$data);
                    }
                    else
                    {
                        $this->load->view('admission');
                        print_r($this->upload->display_errors());
                    }
                    // $this->load->model('User_model');
                    // $data = array();
                    // $data['std'] = $this->input->post('std');
                    // $data['fname'] = $this->input->post('fname');
                    // $data['lname'] = $this->input->post('lname');
                    // $data['email'] = $this->input->post('email');
                    // $data['contact'] = $this->input->post('contact');
                    // $this->User_model->newad($data);
                    // // $this->session->set_flashdata('success','data inserted');
                    // redirect(base_url('index.php/user/succ'));
                }

            }
    }
?>


