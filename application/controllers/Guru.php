<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Guru extends CI_Controller
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
        $data['siswa'] = $this->db->get('siswa')->num_rows();
        $data['guru']   = $this->db->get('guru')->num_rows();
        $data['voting']   = $this->db->get('voting')->num_rows();
        $this->template->load('template_back/template','dashboard',$data);
	}


}

