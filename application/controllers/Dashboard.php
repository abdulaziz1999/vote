<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
        
    function __construct()
    {
        parent::__construct();
		if($this->session->userdata('level')){
        }else{
          redirect('login');
        }	
    }

    public function index()
    {
        $data['title']		    = "Dashboard Vote";
        $data['siswa']          = $this->db->get_where('tb_siswa',['ta_id' => $this->my_model->idta()])->num_rows();
        $data['guru']           = $this->db->get_where('tb_guru',['ta_id' => $this->my_model->idta()])->num_rows();
        $data['voting']         = $this->db->get_where('voting',['ta_id' => $this->my_model->idta()])->num_rows();
        $this->template->load('template_back/template','dashboard/dashboard',$data);
	}

    

}

