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
        $data['title']  = "Guru";
        $data['guru']   = $this->db->get_where('tb_guru',['ta_id' => $this->my_model->idta()])->result();
        $this->template->load('template_back/template','guru/guru',$data);
    }

    function dataEdit(){
        $data['id']   = $this->input->post('id');
        $data['guru'] = $this->db->get_where('tb_guru',['id_guru' => $data['id']])->row();
        $this->load->view('guru/edit_guru',$data);
    }

    function create(){
        $data = [
            'nama_guru'          => $this->input->post('nama_guru'),
        ];

        $this->db->insert('tb_guru',$data);
        $this->session->set_flashdata('sukses','sukses');
        redirect($_SERVER['HTTP_REFERER']);
    }

    function update($id){
      $data = [
        'nama_guru'          => $this->input->post('nama_guru'),
      ];

        $this->db->update('tb_guru',$data,['id_guru' => $id]);
        $this->session->set_flashdata('update','update');
        redirect($_SERVER['HTTP_REFERER']);
    }

    function delete($id){
        $this->db->delete('tb_guru',['id_guru' => $id]);
        $this->session->set_flashdata('hapus','hapus');
        redirect($_SERVER['HTTP_REFERER']);
    }

}
