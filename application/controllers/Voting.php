<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Voting extends CI_Controller
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
                          $this->db->join('siswa s','s.idsiswa = v.id_siswa');
                          $this->db->order_by('id_vote','desc');
        $data['voting'] = $this->db->get('voting v')->result();
        $data['kandidat'] = $this->db->get('kandidat')->result();
        $this->template->load('template_back/template','voting/voting',$data);
	}

    public function vote_siswa(){
        $data = [
            'nama' => $this->input->post('nama_siswa'),
            'kelas'=> $this->input->post('kelas')
        ];
        $this->db->insert('siswa',$data);
        $id = $this->db->insert_id();
        
        $data_vote = [
            'id_siswa' => $id,
            'vote'     => $this->input->post('vote'),
            'ta_id'     => $this->my_model->idta()
        ];
        $this->db->insert('voting', $data_vote);
        redirect($_SERVER['HTTP_REFERER']);
    }


}

