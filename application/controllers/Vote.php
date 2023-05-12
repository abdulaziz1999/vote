<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Vote extends CI_Controller
{
        
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title']		    = "Dashboard Vote";
        $data['kandidat']   = $this->db->get_where('tb_kandidat',['ta_id' => $this->my_model->idta() ])->result();
        $this->template->load('template_front/template','vote/vote',$data);
	}

    public function lock(){
        $data['title']		    = "Dashboard Vote";
        $this->template->load('template_front/template','vote/lock',$data);
    }    

}

