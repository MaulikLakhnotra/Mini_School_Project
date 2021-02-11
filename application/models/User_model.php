<?php
    class User_model extends CI_Model
    {
        public function data()
        {
        return $this->db->query("SELECT * FROM stud")->result();
        }
        public function roll_num()
        {
        return $this->db->query("SELECT `roll_num` FROM `stud`;")->result_array();
        }
        public function name()
        {
        return $this->db->query("SELECT `name` FROM `stud`;")->result_array();
        }
        public function adr()
        {
        return $this->db->query("SELECT `adr` FROM `stud`;")->result_array();
        }
        public function city()
        {
        return $this->db->query("SELECT `city` FROM `stud`;")->result_array();    
        }
        public function contact()
        {
        return $this->db->query("SELECT `contact` FROM `stud`;")->result_array();        
        }
        public function std()
        {
        return $this->db->query("SELECT `std` FROM `stud`;")->result_array();
        }
        public function create($data)
        {
            $this->db->insert('stud',$data);
        }
        public function newad($data)
        {
            $this->db->insert('admission',$data);
            
        }
    }
?>