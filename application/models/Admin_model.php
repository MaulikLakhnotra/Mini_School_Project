<?php
    class Admin_model extends CI_Model
    {
        public function validate($email,$password)
        {
            
            
            $q = $this->db->where(['email'=>$email,'password'=>$password])
                            ->get('admin');

            if($q->num_rows())
                    {
                        return $q->row()->id;
                        // $this->load->view('adminhome');
                    }
                else
                    {
                        redirect('login');
                    }
        }
        public function data_id($id)
        {
            $this->db->where('id',$id);
            return $user = $this->db->get_where('stud',array('id'=>$id))->row();
        }
        public function update($id)
        {
            $arr['id'] = $this->input->post('id');
            $arr['roll_num'] = $this->input->post('roll_num');
            $arr['name'] = $this->input->post('name');
            $arr['adr'] = $this->input->post('adr');
            $arr['city'] = $this->input->post('city');
            $arr['contact'] = $this->input->post('contact');
            $arr['std'] = $this->input->post('std');
            $this->db->where(array('id'=>$id));
            $this->db->update('stud',$arr);
            return $this->db->get_where('stud',array('id'=>$id))->row();
        }
        public function updated($id)
        {
            return $user = $this->db->get_where('stud',array('id'=>$id))->row();
        }
        public function admission()
        {
            return $this->db->get('admission')->result();
        }
        public function teacherdb()
        {
            return $this->db->get('teacherdb')->result();
        }
    }
?>