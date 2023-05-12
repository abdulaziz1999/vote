<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Voting_guru extends CI_Controller
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
        $data['title']      = "Dashboard Vote";
        $ta   = $this->db->select('id_ta')->get_where('tb_tahunajar',['status' => 'aktif'])->row()->id_ta;
                              $this->db->join('tb_guru g','g.idguru = v.id_guru');
                              $this->db->order_by('id_vote','desc');
        $data['voting']     = $this->db->get_where('voting v',['v.ta_id' => $ta])->result();
        $data['kandidat']   = $this->db->get_where('tb_kandidat',['ta_id' => $ta])->result();
        $this->template->load('template_back/template','voting/voting_guru',$data);
	}

    public function vote_guru(){
        $data = [
            'nama_guru' => $this->input->post('nama_guru'),
            'jk'        => $this->input->post('jk')
        ];
        $this->db->insert('tb_guru',$data);
        $id = $this->db->insert_id();
        
        $data_vote = [
            'id_guru'   => $id,
            'vote'      => $this->input->post('vote'),
            'ta_id'     => $this->my_model->idta()
        ];
        $this->db->insert('voting', $data_vote);
        redirect($_SERVER['HTTP_REFERER']);
    }


}

