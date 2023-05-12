<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kandidat extends CI_Controller
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
        $data['title']	    = "Kandidat";
        $data['kandidat']   = $this->db->get_where('tb_kandidat',['ta_id' => $this->my_model->idta() ])->result();
        $this->template->load('template_back/template','kandidat/kandidat',$data);
    }

    function dataEdit(){
        $data['id']         = $this->input->post('id');
        $data['kandidat']   = $this->db->get_where('tb_kandidat',['id_kandidat' => $data['id']])->row();
        $this->load->view('kandidat/edit_kandidat',$data);
    }

    function create(){
        $data = [
            'ketua' => $this->input->post('ketua'),
            'wakil' => $this->input->post('wakil'),
            'ta_id' => $this->my_model->idta()
        ];

        $this->db->insert('tb_kandidat',$data);
        $this->session->set_flashdata('sukses','sukses');
        redirect($_SERVER['HTTP_REFERER']);
    }

    function update($id){
        $data = [
            'ketua' => $this->input->post('ketua'),
            'wakil' => $this->input->post('wakil'),
            'ta_id' => $this->my_model->idta()
        ];

        $this->db->update('tb_kandidat',$data,['id_kandidat' => $id]);
        $this->session->set_flashdata('update','update');
        redirect($_SERVER['HTTP_REFERER']);
    }

    function delete($id){
        $this->db->delete('tb_kandidat',['id_kandidat' => $id]);
        $this->session->set_flashdata('hapus','hapus');
        redirect($_SERVER['HTTP_REFERER']);
    }


}
